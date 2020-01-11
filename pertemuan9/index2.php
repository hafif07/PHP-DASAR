<?php 
// Koneksi ke database
$database=mysqli_connect("localhost","root","root","phpdasar");
// ambil data dari tabel santri
$result=mysqli_query($database,"SELECT * FROM santri");
if ($result==false){
	echo mysqli_error($database);
}
// ambil data santr(fetch) dari object results lalu looping
// bisa dengan 4 cara
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array assosiatif
//mysqli_fetch_array() // array mengembalikan keduanya
//mysqli_fetch_object() // mengembalkan object

// while($santri = mysqli_fetch_assoc($result)){
// 	var_dump($santri);
// }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Santri</h1>
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
		<?php while ( $santri = mysqli_fetch_assoc($result)):?>
		<tr>
			<td><?php echo $nourut; ?></td>
			<td>
				<a href="">Edit</a> |
				<a href="">Delete</a>
			</td>
			<td>
				<img src="./assets/<?php echo $santri["gambar"] ?>" width="50">
			</td>
			<td><?php echo $santri["nis"]; ?></td>
			<td><?php echo $santri["nama"]; ?></td>
			<td><?php echo $santri["email"]; ?></td>
			<td><?php echo $santri["jurusan"]; ?></td>
		</tr>
		<?php $nourut++ ?>
	<?php endwhile ?>
	</table>

</body>
</html>