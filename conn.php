<?php

$db_host = "localhost:3306";
$db_user = "ama";
$db_pass = "admin28282";
$db_name = "uts_crud";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}

?>