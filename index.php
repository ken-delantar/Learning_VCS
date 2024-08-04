<?php
// Set appropriate headers for CORS
header("Access-Control-Allow-Origin: *"); // Allow requests from any origin; adjust as needed
header("Access-Control-Allow-Methods: GET, POST"); // Allow specific methods
header("Access-Control-Allow-Headers: Content-Type"); // Allow specific headers

// Set cookies with SameSite attribute if needed
// Note: If cookies are not needed, you can remove these lines.
setcookie("user", '', [
    'expires' => time() + 3600,
    'path' => '/',
    'domain' => 'login-register.hstn.me', // Adjust to your domain
    'secure' => true, // Ensure cookies are sent over HTTPS
    'httponly' => true,
    'samesite' => 'None' // Allows cross-site requests; use 'Lax' or 'Strict' if applicable
]);

// Process the request
if ($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = '';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $username = $_GET['user'] ?? '';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['user'] ?? '';
    }

    echo 'Hello ' . htmlspecialchars($username);
} else {
    echo 'Invalid Request';
}
?>
