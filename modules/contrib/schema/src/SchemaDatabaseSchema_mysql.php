<?php
namespace Drupal\schema;

/**
 * @file
 * Schema module enhancements to DatabaseSchema_mysql
 */

use Drupal\Component\Utility\Unicode;
use Drupal\Core\Database\Driver\mysql\Schema as DatabaseSchema_mysql;

class SchemaDatabaseSchema_mysql extends DatabaseSchema_mysql implements DatabaseSchemaInspectionInterface {
  /**
   * Retrieve generated SQL to create a new table from a Drupal schema definition.
   *
   * @param $name
   *   The name of the table to create.
   * @param $table
   *   A Schema API table definition array.
   * @return
   *   An array of SQL statements to create the table.
   */
  public function getCreateTableSql($name, $table) {
    return parent::createTableSql($name, $table);
  }

  public function schema_type_map() {
    static $map;
    if (!isset($map)) {
      $map = array_flip(array_map('strtolower', $this->getFieldTypeMap()));
    }
    return $map;
  }

  /**
   * Overrides DatabaseSchema_mysql::getFieldTypeMap().
   */
  public function getFieldTypeMap() {
    $map = &drupal_static('SchemaDatabaseSchema_mysql::getFieldTypeMap');
    if (!isset($map)) {
      $map = parent::getFieldTypeMap();
      \Drupal::moduleHandler()
        ->alter('schema_field_type_map', $map, $this, $this->connection);
    }
    return $map;
  }

  public function prepareColumnComment($comment, $pdo_quote = TRUE) {
    // Truncate comment to maximum comment length.
    $comment = Unicode::truncate($this->connection->prefixTables($comment), DatabaseSchema_mysql::COMMENT_MAX_COLUMN, TRUE, TRUE);
    if ($pdo_quote) {
      return $this->connection->quote($comment);
    }
    return $comment;
  }

  public function recreatePrimaryKey($table_name, $primary_key) {
    $sql = 'ALTER TABLE {' . $table_name . '} DROP PRIMARY KEY, ADD PRIMARY KEY (' . $this->createKeySql($primary_key) . ')';
    $this->connection->query($sql)->execute();
  }

  public function getIndexes($table_name) {
    return $this->connection->query('SHOW INDEX FROM {' . $table_name . '} WHERE Key_name != \'PRIMARY\';')
      ->fetchCol(2);
  }

  public function updateTableComment($table_name, $comment) {
    $table_name = $this->getPrefixInfo($table_name)['table'];
    $sql = 'ALTER TABLE {' . $table_name . '} COMMENT ' . $this->prepareTableComment($comment);
    $this->connection->query($sql);
  }

  /**
   * Overrides DatabaseSchema_mysql::getPrefixInfo().
   *
   * @todo Remove when https://drupal.org/node/2223073 is fixed in core.
   */
  protected function getPrefixInfo($table = 'default', $add_prefix = TRUE) {
    $info = array('prefix' => $this->connection->tablePrefix($table));
    if ($add_prefix) {
      $table = $info['prefix'] . $table;
    }
    if (($pos = strpos($table, '.')) !== FALSE) {
      $info['database'] = substr($table, 0, $pos);
      $info['table'] = substr($table, ++$pos);
    }
    else {
      $db_info = $this->connection->getConnectionOptions();
      $info['database'] = $db_info['database'];
      $info['table'] = $table;
    }
    return $info;
  }

  public function prepareTableComment($comment, $pdo_quote = TRUE) {
    // Truncate comment to maximum comment length.
    $comment = Unicode::truncate($this->connection->prefixTables($comment), DatabaseSchema_mysql::COMMENT_MAX_TABLE, TRUE, TRUE);
    if ($pdo_quote) {
      return $this->connection->quote($comment);
    }
    return $comment;
  }

