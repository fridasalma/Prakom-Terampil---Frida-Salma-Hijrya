<?php

$server = "localhost";
$user = "admin";
$password = "";
$nama_database = "database pasien";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
	die("Gagal Terhubung ke Database: " . mysqli_connect_error());
}
?>