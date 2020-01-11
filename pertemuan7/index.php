<?php 
echo "pertemuan 7";
echo "<br>";
// lingkup variabel 
// local scope

$nama="hafif luar";
function localScope(){
	global $nama;
	echo $nama;
}
echo $nama;
echo "<br>";
localScope();


echo "<br>";

// SUPERGLOBAL
//variabel global milik php
// merupakan array assosiative

var_dump($_GET);


 ?>