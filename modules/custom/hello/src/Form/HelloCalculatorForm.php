<?php

namespace Drupal\hello\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class HelloCalculatorForm extends FormBase
{
	public function getFormID() {
		return 'hello_form';
	}

	public function buildForm(array $form, FormStateInterface $form_state) {

		$form['Champ_texte_1'] = array(
			'#type' => 'textfield',
			'#title' => t('First value'),
			'#description' => t('Enter first value'),
			'#size' => '40',
			'#maxlegh' => '128',
			'#default_value' => t(''),
			'#required' => TRUE,
			);

		$form['Champ_operation'] = array(
  			'#type' => 'radios',
  			'#title' => t('Operation'),
  			'#description' => t('Choose operation for processing'),
  			'#default_value' => 'fois',
  			'#options' => array(
  				'plus' => t('Ajouter'), 
  				'moins' => t('Soustract'),
  				'fois' => t('Multiply'), 
  				'divise' => t('Divide'),
  				),
			);

		$form['Champ_texte_2'] = array(
			'#type' => 'textfield',
			'#title' => t('Second value'),			
			'#description' => t('Enter second value'),
			'#size' => '40',
			'#maxlegh' => '128',
			'#default_value' => t(''),
			'#required' => TRUE,	
			);
		
		$form['submit'] = array(
  			'#type' => 'submit',
  			'#value' => t('Calculate'),
  			'#states' => array(
       			'disabled' => array(
         		':input[name="valeur2"]'=>array('value' == '0'),
        		':input[name="operation"]'=>array('value' == '3'),
       )
     )
			);

		return $form;
	}

	public function submitForm(array &$form, FormStateInterface $form_state) {
		$champ_un = $form_state->getValue('Champ_texte_1');
		$champ_deux = $form_state->getValue('Champ_texte_2');
		$operation = $form_state->getValue('Champ_operation');
		switch ($operation) {
			case 'plus':
				$operation = $champ_un + $champ_deux;
				break;
			case 'moins':
				$operation = $champ_un - $champ_deux;
				break;
			case 'fois':
				$operation = $champ_un * $champ_deux;
				break;
			case 'divise':
				$operation = $champ_un / $champ_deux;
				break;
			
		}

	  	drupal_set_message($operation);

	}

	public function validateForm(array &$form, FormStateInterface $form_state){
		$champ_un = $form_state->getValue('Champ_texte_1');
		if(!is_numeric($champ_un)){
			$form_state->setErrorByName('Champ_texte_1', t('numeric hada ya 3allawa'));
		}

		$champ_deux = $form_state->getValue('Champ_texte_2');
		if(!is_numeric($champ_deux)){
			$form_state->setErrorByName('Champ_texte_2', t('numeric hada ya 3allawa'));
		}

		$operation = $form_state->getValue('Champ_operation');
		if($champ_deux == 0 && $operation == 'divise'){
			$form_state->setErrorByName('', t('machi haka kho!!!'));
		}
	}
	
	
}