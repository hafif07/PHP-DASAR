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

?>
