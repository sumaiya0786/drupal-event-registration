<?php

namespace Drupal\event_registration\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class EventConfigForm extends FormBase {

  public function getFormId() {
    return 'event_config_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['event_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Event Name'),
      '#required' => TRUE,
    ];

    $form['event_date'] = [
      '#type' => 'date',
      '#title' => $this->t('Event Date'),
      '#required' => TRUE,
    ];

    $form['event_location'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Event Location'),
      '#required' => TRUE,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save Event'),
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {

    \Drupal::messenger()->addMessage(
      $this->t('Event "@name" has been configured successfully.', [
        '@name' => $form_state->getValue('event_name'),
      ])
    );
  }

}

