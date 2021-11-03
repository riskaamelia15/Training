<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
<center>
    <form action="" method="post" name="input">
        <h3>Program Penggajian</h3>
        <h2>PT.GARUDA KELINCI AKUR</h2> <br>
        <table>
        <tr>
            <td>Nama Bendahara</td>
            <td>:</td>
            <td><input type="text" name="bendahara" required> <br></td>
        </tr>

        <tr>
            <td>Nama Pekerja</td>
            <td>:</td>
            <td><input type="text" name="pekerja" required> <br></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jk" value="Laki-laki" checked> Laki-laki  
            <input type="radio" name="jk" value="Perempuan" checked> Perempuan <br>
            </td>
        </tr>

        <tr>
            <td>Tanggal Gaji</td>
            <td>:</td>
            <td><input type="date" name="tgl" id="" min="2000-12-30"> <br></td>
        </tr>

        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><select name="jabatan" id="">
            <option name="jabatan">Pilih Jabatan</option>
            <option name="jabatan">Direktur</option>
            <option name="jabatan">Manager</option>
            <option name="jabatan">Karyawan</option>
            <option name="jabatan">OB</option>
        </select><br></td>
        </tr>

        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td><select name="pendidikan" id="">
                <option name="pendidikan">Pendidikan Terakhir</option>
                <option name="pendidikan">SD</option>
                <option name="pendidikan">SMP</option>
                <option name="pendidikan">SMA/SMK</option>
                <option name="pendidikan">S1</option>
            </select><br></td>
        </tr>

        <tr>
            <td>Lembur</td>
            <td>:</td>
            <td><input type="text" name="lembur" required> /Jam <br></td>
        </tr>

        </table>
        
        <input type="reset" value="Reset">
        <input type="submit" name="Kirim" value="Kirim">
    </form>
</center>
</body>
</html>

<?php
if (isset($_POST['Kirim'])) {
    $benda = $_POST['bendahara'];
    $kerja = $_POST['pekerja'];
    $jk = $_POST['jk'];
    $tgl = $_POST['tgl'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $lembur = $_POST['lembur'];

    //GAJI
    switch ($jabatan) {
        case 'Direktur':
            $gaji = 10000000;
            $tambah = $lembur * 25000;
            $total = $gaji + $tambah;
            break;
        case 'Manager':
            $gaji = 7500000;
            $tambah = $lembur * 25000;
            $total = $gaji + $tambah;
            break;
        case 'Karyawan':
            $gaji = 5000000;
            $tambah = $lembur * 25000;
            $total = $gaji + $tambah;
            break;
        case 'OB':
            $gaji = 2500000;
            $tambah = $lembur * 25000;
            $total = $gaji + $tambah;
            break;
    }

    //TUNJANGAN
    switch ($pendidikan) {
        case 'SD':
            $tunjang = 200000;
            $totalgaji = $tunjang + $total;
            break;
        case 'SMP':
            $tunjang = 500000;
            $totalgaji = $tunjang + $total;
            break;
        case 'SMA/SMK':
            $tunjang = 1000000;
            $totalgaji = $tunjang + $total;
            break;
        case 'S1':
            $tunjang = 1500000;
            $totalgaji = $tunjang + $total;
            break;
    }

    echo "<center>";

    echo "<br>";
    echo "<table>

    <tr>
    <td><b><i>Gaji</i></b></td>
    <td></td>
    <td></td>
    </tr>

    <tr>
    <td><td><td><td><td>Tanggal</td></td></td></td></td>
    <td>:</td>
    <td>$tgl</td>
    </tr>

    <tr>
    <td>Nama Karyawan</td>
    <td>:</td>
    <td>$kerja</td>
    </tr>

    <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>$jk</td>
    </tr>

    <tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td>$pendidikan</td>
    </tr>

    <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td>$jabatan</td>
    </tr>

    <tr>
    <td>Gaji</td>
    <td>:</td>
    <td>Rp.$gaji</td>
    </tr>

    </table>
    ";

    echo "<br>";
    echo "
    <table>

    <tr>
    <td><b><i>Tunjangan</i></b></td>
    <td></td>
    <td></td>
    </tr>

    <tr>
    <td>Tunjangan Pendidikan</td>
    <td>:</td>
    <td>Rp.$tunjang</td>
    </tr>

    <tr>
    <td>Vakasi Lembur</td>
    <td>:</td>
    <td>Rp.$tambah</td>
    </tr>

    <tr>
    <td><b>Total Gaji</b></td>
    <td><b>:</b></td>
    <td><b>Rp.$totalgaji</b></td>
    </tr>

    <tr>
    <td><td><td><td><td>Bendahara</td></td></td></td></td>
    <td>:</td>
    <td>$benda</td>
    </tr>
    </table>";

    echo "</center>";
}
?>