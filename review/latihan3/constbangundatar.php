<?php
    
//nilai dari Konstanta tidak bisa diubah

//define ('nama_variabel', 'isi_variabel');
//bisa untuk perhitungan dan IF
//define ('b', 5);
//const jadi = b * b;
//
//echo jadi . "<br>";
//echo "<br>";

//const nama_variable = "isi_variabel";
//tidak bisa untuk IF

//Luas persegi
    const s = 5;
    const jumlah = s * s;

//Gunakan echo untuk menampilkan data
    echo "Menghitung Luas Persegi <br>";
    echo "Rumus: Luas = Sisi x Sisi <br>";
    echo "Nilai sisinya: " . s . "<br>";
    echo "Luas Perseginya adalah: " . jumlah . "<br>";

//Luas segitiga
    const a = 5;
    const t = 8;
    const jumlah2 = 1/2 * a * t;

    echo "<br>";
    echo "Menghitung Luas Segitiga <br>";
    echo "Rumus: Luas = 1/2 Alas x Tinggi <br>";
    echo "Nilai alasnya: " . a . "<br>";
    echo "Nilai tingginya: " . t . "<br>";
    echo "Luas Segitiganya adalah: " . jumlah2 . "<br>";

//Volume prisma
    const la = 4;
    const ti = 7;
    const jumlah3 = la * ti;

    echo "<br>";
    echo "Menghitung Volume Prisma <br>";
    echo "Rumus: Volume = Luas Alas x Tinggi <br>";
    echo "Nilai Luas alasnya: " . la . "<br>";
    echo "Nilai tingginya: " . ti . "<br>";
    echo "Volume Prismanya adalah: " . jumlah3;

?>