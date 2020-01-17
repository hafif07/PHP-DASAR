
<?php 
$database = mysqli_connect("localhost","root","root","phpdasar");
if(isset($_POST["kirim"])){
	$nis=$_POST["nis"];
	$nama=$_POST["nama"];
	$email=$_POST["email"];
	$jurusan=$_POST["jurusan"];
	$gambar=$_POST["gambar"];

	$query="INSERT INTO santri VALUES (NULL,'$nama','$nis','$email','$jurusan','$gambar')";
	mysqli_query($database,$query);
};
// cek apakah data berhasil ditambahkan atau tidak 
$check = mysqli_affected_rows($database);
$check_role = "";
if($check > 0){
	$check_role = "Data Berhasil Ditambahkan";
}
elseif($check == -1){
	$check_role = "Data Gagal Ditambahkan";
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h1>Tambah Data Santri</h1>
	<form action="" method="post">
		<label for="nis">No Induk Santri</label>
		<br>
		<input type="text" name="nis" id="nis">
		<br>
		<label for="nama">Nama Santri</label>
		<br>
		<input type="text" name="nama" id="nama">
		<br>
		<label for="email">Email Santri</label>
		<br>
		<input type="text" name="email"id="email">
		<br>
		<label for="jurusan">Jurusan Santri</label>
		<br>
		<input type="text" name="jurusan" id="jurusan">
		<br>
		<label for="gambar">Upload Gambar</label>
		<br>
		<input type="text" name="gambar"id="gambar">
		<br>
		<p><?php echo $check_role ?></p>
		<button type="submit" name="kirim">Kirim Data</button>
	</form>
	<form action="./index.php" method="get">
		<button type="submit" nama="kembali">Kembali</button>
	</form>
</body>
</html>