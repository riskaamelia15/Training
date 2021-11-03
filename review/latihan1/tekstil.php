<?php
    $gaji = "2.000.000";
    $pajak = "10%";
    $nama = "Ahmad";
    //Gunakan simblol $(dolar) untuk membuat variable
    
    $awal = 2000000;
    $potong = $awal * (10/100);
    $bayar = $awal - $potong;

    //cara kedua
    $pulang = $awal - ($awal * (10/100));
    
    echo "PERUSAHAAN TEKSTIL <br>";
    echo "<br>";
    echo "Karyawan: $nama <br>";
    echo "Gaji: Rp. $gaji <br>";
    echo "Pajak: $pajak <br>";
    echo "Nominal yang di potong: Rp. $potong <br>";
    echo "Nominal yang di dapat: Rp. $bayar <br>";
    echo "<br>";

    //hasil dari cara kedua
    echo "Hasil dari cara kedua<br>";
    echo "Gaji yang dibawa pulang: Rp. $pulang";
?>