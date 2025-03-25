<?php
// // menghitung volume 2 kubus
// // diketahui kubus a dan b
// $sisi_a = 9;
// $sisi_b = 4;
// // hitung volume kubus a
// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// // hitung volume kubus b
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// // jumlahkan volume kubus a dan b
// $total_volume = $volume_a + $volume_b;
// // cetak hasilnya ke layar
// echo $total_volume;

function hitungVolumeKubus($a, $b)
{
    return $a * $a * $a + $b * $b * $b;
}

echo "Total volume kubus 9 dan 4: ";
echo hitungVolumeKubus(9, 4);
echo "<br>";
echo "Total volume kubus 10 dan 15: ";
echo hitungVolumeKubus(10, 15);
