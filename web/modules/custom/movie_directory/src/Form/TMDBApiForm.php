<?php

namespace Drupal\movie_directory\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class TMDBApiForm extends FormBase {
    const MOVIE_API_CONFIG_PAGE = 'movie_api_config_page:values';

    public function getFormId(){
        return 'tmdb_api_setting';
    }

    public function buildForm(array $form, FormStateInterface $form_state){
        $values = \Drupal::state()->get(self::MOVIE_API_CONFIG_PAGE);

        $form = [
            'api_base_url' => [
                '#type' => 'textfield',
                '#title' => $this->t('TMDB Base API URL'),
                '#description' => $this->t('TMDB Base API URL'),
                '#required' => true,
                '#default_value' => $values['api_base_url'] ?? ''
            ],
            'api_key' => [
                '#type' => 'textfield',
                '#title' => $this->t('TMDB Base API Key (v3)'),
                '#description' => $this->t('TMDB Base API Key (v3)'),
                '#required' => true,
                '#default_value' => $values['api_key'] ?? ''
            ],
            'actions' => [
                '#type' => 'actions',
                'submit' => [
                    '#type' => 'submit',
                    '#value' => $this->t('Save'),
                    '#button_type' => 'primary'
                ]
            ],
        ];

        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state){
        $submitted_values = $form_state->cleanValues()->getValues();

        \Drupal::state()->set(self::MOVIE_API_CONFIG_PAGE, $submitted_values);

        $messenger = \Drupal::service('messenger');
        $messenger->addMessage($this->t('API configuration has been saved.'));
    }
}