<?php 
require ('functions.php');

//kondisikan session jika user belum login
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}  


$id = $_GET["id"];
$hapus = hapus($id);
if($hapus > 0){
	echo "
		<script>
			alert('Data berhasil dihapus')
			document.location.href = 'index.php'
		</script>
	";
}
elseif($check < 0){
	echo "
		<script>
			alert('Data gagal dihapus')
			document.location.href = 'index.php'
		</script>
	";
}
 ?>