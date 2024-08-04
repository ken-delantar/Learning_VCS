<?php
header('Content-Type: application/json');

// Retrieve the data from the form submission
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
?>
