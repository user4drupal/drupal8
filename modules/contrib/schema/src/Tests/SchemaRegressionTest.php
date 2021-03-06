<?php
namespace Drupal\schema\Tests;

/**
 * Schema Regression Tests
 *
 * @group schema
 */

class SchemaRegressionTest extends \Drupal\simpletest\WebTestBase {

  protected $profile = 'standard';

  public static $modules = ["schema", "schema_test"];
public static function getInfo() {
    return array(
      'name' => 'Schema Regression Tests',
      'description' => 'Schema Regression Tests',
      'group' => 'Schema',
    );
  }

  function setUp() {
    parent::setUp();
  }

  /**
   * Test API for adding tables
   */
  function testInspectionConflict518210() {
    // Drop the test table and re-create it with different columns.
    $table = 'schema_test_1';
    db_drop_table($table);
    $schema = array(
      'fields' => array(
        'sourceid' => array(
          'type' => 'int',
          'not null' => TRUE,
        ),
        'destid' => array(
          'type' => 'int',
          'not null' => TRUE,
        ),
      ),
    );
    db_create_table($table, $schema);

    // Do the full inspection, and get our specified tablename
    $inspect = schema_dbobject()->inspect();
    $fields = $inspect[$table]['fields'];

    // We should see only the columns from the prefixed version
    $this->assertFalse(isset($fields['fid']), 'Column fid does not exist');
    $this->assertTrue(isset($fields['sourceid']), 'Column sourceid exists.');
    $this->assertTrue(isset($fields['destid']), 'Column destid exists.');

    // Inspect the table by using schema_compare().
    $schema = schema_get_schema('schema_test_1');
    $comparison = schema_compare_table($schema);
    $this->assertEqual($comparison['status'], 'different', 'Table does not match its schema.');
  }
}
