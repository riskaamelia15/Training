<?php
if (isset($_POST['Kirim'])) {
    $nis = @$_POST['nis'];
    $nama = @$_POST['nama'];
    $jurusan = @$_POST['jurusan'];
    $tempat = @$_POST['tempat'];
    $tgl = @$_POST['tgl'];
    $bln = @$_POST['bln'];
    $thn = @$_POST['thn'];
    $jk = @$_POST['jk'];
    $ala = @$_POST['alamat'];

    echo "<h1>BIODATA</h1>";
    echo "<table border=1>

    <tr>
    <td>Nis</td>
    <td>Nama Lengkap</td>
    <td>Jurusan</td>
    <td>Tempat dan Tanggal Lahir</td>
    <td>Jenis Kelamin</td>
    <td>Alamat</td>
    </tr>

    <tr>
    <td>$nis</td>
    <td>$nama</td>
    <td>$jurusan</td>
    <td>$tempat, $tgl-$bln-$thn</td>
    <td>$jk</td>
    <td>$ala</td>
    </tr>

    </table>";
}
?>

    