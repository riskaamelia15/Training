<?php
    
//nilai dari Konstanta tidak bisa diubah

//define ('nama_variabel', 'isi_variabel');
//bisa untuk perhitungan dan IF
//define ('phii', '3.14');

//const nama_variable = "isi_variabel";
//tidak bisa untuk IF
    const phi = 3.14;
    const r = 12;
    const jumlah = phi * r * r;

//Gunakan echo untuk menampilkan data
    echo "Menghitung Luas Lingkaran <br>";
    echo "Rumus: " . phi . " x  r^2 <br>";
    echo "Jari-jari(r): " . r . "<br>";
    echo "Hasil: " . jumlah;
?>