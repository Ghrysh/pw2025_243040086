<?php
// array
// membuat array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr = [100, "teks", true];
// menampilkan array
// versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan); //lebih ringkas
//menampilkan 1 element pada array
echo $arr[0]; //index array dimulai dari 0
//echo tidak bisa mencetak array, tapi mencetak isi arraynya
