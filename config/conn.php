<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "siswa";
$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn){
	die("koneksi database gagal: " . mysqli_connect_error());
}
?>