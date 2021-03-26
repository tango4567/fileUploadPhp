<?php

header("Content-Type: application/json");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$server = "localhost";
$username = "root";
$password = "password";
$database = "tarunmahajan";

/*
 * Create Database Connection
 */
$connection = new mysqli($server, $username, $password, $database);
if ($connection === false) {
    die('Connection Failed ' . mysqli_connect_error() . '<br>');
}

$sql  = 'SELECT * FROM users';
$result = mysqli_query($connection, $sql);

$response = array();

while($re = mysqli_fetch_array($result)){
    $response[] = array(
        'id' => $re['id'],
        'first' => $re['first'],
        'last' => $re['last'],
        'mobile' => $re['mobile'],
        'email' => $re['email'],
        'register_timestamp' => $re['register_timestamp'],
        'image' => ''.$re['image'].''
    );
}

$json = json_encode($response, JSON_UNESCAPED_SLASHES);
echo $json;
mysqli_close($connection);
