<?php 
require "functions.php";


if(isset($_POST["login"])){
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($database, "SELECT * FROM users WHERE username = '$username'");

	// cek username
	//mysqli_num_rows -> mengembalikan baris dari fungsi result jika bernilai 1 berarti username sudah pernah mendaftar
	if(mysqli_num_rows($result)=== 1){

		// cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])){
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<h1>Halaman Login</h1>
	<?php if (isset($error)):?>
		<p style="color:red">username/password salah</p>
	<?php endif ?>
	<form action="" method="post">
		<label for="username">Username</label>
		<br>
		<input type="text" name="username" id="username" required>
		<br>
		<label for="password">Password</label>
		<br>
		<input type="password" name="password" id="password" required>
		<br>
		<button type="submit" name="login"> Login</button>
		
	</form>
</body>
</html>