<?php
// $mahasiswa = [
//     ["Sandhika Galih", "043040023", "sandikhagalih@unpas.ac.od", "Teknik Informatika"],
//     ["Doddy Ferdiansyah", "043040001", "doddy@unpas.ac.id", "Teknik Industri"]
// ];

// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" => "043040023",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sandhika.jpg"
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "043040001",
        "email" => "doddy@unpas.ac.id",
        "jurusan" => "Teknik Industri",
        "gambar" => "doddy.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
            <li>Nama: <?php echo $mhs["nama"]; ?></li>
            <li>NRP: <?php echo $mhs["nrp"]; ?></li>
            <li>Email: <?php echo $mhs["email"]; ?></li>
            <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>