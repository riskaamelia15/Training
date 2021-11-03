<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasi Goreng</title>
</head>
<body>

    <form action="" method="post" name="input">
        <h1>Nasi Goreng Jaya Abadi</h1> <br>
        Uang kita: <input type="text" name="uang" required> <br> <br>
        Harga Nasi Goreng: <input type="text" name="nasgor" required> <br> <br>

        <?php
        if (isset($_POST['Input'])) {
            $punya = $_POST['uang'];
            $harga = $_POST['nasgor'];
            
            if (($punya && $harga) == " " && ($punya && $harga) == 0) {
                echo "Silahkan isi uang dan harga!";
            } elseif ($punya < $harga) {
                $kurang = $harga - $punya;
                echo "Uang anda kurang Rp.$kurang, mohon tambah uang anda";
            } elseif ($punya > $harga) {
                $lebih = $punya - $harga;
                echo "Uang anda lebih Rp.$lebih, silahkan menunggu";
            } elseif ($punya = $harga) {
                echo "Uang anda pas Rp.$punya, silahkan menunggu";
            }
        }
        ?>

        <br>
        <input type="submit" name="Input" value="Input">
    </form>

</body>
</html>