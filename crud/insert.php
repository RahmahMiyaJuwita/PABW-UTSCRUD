<?php

include "database.php";

$query = "INSERT INTO sensus VALUES ('','$_POST[nama_ayah]','$_POST[pekerjaan_ayah]','$_POST[nama_ibu]','$_POST[pekerjaan_ibu]','$_POST[nama_anak]','$_POST[alamat]')";
$data = $con -> prepare($query); //persiapan query
$data -> execute();              //menjalankan query

header("location: form.php");