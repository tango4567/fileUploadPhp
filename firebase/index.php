<?php

require_once ("./vendor/autoload.php");

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;


$factory = (new Factory)
    ->withServiceAccount('./firebaseConfig/firebase_config.json')
    ->withDatabaseUri('https://tarunmahajan-web.firebaseio.com/');

$auth = (new Auth);

$auth = $factory->createAuth();

$email = "admin@tarunmahajan.com";
$clearTextPassword = "123456";

$signInResponse = $auth->signInWithEmailAndPassword($email, $clearTextPassword);

if($signInResponse != null){
    
    
    for($c=0; $c<count($signInResponse); $c++){
        echo $signInResponse[$c]."\r\n";
    }

     print_r(array_values($signInResponse->data()));
    
}else{
    echo 'Null';
}



