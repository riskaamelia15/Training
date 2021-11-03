<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kas</title>
</head>
<body>
    <form action="" method="POST">
    <table>
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
            <td>
                <input type="submit" name="kali" value="Total">
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

        <table border="1">
            <tr>1
                <th colspan="2">Total penghasilan</th>
            </tr>
            <tr>
                <td>Nama barang</td>
                <td>
                    <?php echo $nama_barang; ?>
                </td>
            </tr>
            <tr>
                <td>Harga barang</td>
                <td>Rp.
                    <?php echo number_format($harga_barang,0,',','.')?>
                </td>
            </tr>
            <tr>
                <td>Total barang terjual</td>
                <td>
                    <?php echo $terjual; ?>
                    Pcs
                </td>
            </tr>
            <tr>
                <td>Penghasilan</td>
                <td>
                    Rp.
                    <?php echo number_format($total,0,',','.')?>
                </td>
            </tr>
        </table>
        <?php
}
?>
</body>
</html>