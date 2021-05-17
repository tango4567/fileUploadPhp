<?php

require_once '../config/DBApiConnect.php';

$dbApiConnect = new DBApiConnect();
$conn = $dbApiConnect->createConnection();

$createTable = 'CREATE TABLE IF NOT EXISTS items 
       (id INT NOT NULL PRIMARY KEY ,  
	user_id VARCHAR(255) NOT NULL ,
        user_name VARCHAR(255) NOT NULL
       );';

$result = pg_query($conn, $createTable);
if(!$result){
    echo pg_last_error($conn);
}else{
    echo $result;
}