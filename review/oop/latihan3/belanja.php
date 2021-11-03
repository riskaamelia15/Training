<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
</head>
<body>
    <form action="" name="input" method="post">
        <table>
            <caption>
                Program Belanja <br>
                Selamat Datang, Selamat berbelanja! <br><br>
                Beras = Rp. 9000 /KG <br>
                Gula = Rp. 12000 /KG <br>
                Telur =  Rp.17000 /KG <br>
                Minyak = Rp. 20000 /KG <br>
                Tepung = Rp. 5000 /KG <br><br>
            </caption>

            <tr>
                <td>Pilih Produk</td>
                <td>
                    <input type="text" name="produk" id="">
                </td>
            </tr>

            <tr>
                <td>Jumlah Produk</td>
                <td>
                    <input type="text" name="jumlah" id=""> KG
                </td>
            </tr>
            <tr>
                <td> </td>
                <td>
                    <input type="submit" name="beli" value="Beli">
                </td>
            </tr>

        </table>

<?php
//if isset pertama
if (isset($_POST['beli'])) {
    $produk = @$_POST['produk'];
    $jumlah = @$_POST['jumlah'];

    echo "<br>";
    echo "Pembayaran <br>";
    echo "<br> Produk: " . $produk;
    echo "<br> Jumlah: " . $jumlah . " KG";

    class total
    {
        public $bayar, $diskon;

        public function total($produk, $jumlah)
        {
            if ($produk == "beras" || $produk == "Beras") {
                $harga1 = 9000;
                $belanja = $harga1 * $jumlah;
                $this->bayar = $belanja;

            } elseif ($produk == "gula" || $produk == "Gula") {
                $harga2 = 12000;
                $belanja = $harga2 * $jumlah;
                $this->bayar = $belanja;

            } elseif ($produk == "telur" || $produk == "Telur") {
                $harga3 = 17000;
                $belanja = $harga3 * $jumlah;
                $this->bayar = $belanja;

            } elseif ($produk == "minyak" || $produk == "Minyak") {
                $harga4 = 20000;
                $belanja = $harga4 * $jumlah;
                $this->bayar = $belanja;

            } elseif ($produk == "tepung" || $produk == "Tepung") {
                $harga5 = 5000;
                $belanja = $harga5 * $jumlah;
                $this->bayar = $belanja;

            }

            if ($this->bayar >= 100000) {
                $potong = $this->bayar - ($this->bayar * (30 / 100));
                $this->diskon = $potong;
                return "<br>Total: Rp. " . $this->bayar .
                "<br>Diskon 30%, jadi total yang harus dibayar adalah Rp. " . $this->diskon;
            } else {
                return "<br>Total: Rp. " . $this->bayar;
            }

        }
    }

    $cek = new total();
    echo $cek->total($produk, $jumlah);

    ?>

    <form action="" name="input" method="post">
        <table>
            <tr>
                <td>Masukan Uang </td>
                <td>
                    <input type="text" name="uang" id="">
                </td>
            </tr>

            <tr>
                <td> </td>
                <td>
                    <input type="submit" name="bayar" value="Bayar">
                </td>
            </tr>
        </table>


<?php
//if isset kedua
    if (isset($_POST['bayar'])) {
        $uang = @$_POST['uang'];

        class selesai extends total
        {
            public $kembalian, $money, $b, $d;

            function __construct($uang)
            {
                $this->money = $uang;
                $this->b = $this->bayar;
                $this->d = $this->diskon;
            }

            function kembali($uang)
            {
                if ($this->money >= $this->b) {
                    $sisa = $this->money - $this->b;
                    $this->kembalian = $sisa;

                    return "<br>Uang anda Rp." . $this->money .
                    "<br> Kembalian: " . $this->kembalian;
                } elseif ($this->money >= $this->b) {
                    $sisa = $this->money - $this->d;
                    $this->kembalian = $sisa;

                    return "<br>Uang anda Rp." . $this->money .
                    "<br> Kembalian: " . $this->kembalian;

                }

            }
        }

        $hasil = new selesai();
        echo $hasil->kembali($uang);

    }

//PENUTUP IF ISSET pertama
}
;
?>
        </form>
    </form>
</body>
</html>