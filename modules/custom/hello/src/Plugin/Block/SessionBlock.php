<?php
namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a session block.
 *
 * @Block(
 *     id = "session_block",
 *     admin_label = @Translation("Sessions actives!")
 *)
 */
class SessionBlock extends BlockBase{

	  public function build(){
    $database = \Drupal::database();
    $num_session = $database->select('sessions', 'S')
      ->fields('s', array('uid'))
      ->countQuery()
      ->execute()
      ->fetchField();
  
  	$block = [$markup = t('il y a @tota sessions actives rkhis', array('@tota'=>$num_session))];

  	return array(
  		'#markup'=>$markup,
  		'#cache'=>array(
  			'keys'=>['caca'],
  			'max-age'=>'10',
  			),
  		);

	}
}