<?php

namespace Drupal\movie_directory\Controller;

use Drupal\Core\Controller\ControllerBase;

class MovieDirectoryController extends ControllerBase {
    public function listing(){
        $content = [
            'name' => 'trung'
        ];

        return [
            '#theme' => 'movie-listing-theme',
            '#content' => $content
        ];
    }
}