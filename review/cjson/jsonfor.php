<?php
$mahasiswa = '[
    {"nama" : "Riska Amelia"},
    {"nama" : "Renza Ilham Risqi"},
    {"nama" : "Taufan Aji"},
    {"nama" : "Rahmad Dwi Oktanto"}
]';

$listmahasiswa = json_decode($mahasiswa);

foreach ($listmahasiswa as $key => $mahasiswa) {
    echo "{$key} . Nama: {$mahasiswa -> nama} <br>";
}
?>