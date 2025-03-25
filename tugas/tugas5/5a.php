<?php
$mahasiswa = [
    [
        "nama" => "Ghryshvi Tauhsiyah Dzickra",
        "nrp" => "243040086",
        "email" => "ghryshvi@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ghryshvi.jpg"
    ],
    [
        "nama" => "Muhamad Nur Salam",
        "nrp" => "243040083",
        "email" => "nur.salam@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "salam.jpg"
    ],
    [
        "nama" => "Billy Wicaksono",
        "nrp" => "243040090",
        "email" => "billy@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "billy.jpg"
    ],
    [
        "nama" => "Afsal Prima Maula",
        "nrp" => "243040091",
        "email" => "afsal@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "afsal.jpg"
    ],
    [
        "nama" => "Muhammad Farrel",
        "nrp" => "243040087",
        "email" => "farrel@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "farrel.jpg"
    ],
    [
        "nama" => "Muhammad Fatur Rahman",
        "nrp" => "243040096",
        "email" => "fatur@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "fatur.jpg"
    ],
    [
        "nama" => "Akbar Putra Pamungkas",
        "nrp" => "243040093",
        "email" => "akbar@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "akbar.jpg"
    ],
    [
        "nama" => "Moch Raffi Khoirunijam",
        "nrp" => "243040071",
        "email" => "raffi@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "raffi.jpg"
    ],
    [
        "nama" => "Yaiza Ananda",
        "nrp" => "243040077",
        "email" => "yaiza@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "yaiza.jpg"
    ],
    [
        "nama" => "Raflitya Rahman",
        "nrp" => "243040095",
        "email" => "rafly@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rafly.jpg"
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