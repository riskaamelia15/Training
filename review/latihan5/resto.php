<?php
echo "Selamat Datang di RESTORAN ABCD";
echo "<br>";
echo "Belanja lebih dari Rp.150.000 dapat diskon 20%!";
echo "<br>";
echo "<br>";

//pesanan
$food = "minuman";
$makan = "jusAlpukat";
$jma = 10;

if ($food == "makanan") {

    if ($makan == "nasiGoreng") {
        $harga = 20000;
        $jumlah = $jma * $harga;
        $bayar = $jumlah - ($jumlah * (20/100));
        echo "Makanan: Nasi Goreng <br>";
        echo "Harga: Rp.$harga <br>";
        echo "Pesan: $jma <br>";
        echo "Total harga: Rp.$jumlah <br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "Pemesanan lebih dari Rp.150.000!! <br>";
            echo "Mendapat diskon 20%! <br>";
            echo "Total: Rp.$bayar";
        }
        
    } elseif ($makan == "ayamGoreng") {
        $harga = 13000;
        $jumlah = $jma * $harga;
        $bayar = $jumlah - ($jumlah * (20/100));
        echo "Makanan: Ayam Goreng <br>";
        echo "Harga: Rp.$harga <br>";
        echo "Pesan: $jma <br>";
        echo "Total harga: Rp.$jumlah <br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "Pemesanan lebih dari Rp.150.000!! <br>";
            echo "Mendapat diskon 20%! <br>";
            echo "Total: Rp.$bayar";
        }
        
    } elseif ($makan == "ayamBakar") {
        $harga = 15000;
        $jumlah = $jma * $harga;
        $bayar = $jumlah - ($jumlah * (20/100));
        echo "Makanan: Ayam Bakar <br>";
        echo "Harga: Rp.$harga <br>";
        echo "Pesan: $jma <br>";
        echo "Total harga: Rp.$jumlah <br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "Pemesanan lebih dari Rp.150.000!! <br>";
            echo "Mendapat diskon 20%! <br>";
            echo "Total: Rp.$bayar";
        }

    } elseif ($makan == "nasiPutih") {
        $harga = 9000;
        $jumlah = $jma * $harga;
        $bayar = $jumlah - ($jumlah * (20/100));
        echo "Makanan: Nasi Putih <br>";
        echo "Harga: Rp.$harga <br>";
        echo "Pesan: $jma <br>";
        echo "Total harga: Rp.$jumlah <br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "Pemesanan lebih dari Rp.150.000!! <br>";
            echo "Mendapat diskon 20%! <br>";
            echo "Total: Rp.$bayar";
        }

    } else {
        echo "Makanan tidak tersedia <br>";
    }

} elseif ($food == "minuman") {
    if ($makan == "jusJeruk") {
    $harga = 8000;
    $jumlah = $jma * $harga;
    $bayar = $jumlah - ($jumlah * (20/100));
    echo "Minuman: Jus Jeruk <br>";
    echo "Harga: Rp.$harga <br>";
    echo "Pesan: $jma <br>";
        echo "Total harga: Rp.$jumlah <br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "Pemesanan lebih dari Rp.150.000!! <br>";
            echo "Mendapat diskon 20%! <br>";
            echo "Total: Rp.$bayar";
        }
        
    } elseif ($makan == "jusAlpukat") {
        $harga = 10000;
        $jumlah = $jma * $harga;
        $bayar = $jumlah - ($jumlah * (20/100));
        echo "Minuman: Jus Alpukat <br>";
        echo "Harga: Rp.$harga <br>";
        echo "Pesan: $jma <br>";
        echo "Total harga: Rp.$jumlah <br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "Pemesanan lebih dari Rp.150.000!! <br>";
            echo "Mendapat diskon 20%! <br>";
            echo "Total: Rp.$bayar";
        }

    } elseif ($makan == "airMineral") {
        $am = 15000;
        $jumlah = $jma * $harga;
        $bayar = $jumlah - ($jumlah * (20/100));
        echo "Minuman: Air Mineral <br>";
        echo "Harga: Rp.$harga <br>";
        echo "Pesan: $jma <br>";
        echo "Total harga: Rp.$jumlah <br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "Pemesanan lebih dari Rp.150.000!! <br>";
            echo "Mendapat diskon 20%! <br>";
            echo "Total: Rp.$bayar";
        }

    } else {
        echo "Minuman tidak tersedia";
    }
    
} else {
    echo "Menu tidak ada";
}
?>