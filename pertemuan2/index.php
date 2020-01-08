<?php 
echo "pertemuan kedua <br>";
// ini komentar satu baris
/*ini komentar
dua baris*/

// standar output

// 1. dicetak dengan echo
echo "ini dicetak dengan echo <br>";

// 2. dicetak dengan print
print " ini dicetak dengan print <br>";

// 3. dicetak dengan print_r (only debuging) : print_r mencetak isi array 
print_r("hafif al <br>");

// 4. dicetak dengan var_dump ( only debugging) : var_dump menampilakan isi dan keterangan variabel

var_dump ("hafif al <br>");


// penulisan syntax php

//1. PHP di dalam HTML
//2.HTML di dalam PHp
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar PHP dasar</title>
</head>
<body>
    <h1>selamat datang <?php echo "muhammad hafif" ?></h1>
</body>
</html>

<?php 
echo "<h1>watashi hafif<h1>"
?>


<?php 
// variabel dan tipe data 


// pendeklarasian variabel 
$nama = "Hafif";
$usia = 20;
$married_status = false

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar php</title>
</head>
<body>
    <h1> Biodata santri</h1>
    <!-- interpolase = memasukan variabel di dalma string -->
    <p><?php echo "nama saya $nama " ?></p>
    <p><?php echo "saya berusia $usia tahun" ?></p>
    <p><?php if($married_status != true) echo "status saya jofisah" ?></p>
</body>
</html>



<?php 
// operator 
// aritmatika + - * / %
$x = 12;
$y = 10;
echo "jumlah dari variabel x+y adalah = ";
echo $x + $y;
echo "<br>";

//operator string / penggabungan string  / contatenation
$nama_depan = "Muhammad";
$nama_belakang = "Hafif";

echo $nama_depan." ".$nama_belakang;
echo "<br>";

// operator penugasan /assignment
// = += -= *= /= &=
$a = 1;
$a += 2;
echo "isi variabel a adalah ="." ".$a;
echo "<br>";

$nama_santri = "Muhammad";
$nama_santri .= " ";
$nama_santri .= "Hafif";


echo $nama_santri;
echo "<br>";


// operator perbandingan == >= <= !=
$c =10;
var_dump($c > 9);
echo "<br>";

// operator identitas == membandingkan nilai dan tipedata
$d = 123;
var_dump($d === "123");
echo "<br>";

//operator logika || && !

$usia_saya = 20;
echo "cek usia " ;
var_dump($usia_saya > 21 && $usia_saya % 2 === 0)

?>

