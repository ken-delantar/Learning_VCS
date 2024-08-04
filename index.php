<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['user'] ?? '';
    echo 'Hello ' . $username;
}else{
    echo 'Invalid Request';
}