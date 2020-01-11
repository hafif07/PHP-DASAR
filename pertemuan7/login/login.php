<?php 
$error = false;
if (isset($_POST["login"])) {
	if ($_POST["username"]=="admin"&&$_POST["password"]=="password") {
		header("Location: dashboard.php");
		exit;
	}
	else{
		$error = true;
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
</head>
<body>
	<h1>Login Admin</h1>
	<?php if($error == true): ?>
	<p style="color: red;">username atau password salah</p>
<?php endif; ?>
	<form action="" method="post">
		<label for="username">username</label>
		<br>
		<input type="text" name="username" id="username">
		<br>
		<label for="password">password</label>
		<br>
		<input type="password" name="password" id="password">
		<br>
		<button type="submit" name="login">Login</button>
	</form>

</body>
</html>
