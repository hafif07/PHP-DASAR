<?php 
// Koneksi ke database
$database=mysqli_connect("localhost","root","root","phpdasar");

function query($parameter){
	global $database;
	// ambil data dari tabel santri
	$result=mysqli_query($database,$parameter);
	if ($result==false){
		echo mysqli_error($database);
	}
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $database;
	//htmlspecialchar => menjadikan html sebagai string bukan scrip
	$nis=htmlspecialchars($data["nis"]);
	$nama=htmlspecialchars($data["nama"]);
	$email=htmlspecialchars($data["email"]);
	$jurusan=htmlspecialchars($data["jurusan"]);
	$gambar=htmlspecialchars($_POST["gambar"]);

	$query="INSERT INTO santri VALUES (NULL,'$nama','$nis','$email','$jurusan','$gambar')";
	mysqli_query($database,$query);
	//cek berhasil atau tidak
	$check = mysqli_affected_rows($database);
	return $check;
}
function hapus($id){
	global $database;
	$query = "DELETE FROM santri WHERE id=$id";
	mysqli_query($database,$query);
	//cek berhasil atau tidak 
	$check = mysqli_affected_rows($database);
	return $check;
}
function ubah($data){
	global $database;
	//htmlspecialchar => menjadikan html sebagai string bukan scrip
	$id=$data["id"];
	$nis=htmlspecialchars($data["nis"]);
	$nama=htmlspecialchars($data["nama"]);
	$email=htmlspecialchars($data["email"]);
	$jurusan=htmlspecialchars($data["jurusan"]);
	$gambar=htmlspecialchars($_POST["gambar"]);

	$query="UPDATE santri SET 
	nama= '$nama',
	nis= '$nis',
	email='$email',
	jurusan = '$jurusan',
	gambar = '$gambar'
	WHERE id= $id
	";
	mysqli_query($database,$query);
	//cek berhasil atau tidak
	$check = mysqli_affected_rows($database);
	return $check;
}

?>
