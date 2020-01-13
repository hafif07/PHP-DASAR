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
	//tambahkan fungsi upload gambar
	$gambar = upload();
	if($gambar === false){
		return false;
	}

	$query="INSERT INTO santri VALUES (NULL,'$nama','$nis','$email','$jurusan','$gambar')";
	mysqli_query($database,$query);
	//cek berhasil atau tidak
	$check = mysqli_affected_rows($database);
	return $check;
}
function upload(){
	$namaFile = $_FILES["gambar"]["name"];
	$ukuranFile = $_FILES["gambar"]["size"];
	$error = $_FILES["gambar"]["error"];
	$tmpName = $_FILES["gambar"]["tmp_name"];

	// cek apakah ada gambar yang diupload
	if($error=== 4 ){
		echo "
			<script>
				alert('pilih gambar terlebih dahulu')
			</script>
		";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);// explode untuk memecah string menjadi array
	$ekstensiGambar = strtolower(end($ekstensiGambar));// strtolower menjadikan huruf kecil semua //end mengambil element terakhir array


	// in_array mencari string di dalam array
	// jadi string akan dicocokan oleh data setiap element pada array
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "
			<script>
				alert('yang boleh diupload hanya jpg, jpeg , png')
			</script>
		";
		return false;

	}


	// cek jika ukuran gambarnya terlalu besar
	if($ukuranFile>2000000){
		echo "
			<script>
				alert('ukuran gambar terlalu besar')
			</script>
		";
		return false;
	}
	// generate nama baru 

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	// lolos pengecekan gambar siap upload
	// memindahkan gambar dari tempat penyimpanan sementara ke tempat yang diinginkan
	move_uploaded_file($tmpName, 'assets/'.$namaFileBaru );
	return $namaFileBaru;
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
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	
	// cek apakah user pilih gambar baru atau tidak 
	if($_FILES["gambar"]["error"]===4){
		$gambar=$gambarLama;
	}else{
		$gambar=upload();
	}


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

	if($check===0){
		return "not_change";
	}else{
		return $check;
	}
	
}
function cari($keyword){
	global $database;
	$query = "SELECT * FROM santri WHERE 
	nama LIKE '%$keyword%' OR 
	nis LIKE '%$keyword%' OR 
	email LIKE '%$keyword%' OR 
	jurusan LIKE '%$keyword%' ";
	
	// ambil data dari tabel santri
	$result=mysqli_query($database,$query);
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
