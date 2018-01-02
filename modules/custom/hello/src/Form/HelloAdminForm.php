<?php

namespace Drupal\hello\Form;

use Drupal\Core\State\State;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface; 

class HelloAdminForm extends ConfigFormBase {

	public function getFormID()	 {

		return 'hello_admin_form';
	}

	protected function getEditableConfigNames() {

		return ['hello.config'];
	}

	public function buildForm(array $form, FormStateInterface $form_state) {
		
		$value = $this->config('hello.config')->get('color');
		$form['select_color'] = array(
    		'#type' => 'select',
 			'#title' => $this->t('Select element'),
			'#options' => array(
			    '1' => $this->t('Vert'),
			    '2' => $this->t('Orange'),
			    '3' => $this->t('Bleu'),
			  ),
			'#default' => $value,
			);
		
		return parent::buildForm($form, $form_state);
	}

	public function submitForm(array &$form, FormStateInterface $form_state) {

		$valeur1 = $form_state->getValue('select_color');
        $this->config('hello.config')->set('color',$valeur1)->save();
		
		parent::submitForm($form, $form_state);
	}
}