  public function inspect($connection = NULL, $table_name = NULL) {
    // Support the deprecated connection parameter.
    if (isset($connection) && $connection != $this->connection->getKey()) {
      $this->connection = Database::getConnection('default', $connection);
    }

    // Get the current database name
    $info = $this->connection->getConnectionOptions();
    $database = $info['database'];

    // Apply table prefixes.
    if (isset($table_name)) {
      $table_info = $this->getPrefixInfo($table_name);
      if (!empty($table_info['database']) && $database != $table_info['database']) {
        $database = $table_info['database'];
      }
      $table_name = $table_info['table'];
    }

    $tables = array();
    $args = array(':database' => $database);
    $sql = 'SELECT table_name, table_comment
            FROM information_schema.tables
            WHERE table_schema=:database ';
    if (isset($table_name)) {
      $sql .= 'AND table_name = :table ';
      $args[':table'] = $table_name;
    }
    $res = $this->connection->query($sql, $args);
    foreach ($res as $r) {
      $tables[$r->table_name]['description'] = $r->table_comment;
    }

    $sql = 'SELECT table_name, column_type, column_name, column_default,
                   extra, is_nullable, numeric_scale, column_comment, collation_name
            FROM information_schema.columns
            WHERE table_schema=:database ';
    if (isset($table_name)) {
      $sql .= 'AND table_name = :table ';
    }
    $sql .= 'ORDER BY table_name, ordinal_position';

    $res = $this->connection->query($sql, $args);
    foreach ($res as $r) {
      $r->new_table_name = schema_unprefix_table($r->table_name, $this->connection);

      $numeric = !is_null($r->numeric_scale);
      $col = array();
      $col['type'] = $r->column_type;
      if (preg_match('@([a-z]+)(?:\((\d+)(?:,(\d+))?\))?\s*(unsigned)?@', $col['type'], $matches)) {
        list($col['type'], $col['size']) = schema_schema_type($matches[1], $r->table_name, $r->column_name, 'mysql');
        if (isset($matches[2])) {
          if ($col['type'] == 'numeric' || $col['type'] == 'float' || $col['type'] == 'double') {
            $col['precision'] = $matches[2];
            $col['scale'] = $matches[3];
          }
          elseif (!$numeric) {
            $col['length'] = $matches[2];
          }
        }
        if (isset($matches[4])) {
          $col['unsigned'] = TRUE;
        }
      }
      if ($col['type'] == 'int' && isset($r->extra) &&
        $r->extra == 'auto_increment'
      ) {
        $col['type'] = 'serial';
      }
      $col['not null'] = ($r->is_nullable == 'YES' ? FALSE : TRUE);
      if (!is_null($r->column_default)) {
        if ($numeric) {
          // XXX floats!
          $col['default'] = intval($r->column_default);
        }
        else {
          $col['default'] = $r->column_default;
        }
      }
      if (!empty($r->column_comment)) {
        $col['description'] = $r->column_comment;
      }
      if (substr($r->collation_name, -4) == '_bin') {
        $col['binary'] = TRUE;
      }
      $tables[$r->table_name]['fields'][$r->column_name] = $col;

      // At this point, $tables is indexed by the raw db table name - save the unprefixed
      // name for later use
      $tables[$r->table_name]['name'] = $r->new_table_name;
    }

    $sql = 'SELECT table_name, column_name, index_name, sub_part, non_unique
            FROM information_schema.statistics
            WHERE table_schema=:database ';
    if (isset($table_name)) {
      $sql .= 'AND table_name = :table ';
    }
    $sql .= 'ORDER BY table_name, index_name, seq_in_index';

    $res = $this->connection->query($sql, $args);
    foreach ($res as $r) {
      if (isset($r->sub_part) && !is_null($r->sub_part)) {
        $col = array($r->column_name, intval($r->sub_part));
      }
      else {
        $col = $r->column_name;
      }
      if ($r->index_name == 'PRIMARY') {
        $type = 'primary key';
        $tables[$r->table_name][$type][] = $col;
        continue;
      }
      elseif ($r->non_unique == 0) {
        $type = 'unique keys';
      }
      else {
        $type = 'indexes';
      }
      $tables[$r->table_name][$type][$r->index_name][] = $col;
    }

    // Now, for tables which we have unprefixed, index $tables by the unprefixed name
    foreach ($tables as $tablename => $table) {
      $newname = $tables[$tablename]['name'];
      if ($tablename != $newname) {
        $tables[$newname] = $table;
        unset($tables[$tablename]);
      }
    }

    return $tables;
  }

}
