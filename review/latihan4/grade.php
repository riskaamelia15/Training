<?php
//MENENTUKAN GRADE NILAI


echo "Grade Penilaian";
echo "<br>";
$nilai = 101;

if ($nilai >= 90 && $nilai <= 100) {
    echo "A";
} elseif ($nilai <= 90) {
    echo "B";
} elseif ($nilai <= 80) {
    echo "C";
} elseif ($nilai <= 75) {
    echo "D";
} elseif ($nilai <= 60 && $nilai >= 0) {
    echo "E";
} else {
    echo "Tidak ada nilai!";
    
}


//MENENTUKAN BILANGAN GANJIL GENAP
echo "<br> <br>";
echo "Menentukan Bilangan Ganjil Genap";
echo "<br>";

$angka = 2;

if ($angka % 2 == 0) {
    echo "$angka adalah Genap";
} else {
    echo "$angka adalah Ganjil";
}


//MENENTUKAN DISKON
echo "<br> <br>";
echo "Menentukan Diskon PPDB";
echo "<br>";

$bulan = "Juni";
$biaya = 2000000;

if ($bulan == "Mei") {
    $bayar = $biaya - ($biaya * (30/100));
    echo "Biaya pendaftaran adalah Rp.$biaya <br>";
    echo "Anda aftar pada bulan $bulan <br>";
    echo "Mendapat diskon 30%! <br>";
    echo "Jadi biaya yang harus dibayar adalah Rp.$bayar";
} elseif ($bulan == "Juni") {
    $bayar = $biaya - ($biaya * (20/100));
    echo "Biaya pendaftaran adalah Rp.$biaya <br>";
    echo "Daftar pada bulan $bulan <br>";
    echo "Anda mendapat diskon 20%! <br>";
    echo "Jadi biaya yang harus dibayar adalah Rp.$bayar";
} elseif ($bulan == "Juli") {
    $bayar = $biaya - ($biaya * (10/100));
    echo "Biaya pendaftaran adalah Rp.$biaya <br>";
    echo "Daftar pada bulan $bulan <br>";
    echo "Anda mendapat diskon 10%! <br>";
    echo "Jadi biaya yang harus dibayar adalah Rp.$bayar";
} else {
    echo "Biaya pendaftaran adalah Rp.$biaya <br>";
    echo "Daftar pada bulan $bulan <br>";
    echo "Anda tidak dapat diskon! <br>";
    echo "Jadi biaya yang harus dibayar adalah Rp.$biaya";
}

?>