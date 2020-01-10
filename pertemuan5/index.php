<?php 
// array 
// arrray adalah variabel yang dappat menampung banyak nilai

$hari = ["Senin","Selasa","Rabu","Kamis"];

var_dump($hari);
echo "<br>";
print_r($hari);
echo "<br>";
echo $hari[0];
echo "<br>";

//menambahkan element baru pada array
$hewan = ["Kucing"];
var_dump($hewan);
echo "<br>";
$hewan[]="Anjing";
$hewan[]="Kuda";
var_dump($hewan);
echo "<br>";


 ?>

 <?php 

 //pengulangan pada array
$santri = ["Agus","Rifqi","Miko","Yusup","Adi"];
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Pengulangan array</title>
  </head>
  <body>
  	<?php for ($i=0; $i < count($santri); $i++): ?>
  		<h3> <?php echo $santri[$i]; ?></h3>
  	<?php endfor ?>
  </body>
  </html>

    <!DOCTYPE html>
  <html>
  <head>
  	<title>Pengulangan array</title>
  </head>
  <body>
  	<?php foreach ($santri as $s): ?>
  		<h3> <?php echo $s; ?></h3>
  	<?php endforeach; ?>
  </body>
  </html>

<?php 
$daftar_santri =[
["Muhammad Hafif","Jakarta","Programmer",6287787331091],
["Rifqi Hidayar","Kupang","Programmer",628228223234]
];
 ?>
 <!DOCTYPE html>
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
 </html>