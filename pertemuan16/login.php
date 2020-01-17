<?php 
require "functions.php";


if(isset($_POST["login"])){
	$login=login($_POST);
	// error check

	if($login=== "error"){
		$error = true;
	}
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