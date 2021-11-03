<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Lingkaran dengan Fungsi</title>
</head>
<body>
    <form action="" name="input" method="post">
        <fieldset>
            <table>
                    <legend>Fungsi Perhitungan Luas & Keliling Lingkaran</legend>
                    <tr>
                        <th>Masukan Jari-jari</th>
                        <th>
                            <input type="text" name="jari" id="">
                        </th>
                    </tr>
    
                    <tr>
                        <td> </td>
                        <td>
                            <input type="submit" name="Hitung" value="Hitung">
                        </td>
                    </tr>
            </table>

            <?php
            if (isset($_POST['Hitung'])) {
                $jari = $_POST['jari'];
                $l = 3.14 * $jari * $jari;
                $k = 3.14 * 2 * $jari;

                function lingkaran($jari, $l, $k) {
                echo "Jari-jari: $jari <br>";
                echo "Luas Lingkaran: $l <br>";
                echo "Keliling Lingkaran: $k <br>";
                }

            lingkaran($jari, $l, $k);

            }
            
            ?>

        </fieldset>
    </form>
    
</body>
</html>