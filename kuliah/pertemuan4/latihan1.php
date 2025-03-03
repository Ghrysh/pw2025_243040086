<?php
// contoh pengulangan / looping

// Contoh While
// while (true) {
//     echo "Hello Dunia! <br>";
// }
// infinite loop/ looping forever (berulang selamanya)

// while (false) {
//     echo "Hello Dunia! <br>";
// }
// tidak akan muncul echo nya

// $i = 1;
// while ($i <= 3) {
//     echo "Hello Dunia! <br>";
// }
// selama i nya 1,2,3 jalankan hello dunia!
// selama belum ada false mereka akan terus berulang, akan infinite looping

// $i = 5;
// while ($i >= 1) {
//     echo "Hello Dunia! $i x<br>";
//     $i = $i - 1; // $i tambah 1 atau $i++ atau $i +=2
// }
// maka $i akan tercetak 3 buah
// memberi variabel di samping hello dunia maka variabel akan berurutan kebawah

// $i = 5;
// while ($i >= 1) {
//     echo "Hello Dunia! $i x<br>";
//     $i = $i - 1; // $i kurang 1 atau $i-- atau $i -=2
// } //pengulangan mundur

$x = "10";
echo $x;
echo "<br>";
echo $x++;
echo "<br>";
echo $x;
echo "<br>";
echo ++$x;

echo "<hr>";

// contoh for
$i = 1;
for ($i = 1; $i <= 10; $i++) {
    echo "Hello Dunia! <br>";
}

echo "<hr>";

$x = 1;
do {
    echo "Hello World $x kali <br>";
    $x++;
} while ($x <= 5);
