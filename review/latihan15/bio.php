<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>

<form action="" method="post" name="input">
    <fieldset>
        <legend>
            Fungsi - Input Biodata
        </legend>

        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="nama" id="">
                </td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki" id="" checked>Laki-laki
                    <input type="radio" name="jk" value="Perempuan" id="" checked>Perempuan
                </td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <input type="date" name="tgl" id="">
                </td>
            </tr>

            <tr>
                <td>agama</td>
                <td>
                    <select name="agama" id="">
                        <option value="agama">Agama</option>
                        <option value="agama">Islam</option>
                        <option value="agama">Kristen</option>
                        <option value="agama">Hindu</option>
                        <option value="agama">Budha</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>
                    <textarea type="text" name="alamat" value="alamat" rows="5"></textarea><br>
                </td>
            </tr>

            <tr>
                <td>Hobi</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Membaca" id="">Membaca
                    <input type="checkbox" name="hobi[]" value="Streaming" id="">Olahraga
                    <input type="checkbox" name="hobi[]" value="Menggambar" id="">Menggambar
                    <input type="checkbox" name="hobi[]" value="Hangout" id="">Hangout
                    <input type="checkbox" name="hobi[]" value="Nonton" id="">Nonton
                    <input type="checkbox" name="hobi[]" value="Main Game" id="">Main Game
                </td>
            </tr>

            <tr>
                <td>
                    <input type="reset" value="Reset">
                </td>
                <td>
                    <input type="submit" name="cek" value="Cek">
                </td>
            </tr>
        </table>

        <?php
        if (isset($_POST['cek'])) {
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $tgl = $_POST['tgl'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];
            $hobi = $_POST['hobi'];

            function biodata($nama, $jk, $tgl, $agama, $alamat, $hobi){
                echo "<br>";
                echo "Nama Lengkap: $nama <br>";
                echo "Jenis Kelamin: $jk <br>";
                echo "Tanggal Lahir: $tgl <br>";
                echo "Agama: $agama <br>";
                echo "Alamat: $alamat <br>";
                echo "Hobi: " . implode(", ", $hobi) . "<br>" ;
            }
            
            biodata($nama, $jk, $tgl, $agama, $alamat, $hobi);
        }
        ?>


    </fieldset>
</form>
</body>
</html>