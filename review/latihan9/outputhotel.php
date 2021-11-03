<?php
if (isset($_POST['Pesan'])) {
    $tgl = $_POST['tgl'];
    $nama = $_POST['nama'];
    $id = $_POST['id'];
    $kamar = $_POST['kamar'];
    $time = $_POST['durasi'];

    switch ($kamar) {
        case 'Superior':
            $harga = $time * 650000;
            break;

        case 'Deluxe':
            $harga = $time * 900000;
            break;

        case 'Junior Suite':
            $harga = $time * 1300000;
            break;
    }

    echo "<h1>Data Tamu Hotel</h1>";
    echo "<table border=1>

    <tr>
    <td>Tanggal Menginap</td>
    <td>Nama Lengkap</td>
    <td>No ID</td>
    <td>Tipe Kamar</td>
    <td>Durasi Menginap</td>
    <td>Harga</td>
    </tr>

    <tr>
    <td>$tgl</td>
    <td>$nama</td>
    <td>$id</td>
    <td>$kamar</td>
    <td>$time Hari</td>
    <td>Rp.$harga</td>
    </tr>

    </table>";
        if ($harga >= 2500000) {
        $disk = $harga - ($harga * (20/100));
        $potong1 = "20%";

        echo "
        <table border=1>
        <tr>
        <td>Diskon</td>
        <td>Pembayaran</td>
        </tr>
        
        <tr>
        <td>Rp.$potong1</td>
        <td>$disk</td>
        </tr>
        </table>
        ";
        
        
    } elseif ($harga >= 1700000) {
        $disk = $harga - ($harga * (10/100));
        $potong = "10%";

        echo "
        <table border=1>
        <tr>
        <td>Diskon</td>
        <td>Pembayaran</td>
        </tr>
        
        <tr>
        <td>Rp.$potong</td>
        <td>$disk</td>
        </tr>
        </table>
        ";
    }
}
?>