<?php
function urutanAngka($angka)
{
    $num = 1; // Mulai dari angka 1
    for ($i = 1; $i <= $angka; $i++) { // Loop untuk baris (1 sampai 5)
        for ($j = 1; $j <= $i; $j++) { // Loop untuk jumlah angka dalam setiap baris
            echo $num . " ";
            $num++; // Tambahkan angka
        }
        echo "<br>"; // Ganti baris
    }
}

echo urutanAngka(5);
