<?php
echo "Waktu saat ini";
echo date("l, j M Y");

echo "<hr>";

echo "Detik saat ini";
echo time();
echo "<br>";
echo "Detik 1 hari dari sekarang";
echo time() + 60 * 60 * 24;
echo "<hr>";

echo "Hari ini:";
echo date("l");
echo "<br>";
echo "100 hari dari sekarang hari: ";
echo date("l", time() + 60 * 60 * 24 * 100);
echo "<hr>";

echo date("l, j M Y G.i s", mktime(9, 23, 0, 3, 11, 2025));
// mktime(hour, minute, second, month, day, year)

// membuat fungsi untuk waktu dengan menggunakan code
// untuk membuat aplikasi misal ecommerce untuk program waktu diskon
