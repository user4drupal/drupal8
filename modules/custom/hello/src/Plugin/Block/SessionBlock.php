<?php
namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a session block.
 *
 * @Block(
 *     id = "session_block",
 *     admin_label = @Translation("Sessions actives!")
 *)
 */
class SessionBlock extends BlockBase{

    protected function blockAccess(AccountInterface $account){
    if ($account->hasPermission('access hello')) {
      return AccessResult::allowed();
    }
    return AccessResult::forbidden();
  }
  

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