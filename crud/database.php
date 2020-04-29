<?php
try {
    $con = new PDO('mysql:host=localhost:3306;dbname=uts_crud','ama','admin28282');
    $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    print $e -> getMessage();
    die();
}