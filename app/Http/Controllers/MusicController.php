<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;

class MusicController extends Controller
{
    public function getInfo()
    {
        $albumId = '4eiZ3Sozij6eF51uNkkE6B';
        $clientId = 'ad6c666584314a9bbf6d3eee3ef022aa';
        $clientSecret = '63b2cdea62ad44bc8fda0afc1fcf61d1';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->getAccessToken($clientId, $clientSecret),
        ])->get('https://api.spotify.com/v1/albums/' . $albumId);

        if ($response->ok()) {
            $album = $response->json();

            // return $album;
            // return view('music', compact('album'));
        }

        abort(404);
    }

    public function manyAlbum()
    {

        $client = new Client();
        $clientId = 'ad6c666584314a9bbf6d3eee3ef022aa';
        $clientSecret = '63b2cdea62ad44bc8fda0afc1fcf61d1';

        // $albumIds = ['4eiZ3Sozij6eF51uNkkE6B','0Y4DF7a6rgiQzytpHJiquD']; // Liste des identifiants d'albums
        $albumIds = ['4eiZ3Sozij6eF51uNkkE6B']; // Liste des identifiants d'albums

        $promises = [];

        if ($this->checkConnection()) {
            foreach ($albumIds as $albumId) {
                $promise = $client->getAsync('https://api.spotify.com/v1/albums/' . $albumId, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->getAccessToken($clientId, $clientSecret),
                    ]
                ]);
    
                $promises[$albumId] = $promise;
            }
    
        }

        
        $results = Promise\unwrap($promises);

       
        $albums = [];

        foreach ($results as $albumId => $response) {
            if ($response->getStatusCode() === 200) {
                $album = json_decode($response->getBody(), true);
                $albums[$albumId] = $album;
            }
        }


        // $limit = 2; // Nombre d'albums à récupérer par page
        // $offset = 0; // Décalage initial
        
        // $promises = [];
        // $totalAlbums = count($albumIds);
        
        // do {
        //     $batchIds = array_slice($albumIds, $offset, $limit); // IDs d'albums pour la page actuelle
        
        //     foreach ($batchIds as $albumId) {
        //         $promise = $client->getAsync('https://api.spotify.com/v1/albums/' . $albumId, [
        //             'headers' => [
        //                 'Authorization' => 'Bearer ' . $this->getAccessToken($clientId, $clientSecret),
        //             ]
        //         ]);
        
        //         $promises[$albumId] = $promise;
        //     }
        
        //     $offset += $limit;
        // } while ($offset < $totalAlbums);
        
        // $results = Promise\unwrap($promises);
        
        // $albums = [];
        
        // foreach ($results as $albumId => $response) {
        //     if ($response->getStatusCode() === 200) {
        //         $album = json_decode($response->getBody(), true);
        //         $albums[$albumId] = $album;
        //     }
        // }

        // $albums = [
        //     'albums' => $albums,
        //     'offset' => $offset,
        //     'limit' => $limit,
        //     'totalAlbums' => $totalAlbums,
        // ];
        // return $albums;
        return view('music', compact('albums'));

    }

    private function getAccessToken($clientId, $clientSecret)
    {
        if($this->checkConnection())
        {
            $response = Http::asForm()->withHeaders([
                'Authorization' => 'Basic ' . base64_encode($clientId . ':' . $clientSecret),
            ])->post('https://accounts.spotify.com/api/token', [
                        'grant_type' => 'client_credentials',
                    ]);
    
            if ($response->ok()) {
                $accessToken = $response->json()['access_token'];
                return $accessToken;
            }
    
        }
        
        return null;
    }

    private function checkConnection()
    {
        try{

            $response = http::get('https://google.com/');

            if($response->successful())
            {
                return true;
            } else
            {
                return false;
            }
        } catch(\Exception $e)
        {
            return false;
        }
    }
    // Utilisez la fonction getAlbumInfo pour récupérer les informations de votre album

    
}