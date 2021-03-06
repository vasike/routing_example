<?php

/**
 * @file
 * Contains \Drupal\routing_example\Form\RoutingExampleForm.
 */

namespace Drupal\routing_example\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class RoutingExampleForm.
 *
 * @package Drupal\routing_example\Form
 */
class RoutingExampleForm extends FormBase {

  public function getFormId() {
    // Unique ID of the form.
    return 'routing_example_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Create a $form API array.
    $form['phone_number'] = array(
      '#type' => 'tel',
      '#title' => $this->t('Your phone number'),
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Validate submitted form data.
    if (strlen($form_state->getValue('phone_number')) < 3) {
      $form_state->setErrorByName('phone_number', $this->t('The phone number is too short. Please enter a full phone number.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Handle submitted form data.
    drupal_set_message($this->t('Your phone number is %number', array('%number' => $form_state->getValue('phone_number'))));
  }
}
