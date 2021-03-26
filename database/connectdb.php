<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$errorMsg = "We found some issue with it.<br>We request you to please take a screen shot<br>or photo of this and send on support@tarunmahajan.com<br>";
$server = "localhost";
$username = "root";
$password = "password";
$database = "tarunmahajan";

/*
 * Create Database Connection
 */
$connection = new mysqli($server, $username, $password, $database);

//Check connection is valid or not 
if ($connection === false) {
    die('Connection Failed ' . mysqli_connect_error() . '<br>');
}

$sqlCreateTableQuery = "CREATE TABLE IF NOT EXISTS users ("
    . "id INT(6) AUTO_INCREMENT PRIMARY KEY,"
    . "first VARCHAR(30) NOT NULL,"
    . "last VARCHAR(30) NOT NULL,"
    . "mobile VARCHAR(50) NOT NULL,"
    . "email VARCHAR(100) NOT NULL,"
    . "image LONGTEXT NOT NULL,"
    . "register_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);";

if (mysqli_query($connection, $sqlCreateTableQuery)) {
    $currentTiming = date("Y-m-d H:i:s");
    $insertData = "INSERT INTO users (id, first, last, mobile, email, register_timestamp, image) VALUES(NULL, '$fname','$lname','$mobile','$email',CURRENT_TIME(),'$uploadPath')";

    if (mysqli_query($connection, $insertData)) {
        echo 'Insert successfully. <br>';
    } else {
        echo 'Failed to Insert <br>' . mysqli_error($connection);
    }
} else {
    echo 'Failed to Create it<br>' . mysqli_error($connection) . '<br>';
}

echo '<br>Connected successfully<br>';
mysqli_close($connection);
