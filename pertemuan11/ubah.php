<?php 
require 'functions.php';

// ambil data
$id = $_GET["id"];
$santri = query("SELECT * FROM santri WHERE id = $id")[0];

$check= null;
$check_role = "";

if(isset($_POST["kirim"])){
	$check = ubah($_POST);
}

if($check > 0){
	echo "
		<script>
			alert('Data berhasil Diubah')
			document.location.href = 'index.php'
		</script>
	";
}
elseif($check < 0){
	$check_role = "Data Gagal Diubah";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data Santri</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $santri["id"] ?>" >
		<label for="nis">No Induk Santri</label>
		<br>
		<input type="text" name="nis" id="nis" required value="<?php echo $santri["nis"] ?>">
		<br>
		<label for="nama">Nama Santri</label>
		<br>
		<input type="text" name="nama" id="nama" required value="<?php echo $santri["nama"] ?>">
		<br>
		<label for="email">Email Santri</label>
		<br>
		<input type="text" name="email"id="email" required value="<?php echo $santri["email"] ?>">
		<br>
		<label for="jurusan">Jurusan Santri</label>
		<br>
		<input type="text" name="jurusan" id="jurusan" required value="<?php echo $santri["jurusan"] ?>">
		<br>
		<label for="gambar">Upload Gambar</label>
		<br>
		<input type="text" name="gambar"id="gambar" required value="<?php echo $santri["gambar"] ?>">
		<br>
		<p><?php echo $check_role; ?></p>
		<button type="submit" name="kirim">Ubah Data</button>
	</form>
	<form action="./index.php" method="get">
		<button type="submit" nama="kembali">Kembali</button>
	</form>
</body>
</html>
