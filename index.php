<?php
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
