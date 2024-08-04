<?php
// Allow requests from the specific origin
header('Access-Control-Allow-Origin: https://ken-delantar.github.io'); 
// Allow all origins (for testing purposes)
header('Access-Control-Allow-Origin: *');

// Allow specific HTTP methods
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

// Allow specific headers
header('Access-Control-Allow-Headers: Content-Type');

// Content-Type header
header('Content-Type: application/json');

// Sample user data
$user = array(
    "id" => 123,
    "name" => "Alice",
    "email" => "alice@example.com",
    "age" => 30
);

// Output JSON
echo json_encode($user);
?>
