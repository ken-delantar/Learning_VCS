<?php
// Set appropriate headers for CORS
header("Access-Control-Allow-Origin: *"); // Allow requests from any origin; adjust as needed
header("Access-Control-Allow-Methods: GET, POST"); // Allow specific methods
header("Access-Control-Allow-Headers: Content-Type"); // Allow specific headers

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['user'] ?? ''; // Retrieve POST data
    echo 'Hello ' . htmlspecialchars($username);
} else {
    echo 'Invalid Request';
}
?>
