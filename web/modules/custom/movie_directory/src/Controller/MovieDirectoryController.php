<?php

namespace Drupal\movie_directory\Controller;

use Drupal\Core\Controller\ControllerBase;

class MovieDirectoryController extends ControllerBase {
    public function listing(){
        try {
            $content = [
                'movie_poster_image_endpoint' => 'https://www.themoviedb.org/t/p/w188_and_h282_bestv2',
                'data' => self::discoverMovies('spider man')
            ];
    
            return [
                '#theme' => 'movie-listing-theme',
                '#content' => $content
            ];
        } catch(\Exception $e){
            echo $e->getMessage();
        }
    }

    private function discoverMovies(string $query = ''){
        $movie_api_connector_service = \Drupal::service('movie_directory.api_connector');

        $results = $movie_api_connector_service->discoverMovies($query);

        return $results;
    }
}