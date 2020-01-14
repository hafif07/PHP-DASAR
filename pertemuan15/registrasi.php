<?php 
require "functions.php";
if(isset($_POST["registrasi"])){
	if(registrasi($_POST) > 0){
		echo "
			<script>
				alert('user baru berhasil ditambahkan')
			</script>
		";
	}else{
		echo mysqli_error($database);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
</head>
<body>
	<h1>Halaman Registrasi</h1>
	<form action="" method="post">
		<label for="username">Username</label>
		<br>
		<input type="text" name="username" id="username" required>
		<br>
		<label for="email">Email</label>
		<br>
		<input type="text" name="email" id="email" required>
		<br>
		<label for="password">Password</label>
		<br>
		<input type="password" name="password" id="password" required>
		<br>
		<label for="konfirmasiPassword">Konfirmasi password</label>
		<br>
		<input type="password" name="konfirmasiPassword" id="konfirmasiPassword" required>
		<br>
		<button type="submit" name="registrasi"> Registrasi</button>
	</form>

</body>
</html>