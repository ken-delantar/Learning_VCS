<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: https://ken-delantar.github.io/Learning_VCS/'); // Adjust as needed

// Check if POST request and handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Prepare a response array
    $response = array(
        'status' => 'success',
        'message' => 'Data received successfully!',
        'data' => array(
            'name' => $name,
            'email' => $email
        )
    );

    // Send the JSON response
    echo json_encode($response);
} else {
    // Handle non-POST requests
    http_response_code(405); // Method Not Allowed
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method'));
}
?>
