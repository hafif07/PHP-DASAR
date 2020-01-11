<?php 
if(isset($_POST["logout"])){
	header("Location: login.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>
</head>
<body>
	<h1>Dashboard Admin</h1>
	<p>Selamat Datang Admin</p>
<form action="" method="post">
	<button type="submit" name="logout">Logout</button>
</form>
	
</body>
</html>