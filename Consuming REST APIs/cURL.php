<?php
$data = file_get_contents('https://jsonplaceholder.typicode.com/albums/1');

// var_dump($data);
var_dump($data);

// GET Request with cURL
$ch = curl_init("https://jsonplaceholder.typicode.com/posts/1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Get the response as a string

$response = curl_exec($ch); // Execute the request
curl_close($ch); // Close connection

echo $response; // Display the API response

// POST Request with cURL
$data = json_encode(["title" => "My Post", "body" => "Hello, world!", "userId" => 1]);

$ch = curl_init("https://jsonplaceholder.typicode.com/posts");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);

$response = curl_exec($ch);
curl_close($ch);

// POST Request with file_get_contents

$data = ["title" => "My Post", "body" => "Hello, world!", "userId" => 1];

$options = [
    "http" => [
        "header" => "Content-Type: application/json\r\n",
        "method" => "POST",
        "content" => json_encode($data)
    ]
];

$context = stream_context_create($options);
$response = file_get_contents("https://jsonplaceholder.typicode.com/posts", false, $context);

echo $response;

?>