<?php 
$daftar_santri=[
    [
        "nama" => "Muhammad Hafif Al Busyro",
        "asal" => "Jakarta",
        "no_tlp" => "087787331091",
        "jurusan" => "programmer",
        "gambar" => "img1.jpeg"
    ],
    [
        "nama" => "Rifqi Hidayat",
        "asal" => "Kupang",
        "no_tlp" => "08227331091",
        "jurusan" => "programmer",
        "gambar" => "img2.jpeg"
    ],
    [
        "nama" => "Luthfi Aji",
        "asal" => "Madiun",
        "no_tlp" => "089887331091",
        "jurusan" => "programmer",
        "gambar" => "img2.jpeg"
    ],

];

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
    <ul>
    <h1>Daftar Santri Pondok Programmer</h1>
        <?php foreach($daftar_santri as $santri): ?>
            <a href="./profile.php?nama=<?php echo $santri["nama"];?>&asal=<?php echo $santri["asal"];?>&no_tlp=<?php echo $santri["no_tlp"];?>&jurusan=<?php echo $santri["jurusan"];?>&gambar=<?php echo $santri["gambar"];?>"><li><?php echo $santri["nama"] ?></li></a>
        <?php endforeach; ?>
    </ul>
</body>
</html>