<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Utils;

class GeneralControllers extends Controller
{
    private function fetchPostsAsync($limit)
    {
        $client = new Client();
        $apiUrl = "https://excellentteam.id/artikel/wp-json/wp/v2/posts";

        $promises = [
            'posts' => $client->getAsync($apiUrl, [
                'verify' => false,
                'auth' => ['dimasbon', 'dongorasta'],
            ])
        ];

        $results = Utils::settle($promises)->wait();

        if (!isset($results['posts']['value'])) {
            return [];
        }

        $posts = json_decode($results['posts']['value']->getBody());
        if (!is_array($posts)) {
            return [];
        }

        return array_slice($posts, 0, $limit);
    }

    public function index()
    {
        $promises = [
            'responselates' => $this->fetchPostsAsync(1),
            'responselimit' => $this->fetchPostsAsync(3),
        ];
        return view('index', [
            'responselates' => $promises['responselates'],
            'responselimit' => $promises['responselimit'],
        ]);
    }
}
