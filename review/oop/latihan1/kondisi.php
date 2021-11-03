<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kucing</title>
</head>
<body>
    <form action="" name="input" method="post">
        <table>
            <tr>
                <td>Nama kucing :</td>
                <td> <input type="text" name="nama" id=""> <br></td>
            </tr>
            <tr>
                <td>Jumlah Kaki :</td>
                <td><input type="text" name="kaki" id=""> <br></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" name="cek" value="Cek"></td>
            </tr>
            
        </table>

    <?php
    if (isset($_POST['cek']))  {
        $nama =@$_POST['nama'];
        $kaki =@$_POST['kaki'];

        echo "<br>";
        echo "Nama kucing kamu $nama <br>";
        echo "jumlah kaki: $kaki <br>";

        class kucing {
        public $kaki;
        function kondisi($kaki) {
            if ($kaki < 4) {
                $kondisi = "cingked";
                return 'kucing kamu punya ' . $kaki . ' kaki, sepertinya kucing kamu ' . $kondisi;
            } elseif ($kaki == 4) {
                $kondisi = "normal";
            return 'kucing kamu punya ' . $kaki . ' kaki, sepertinya kucing kamu ' . $kondisi;
            } elseif ($kaki > 4) {
                $kondisi = "siluman";
            return 'kucing kamu punya ' . $kaki . ' kaki, sepertinya kucing kamu ' . $kondisi;
            }

        }
    }
    
    $cekkucing = new kucing();
    echo $cekkucing->kondisi($kaki);
    
    };
    ?>
    </form>
</body>
</html>

