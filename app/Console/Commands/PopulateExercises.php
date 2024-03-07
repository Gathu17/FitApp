<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\Models\Exercise;
use Illuminate\Support\Facades\DB;

class PopulateExercises extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:populate-exercises';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Populate database");
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://exercisedb.p.rapidapi.com/',
            'verify' => false
        ]);

        $response = $client->request('GET', 'exercises/bodyPart/waist', [
            'headers' => [
                'X-RapidAPI-Key' => '2ea7387852msh0ebd9869f071ee5p1437f2jsn882235faf958',
                'X-RapidAPI-Host' => 'exercisedb.p.rapidapi.com'
            ],
            'query' => [
                'limit' => '500'
            ]
        ]);

        $body = $response->getBody()->getContents();
        $data =  json_decode($body);
        // DB::beginTransaction();
        foreach ($data as $item){
            $exercise = new Exercise();
            $exercise['exercise_id'] = $item->id;
            $exercise['name'] = $item->name;
            $exercise['bodyPart'] = $item->bodyPart;
            $exercise['equipment'] = $item->equipment;
            $exercise['target'] = $item->target;
            $exercise['secondaryMuscles'] = json_encode($item->secondaryMuscles);
            $exercise['gifurl'] = $item->gifUrl;
            $exercise['instructions'] = json_encode($item->instructions);
            $exercise->save();
        }
        // DB::commit();
    }
}
