<?php
header('Content-Type: application/json'); // Set content type to JSON

$response = array(
    "message" => "Hello from the back-end!"
);

echo json_encode($response); // Convert array to JSON and output it
?>
