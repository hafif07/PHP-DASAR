
<?php 
// jika tidak ada global variabel yang dibuat
if (!isset($_GET["nama"]) || !isset($_GET["asal"]) ||!isset($_GET["no_tlp"]) ||!isset($_GET["jurusan"]) || !isset($_GET["gambar"])){
header("Location: beranda.php");
exit;
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Profile Santri</h1>
    <img src="./assets/<?php echo $_GET["gambar"] ?>">
    <ul>
        <li><?php echo $_GET["nama"] ?></li>
        <li><?php echo $_GET["asal"] ?></li>
        <li><?php echo $_GET["no_tlp"] ?></li>
        <li><?php echo $_GET["jurusan"] ?></li>
    </ul>
</body>
</html>