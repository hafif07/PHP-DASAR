<?php 
require 'functions.php';
$check= null;
$check_role = "";

if(isset($_POST["kirim"])){
	$check = tambah($_POST);
}

if($check > 0){
	echo "
		<script>
			alert('Data berhasil Ditambahkan')
			document.location.href = 'index.php'
		</script>
	";
}
elseif($check < 0){
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
		<input type="text" name="nis" id="nis" required>
		<br>
		<label for="nama">Nama Santri</label>
		<br>
		<input type="text" name="nama" id="nama" required>
		<br>
		<label for="email">Email Santri</label>
		<br>
		<input type="text" name="email"id="email" required>
		<br>
		<label for="jurusan">Jurusan Santri</label required>
		<br>
		<input type="text" name="jurusan" id="jurusan" required>
		<br>
		<label for="gambar">Upload Gambar</label>
		<br>
		<input type="text" name="gambar"id="gambar" required>
		<br>
		<p><?php echo $check_role; ?></p>
		<button type="submit" name="kirim">Kirim Data</button>
	</form>
	<form action="./index.php" method="get">
		<button type="submit" nama="kembali">Kembali</button>
	</form>
</body>
</html>
