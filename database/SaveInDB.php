<?php
define("REPOSITORY", $_SERVER['DOCUMENT_ROOT']);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo REPOSITORY . ' <---------Test<br>';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SaveInDB
 *
 * @author tango4567
 */

$fname = filter_input(INPUT_POST, 'firstName');
$lname = filter_input(INPUT_POST, 'lastName');
$mobile = filter_input(INPUT_POST, 'mobileNumber');
$email = filter_input(INPUT_POST, 'email');
$university = filter_input(INPUT_POST, 'university');

$currentDirectory = getcwd();
echo 'Current Path: ' . $currentDirectory . '<br>';

$uploadDirectory = "/uploads/";

$errors = []; //-->>errors prints

$fileExtensionsAllowed = ['jpeg', 'jpg', 'png', 'bmp', 'gif']; //-->> file extensions 

$file = $_FILES['file']['name'];
echo "<br>File: " . $file . "<br>";

$fileError = $_FILES["file"]["error"];
echo '<br>File Error: ' . $fileError . '<br>';

$fileTmp = $_FILES['file']['name'];
echo '<br>File Tmp: ' . $fileTmp . '<br>';

$fileName = str_replace(" ", "_", $fileTmp);
echo '<br>File Name: ' . $fileName . '<br>';

$fileSize = $_FILES['file']['size'];
echo '<br>File Size: ' . $fileSize . '<br>';

$fileTmpName  = $_FILES['file']['tmp_name'];
echo '<br>File TmpName: ' . $fileTmpName . '<br>';

$fileType = $_FILES['file']['type'];
echo '<br>File Type: ' . $fileType . '<br>';

$tmp = pathinfo($fileName, PATHINFO_EXTENSION);
echo "<br>Tmp: " . $tmp;

$explode = explode('.', $fileName);
$fileExtension = strtolower(end($explode));
echo '<br>File Extension: ' . $fileExtension . '<br>';

$uploadPath = $currentDirectory . $uploadDirectory . basename($fileName);
echo '<br>File upload path: ' . $uploadPath . '<br>';

if (!in_array($fileExtension, $fileExtensionsAllowed)) {
    $errors[] = "<br>This file extension is not allowed. Please upload a JPEG, bmp,or PNG file.<br>";
}

if ($fileSize > 4000000) {
    $errors[] = "<br>File exceeds maximum size (4MB)<br>";
}

if (!is_writeable(REPOSITORY)) {
    echo "<br>Cannot write to destination file " . REPOSITORY . "<br>";
} else {
    echo "<br>You have write permission<br>";
}

if (empty($errors)) {
    echo "<br>---------->" . basename($fileName) . "<br> " . dirname(__FILE__) . "<br>";
    $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

    echo '<br>------------------------------->' . $didUpload . '<-------------------------------<br>';
    echo '<br>----------' . $uploadPath . '<br>';

    if ($didUpload == 1) {
        echo "<br>The file " . basename(REPOSITORY) . " has been uploaded<br>";
    } else {
        echo "<br>".basename(REPOSITORY)." An error occurred. Please contact the administrator.<br>";
    }
} else {
    foreach ($errors as $errors) {
        echo $errors . "<br>These are the errors" . "\n";
    }
}

include './connectdb.php';
//include './getallusers.php'; <!-- Call This File For json Output-->

echo "<br>First Name: <b>" . $fname . "</b><br>";
echo "<br>Last Name: <b>" . $lname . "</b><br>";
echo "<br>Mobile Number: <b>" . $mobile . "</b><br>";
echo "<br>Email: <b>" . $email . "</b><br>";
echo "<br>University: <b>" . $university . "</b><br>";
echo "<br>Image Path: <b>" . $uploadPath . "</b><br>";

echo '<br>Connection Closed';
