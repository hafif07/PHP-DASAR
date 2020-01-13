<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
include("./pertemuan7/login/login.php");

 ?>




 global $database;
	//htmlspecialchar => menjadikan html sebagai string bukan scrip
	$nis=htmlspecialchars($data["nis"]);
	$nama=htmlspecialchars($data["nama"]);
	$email=htmlspecialchars($data["email"]);
	$jurusan=htmlspecialchars($data["jurusan"]);
	$gambar=htmlspecialchars($_POST["gambar"]);

	$query="UPDATE mahasiswa SET 
	nama= '$nama',
	nis= '$nis',
	email='$email',
	jurusan = '$jurusan',
	gambar = '$gambar'
	WHERE id= 8
	";
	mysqli_query($database,$query);
	//cek berhasil atau tidak
	$check = mysqli_affected_rows($database);
	return $check;