<?php
include "database.php";

$query = "UPDATE sensus SET nama_ayah = '$_POST[nama_ayah]', pekerjaan_ayah = '$_POST[pekerjaan_ayah]', nama_ibu = '$_POST[nama_ibu]', pekerjaan_ibu = '$_POST[pekerjaan_ibu]', nama_anak = '$_POST[nama_anak]', alamat = '$_POST[alamat]' WHERE id = '$_POST[id]'";
$data = $con -> prepare($query);
$data -> execute();

header("location: form.php");