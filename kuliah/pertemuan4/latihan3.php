<?php

$i = 1;

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "$j ";
    }

    echo "<br>";
}
// looping i dan looping j, looping i untuk melooping baris, looping j untuk melooping angka, tiap barisnya mau berapa angka
// mested loop, di dalam for ada for lagi

echo "<hr>";

$i = 1;

for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 6; $j++) {
        echo "$j ";
    }

    echo "<br>";
}

echo "<hr>";

$i = 1;

for ($i = 1; $i <= 7; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo "$j ";
    }

    echo "<br>";
}

echo "<hr>";

$i = 1;

for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$i ";
    }

    echo "<br>";
}
