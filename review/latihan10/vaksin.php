<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izin Masuk Mall</title>
</head>
<body>
    <form action="" method="post" name="input">
        <h2>Ketentuan Masuk Mall</h2> <br>
        <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" required> <br></td>
        </tr>

        <tr>
            <td>Usia</td>
            <td>:</td>
            <td><input type="text" name="usia" required> <br></td>
        </tr>


        <tr>
            <td>Vaksin</td>
            <td>:</td>
            <td><input type="radio" name="vaksin" value="Sudah" checked> Sudah 
                <input type="radio" name="vaksin" value="Belum" checked> Belum <br></td>
        </tr>

        </table>

        <input type="reset" value="Reset">
        <input type="submit" name="Cek" value="Cek">
    </form>
</body>

<?php
if (isset($_POST['Cek'])) {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $vaksin = $_POST['vaksin'];
    $link = "https://pedulilindungi.id/";

    if ($usia > 12 && $usia < 50) {
        if ($vaksin == "Sudah") {
            $masuk = "Anda Boleh Memasuki Mall";
        } else {
            $masuk = "Anda tidak bisa memasuki Mall <br>
            Silahkan kunjungi <a href='".$link."'>pedulilindungi.id</a> <br>
            untuk pandaftaran vaksinasi.
            ";
        }
    } else {
        $masuk = "Anda tidak bisa memasuki Mall";
    }

    Echo "
    <table>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td>$nama</td>
    </tr>

    <tr>
    <td>Usia</td>
    <td>:</td>
    <td>$usia</td>
    </tr>

    <tr>
    <td>Vaksin</td>
    <td>:</td>
    <td>$vaksin</td>
    </tr>

    <tr>
    <td></td>
    <td>$masuk</td>
    <td></td>
    </tr>
    </table>";
}
?>


</html>