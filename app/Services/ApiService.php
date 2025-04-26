<?php 

namespace App\Services; 

use GuzzleHttp\Client; 
use GuzzleHttp\Exception\RequestException; 

class ApiService 
{ 
    protected $client;     
    protected $apiKey; 

    public function __construct() 
    { 
        $this->client = new Client(); 
        $this->apiKey = env('RAPIDAPI_KEY'); // Get API key from .env file 
    } 

    public function getAllTeams() 
    { 
        try { 
            $response = $this->client->request('GET', 'https://premier-league18.p.rapidapi.com/teams', [ 
                'headers' => [ 
                    'x-rapidapi-key' => $this->apiKey 
                ], 
                'verify' => false  // Disable SSL verification 
            ]); 

            return json_decode($response->getBody()->getContents(), true); 
        } catch (RequestException $e) { 
            return ['error' => $e->getMessage()]; 
        } 
    } 
}