<?php
session_start();
include '../config/conn.php';

if (isset($_SESSION['nama'])) {
	header("Location: ../dashboard.php");
	exit();
}

if (isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$sql = "SELECT *FROM user WHERE username = '$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);

        if ($row['role']=="admin") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "admin";
            header("location: ../admin.php");

        } else if ($row['role']=="petugas") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "petugas";
            header("location: ../petugas.php");

        }else if ($row['role']=="siswa") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "siswa";
            header("location: ../siswa.php");

        }else{
            echo "<script>alert('Gagal Login')</script>";
        }
	} else {
		echo "<script>alert('Email atau Password Salah, Coba Lagi')</script>";
	}
}
?>