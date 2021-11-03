<?php
//ARRAY Numeric
//Array Numeric adalah jenis array yang menggunakan index angka, index dimulai dari angka 0.
$jurusan = array("Teknik Informatika", "Sistem Informasi", "Teknik Komputer", "Manajemen Informatika");
$jumlah = count($jurusan);

echo "1. Contoh Program Array Numeric <br>";
for($i = 0; $i < $jumlah ; $i++) {
    echo "Jurusan " . $jurusan[$i] . " - ada di index $i";
    echo "<br>";
}

echo "<br>";

//ARRAY Assosiatif
$jurusan = [
    "jurusan1" => "Teknik Informatika",
    "jurusan2" => "Sistem Informasi",
    "jurusan3" => "Teknik Komputer",
    "jurusan4" => "Managemen Informatika",
];

echo "2. Contoh Program Array Assosiatif <br>";
foreach ($jurusan as $kunci => $nilai) {
    echo "Kata Kunci Indeks = " . $kunci . ", Nilai = " . $nilai;
    echo "<br>";
}
?>
