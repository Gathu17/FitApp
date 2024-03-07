<?php

namespace App\Http\Controllers\API\V1\Exercise;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class ExerciseController extends Controller
{
    //
    public function index()
    {

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://exercisedb.p.rapidapi.com/',
            'verify' => false
        ]);

        $response = $client->request('GET', 'exercises/bodyPart/back', [
            'headers' => [
                'X-RapidAPI-Key' => '2ea7387852msh0ebd9869f071ee5p1437f2jsn882235faf958',
                'X-RapidAPI-Host' => 'exercisedb.p.rapidapi.com',
                'Content-Type' => 'application/json'
            ],
            'query' => [
                'limit' => '10'
            ]
        ]);

        $body = $response->getBody()->getContents();
        $data = json_decode($body);

        var_dump((array)$data) ;
        
    }
}
