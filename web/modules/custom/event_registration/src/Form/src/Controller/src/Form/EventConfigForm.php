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

    $form['category'] = [
      '#type' => 'select',
      '#title' => $this->t('Category'),
      '#options' => [
        'online' => 'Online Workshop',
        'hackathon' => 'Hackathon',
        'conference' => 'Conference',
        'one_day' => 'One-day Workshop',
      ],
      '#required' => TRUE,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save Event'),
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->messenger()->addStatus($this->t('Event configuration saved.'));
  }
}

