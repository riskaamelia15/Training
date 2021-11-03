<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <title>Hitung Salarie</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-danger navbar-dark justify-content-center">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="homepage.php">SALARIE</a>
        </li>
    </ul>
</nav>

<br>
<center>
    <form action="" method="POST">
    <table style="background-color:#e43030;width:350px;height:250px;border-radius:2em;">
        <tr>
            <td>Nama barang</td>
            <td>:</td>
            <td>
                <input type="text" name="barang">
            </td>
        </tr>

        <tr>
            <td>Harga barang</td>
            <td>:</td>
            <td>
                <input type="text" name="harga">
            </td>
        </tr>

        <tr>
            <td>Barang yang dijual</td>
            <td>:</td>
            <td>
                <input type="text" name="beli">
            </td>
        </tr>

        <tr>
            <td colspan="3">
            <center><input type="submit" name="kali" value="Total"></center>
            </td>
        </tr>
    </table>
    </form>
<?php
if(isset($_POST['kali'])) {

@$nama_barang=$_POST['barang'];
@$harga_barang=$_POST['harga'];
@$terjual=$_POST['beli'];
$pesan=array();

if(empty($nama_barang)){
$pesan[]="Tentukan nama barang";
}

if(empty($harga_barang)){
$pesan[]="Tentukan harga barang";
}

else{
    if(!is_numeric($harga_barang)){
        $pesan[]="Harga barang harus berupa angka";
    }
}

if(empty($terjual)){
    $pesan[]="Tentukan total barang yang terjual";
    }
    
    else{
        if(!is_numeric($terjual)){
            $pesan[]="Total barang harus berupa angka";
        }
    }

    if(count($pesan) != 0){
        foreach ($pesan as $massage){
            echo "$massage";
        }
    }

        $total=$harga_barang * $terjual;
        ?>
<br>
        <table style="background-color:#e43030;width:350px;height:250px;border-radius:2em;"s>
            <tr>
                <th colspan="3" style="text-align:center;">Total penghasilan</th>
            </tr>
            <tr>
                <td>Nama barang</td>
                <td>:</td>
                <td>
                    <?php echo $nama_barang; ?>
                </td>
            </tr>
            <tr>
                <td>Harga barang</td>
                <td>:</td>
                <td>Rp.
                    <?php echo number_format($harga_barang,0,',','.')?>
                </td>
            </tr>
            <tr>
                <td>Total barang terjual</td>
                <td>:</td>
                <td>
                    <?php echo $terjual; ?>
                    Pcs
                </td>
            </tr>
            <tr>
                <td>Penghasilan</td>
                <td>:</td>
                <td>
                    Rp.
                    <?php echo number_format($total,0,',','.')?>
                </td>
            </tr>
        </table>
        <?php
}
?>
</center>
</body>
</html>
</body>
</html>