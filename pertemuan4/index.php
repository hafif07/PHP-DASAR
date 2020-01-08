<?php 

// menggunakan built in function

// date(), time()

// berdasarkan kesepakatan detik dimulai pada tanggal 1 januari 1970
echo "pertemuan ke 4";
echo date("l , d-m-y");
echo "<br>";
echo "hari ini adalah hari ";
echo date("l");
echo " dua hari lagi adalah hari ";
echo date("l",time()+60*60*24*2);	




echo "<br>";
echo "hari ulang tahunku adalah hari = ";
// mktime()
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam , menit , detik , bulan, tanggal , tahun

echo date("l",mktime(0,0,0,12,03,1999))

 ?>