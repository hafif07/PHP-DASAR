<?php 

// Array Numerik 
// array yang key nya itu index pada array
$mahasiswa = ["Muhammad","Jakarta","087787331091","Programmer"];
echo $mahasiswa[0];
echo "<br>";

// Array Asosiatif
// array yang key nya itu dibuat oleh user (key dibuat dengan string)
$mahasiswa2 = [
	"nama"=> "Muhammad",
	"asal"=> "Jakarta",
	"no_tlp"=> "087787331091",
	"jurusan" => "programmer"
];
echo $mahasiswa2["nama"];

?>

<?php 
$daftar_santri =[
[
	"nama"=>"Muhammad Hafif",
	"asal"=>"Jakarta",
	"jurusan"=>"Programmer",
	"no_tlp"=>6287787331091,
	"gambar" => "img1.jpeg"
],
[

	"nama"=>"Rifqi Hidayat",
	"asal"=>"Kupang",
	"jurusan"=>"Programmer",
	"no_tlp"=>6287788331091,
	"gambar" => "img2.jpeg"
],
];
 ?>
 <!-- <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar santri</title>
 </head>
 <body>
 	<h1>Daftar Santri</h1>
 	<?php foreach ($daftar_santri as $santri):?>
 		<ul>
 			<?php foreach ($santri as $identity):?>
 				<li><?php echo $identity ?></li>
 			<?php endforeach ?>
 		</ul>
 	<?php endforeach ?>
 </body>
 </html> -->
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar santri</title>
 </head>
 <body>
 	<h1>Daftar Santri</h1>
 	<?php foreach ($daftar_santri as $santri):?>
 		<img src="./assets/<?php echo $santri["gambar"] ?>">
 		<ul>
 			<li><?php echo $santri["nama"] ?></li>
 			<li><?php echo $santri["asal"] ?></li>
 			<li><?php echo $santri["jurusan"] ?></li>
 			<li><?php echo $santri["no_tlp"] ?></li>
 		</ul>
 	<?php endforeach ?>
 </body>
 </html>