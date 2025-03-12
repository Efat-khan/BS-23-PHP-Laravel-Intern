<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/1');

echo $response->getBody();

// GET Request with Guzzle
$response = $client->request('POST', 'https://jsonplaceholder.typicode.com/posts', [
  'json' => [
      'title' => 'My Post about BS23',
      'body' => 'Hello, BS-23!',
      'userId' => 3
  ]
]);

echo $response->getBody();