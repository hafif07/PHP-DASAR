<?php 

require "functions.php";
$santri = query("SELECT * FROM santri ");

// ketika tombol cari ditekan
if(isset($_POST["cari"])){
	$santri = cari($_POST["keyword"]);
}

if(isset($_POST["refresh"])){
	$santri = query("SELECT * FROM santri ");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Santri</h1>
	<form action="tambahdata.php" method="get">
		<button type="submit" name="tambah">Tambah Data</button>
	</form>
	<br>
	<form action="" method="post">
		<input type="text" name="keyword" size="40" autofocus placeholder="Masukan keyword pencarian" autocomplete="off">
		<button type="submit" name="cari">Cari</button>
		<button type="submit" name="refresh">Refresh Data</button>
	</form>
	<!-- <form action="" method="get">
		<button type="submit" name="refresh">Refresh</button>
	</form> -->
	<br>
	<table border="1"cellspacing='0'cellpadding="10">
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $nourut=1; ?>
		<?php foreach ($santri as $individu):?>
		<tr>
			<td><?php echo $nourut; ?></td>
			<td>
				<a href="ubah.php?id=<?php echo $individu["id"]?>">Edit</a> |
				<a href="hapus.php?id=<?php echo $individu["id"]?>"onClick="return confirm('yaquueeen ?')">Delete</a>
			</td>
			<td>
				<img src="./assets/<?php echo $individu["gambar"] ?>" width="50">
			</td>
			<td><?php echo $individu["nis"]; ?></td>
			<td><?php echo $individu["nama"]; ?></td>
			<td><?php echo $individu["email"]; ?></td>
			<td><?php echo $individu["jurusan"]; ?></td>
		</tr>
		<?php $nourut++ ?>
	<?php endforeach ?>
	</table>

</body>
</html>