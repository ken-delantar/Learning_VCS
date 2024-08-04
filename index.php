<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Allow all origins for testing

// Get the raw POST data
$postData = file_get_contents('php://input');
$data = json_decode($postData, true); // Decode the JSON data

// Process the received data (for demonstration purposes)
$response = array(
    "id" => rand(1, 1000), // Generate a random ID for demonstration
    "name" => $data['name'],
    "email" => $data['email'],
    "age" => $data['age']
);

// Output JSON response
echo json_encode($response);
?>
