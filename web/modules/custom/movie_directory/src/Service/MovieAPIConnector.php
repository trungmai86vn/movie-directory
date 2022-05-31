<?php

namespace Drupal\movie_directory\Service;
use \Drupal\Core\Http\ClientFactory;

class MovieAPIConnector {
    private $client;
    private $api_key;

    public function __construct(ClientFactory $client) {
        $movie_api_config = \Drupal::state()->get(\Drupal\movie_directory\Form\TMDBApiForm::MOVIE_API_CONFIG_PAGE);
        $this->api_key = $movie_api_config['api_key'] ?? '';

        $this->client = $client->fromOptions([
            'base_uri' => $movie_api_config['api_base_uri'] ?? 'https://api.themoviedb.org'
        ]);
    }

    public function discoverMovies(string $query = ''){
        try {
            $results = [];
            $endpoint = '/3/discover/movie';
            $options = [
                'query' => [
                    'api_key' => $this->api_key,
                    'query' => $query
                ],
            ];

            $response = $this->client->get($endpoint, $options);
            $results = json_decode($response->getBody()->getContents()) ?? [];

            return $results;
        } catch(\GuzzleHttp\Exception\RequestException $e){
            echo $e->getMessage();
            return [];
        }
    }
}