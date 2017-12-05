<?php
namespace Drupal\hello\Controller;
use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase{
    
    public function content($moha){

     $user = $this->currentUser()->getAccountName();
     //kint($user);

     return array('#markup'=>t('Vous êtes sur sur la page Hello est votre nom est: @momo et votre parametre est:
      @pipo', array('@momo'=>$user, '@pipo'=>$moha)));
     
  }
}
