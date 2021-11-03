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
                    <input type="text" name="produk" id="" required>
                </td>
            </tr>

            <tr>
                <td>Jumlah Produk</td>
                <td>
                    <input type="text" name="jumlah" id="" required> KG
                </td>
            </tr>

            <tr>
                <td>Masukan Uang </td>
                <td>
                    <input type="text" name="uang" id="" required>
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
    $uang = @$_POST['uang'];

    echo "<br>";
    echo "Pembayaran <br>";
    echo "<br> Produk: " . $produk;
    echo "<br> Jumlah: " . $jumlah . " KG";

    class total
    {
        public $bayar, $diskon, $kembalian, $kembalian2, $money, $jbarang, $barang;

        public function __construct($uang, $jumlah, $produk)
        {
            $this->money = $uang;
            $this->barang = $produk;
            $this->jbarang = $jumlah;
        }

        public function total()
        {
            if ($this->barang == "beras" || $this->barang == "Beras") {
                $harga1 = 9000;
                $belanja = $harga1 * $this->jbarang;
                $this->bayar = $belanja;

            } elseif ($this->barang == "gula" || $this->barang == "Gula") {
                $harga2 = 12000;
                $belanja = $harga2 * $this->jbarang;
                $this->bayar = $belanja;

            } elseif ($this->barang == "telur" || $this->barang == "Telur") {
                $harga3 = 17000;
                $belanja = $harga3 * $this->jbarang;
                $this->bayar = $belanja;

            } elseif ($this->barang == "minyak" || $this->barang == "Minyak") {
                $harga4 = 20000;
                $belanja = $harga4 * $this->jbarang;
                $this->bayar = $belanja;

            } elseif ($this->barang == "tepung" || $this->barang == "Tepung") {
                $harga5 = 5000;
                $belanja = $harga5 * $this->jbarang;
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

        public function kembali()
        {
            if ($this->money > $this->bayar) {
                $sisa = $this->money - $this->bayar;
                $this->kembalian = $sisa;

                return "<br>Uang anda Rp." . $this->money .
                "<br> Kembalian Rp." . $this->kembalian;

            } elseif ($this->money > $this->diskon) {
                $sisa2 = $this->money - $this->diskon;
                $this->kembalian = $sisa2;

                return "<br>Uang anda Rp." . $this->money .
                "<br> Kembalian Rp." . $this->kembalian;

            }
        }

        public function __destruct()
        {

            echo "<br>Terima kasih sudah berbelanja!";

        }
    }

    $cek = new total($uang, $jumlah, $produk);
    echo $cek->total();
    echo $cek->kembali();

}
;
?>
        </form>
    </form>
</body>
</html>