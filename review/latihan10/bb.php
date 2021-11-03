<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BB Ideal</title>
</head>
<body>
    <form action="" method="post" name="input">

    <h3>Berat Badan Ideal</h3>
    <table>
        <tr>
            <td>Tinggi Badan</td>
            <td>:</td>
            <td><input type="number" name="tb" id="" min="0" required></td>
        </tr>
        <tr>
            <td>Berat Badan</td>
            <td>:</td>
            <td><input type="number" name="bb" id="" min="0" required></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jk" value="Pria" checked> Pria
            <input type="radio" name="jk" value="Wanita" checked> Wanita <br>
            </td>
        </tr>

    </table>

    <input type="reset" value="Reset">
    <input type="submit" name="Hitung" value="Hitung">

    </form>
</body>
</html>

<?php
        if (isset($_POST['Hitung'])) {
            $tinggi = $_POST['tb'];
            $berat = $_POST['bb'];
            $jk = $_POST['jk'];

            switch ($jk) {
                case 'Pria':
                    $ideal =($tinggi - 100) - ($tinggi - 100) * (10/100);
                    break;

                case 'Wanita':
                    $ideal =($tinggi - 100) - ($tinggi - 100) * (15/100);
                    break;
            }

            if ($berat == $ideal) {
                $hasil = "BB Anda Ideal";
            } else {
                $hasil = "BB Anda Tidak Ideal <br>";
            }

            echo "<br>";
            echo "
            <table>
            <tr>
            <td>Tinggi Badan</td>
            <td>:</td>
            <td>$tinggi CM</td>
            </tr>

            <td>Berat Badan</td>
            <td>:</td>
            <td>$berat KG</td>
            </tr>

            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>$jk</td>
            </tr>

            <td>Hasil</td>
            <td>:</td>
            <td>$hasil</td>
            </tr>

            <td>BB Ideal</td>
            <td>:</td>
            <td>$ideal KG</td>
            </tr>
            </table>
            ";

        }
?>

