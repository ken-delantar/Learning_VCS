<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo $user = $_POST['user'] ?? '';
}else{
    echo 'Invalid Request';
}