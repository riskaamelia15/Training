<?php

    $url = "https://api.kawalcorona.com/indonesia/provinsi";
    // persiapkan curl / init curl
    $ch = curl_init();
    // set url
    curl_setopt($ch, CURLOPT_URL, $url);
    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
    $dataCovid = curl_exec($ch);
    // tutup curl
    curl_close($ch);
    // menampilkan hasil curl
    // echo $output;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <nav>
            <a href="api.php">Data Covid</a> |
            <a href="indonesia.php">Data Indonesia</a> |
            <a href="provinsi.php">Data Covid Provinsi</a> |
        </nav>
    </center>
    <fieldset>
        <legend>Data Covid</legend>
        <table border=1>
            <tr>
                <th>Provinsi</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>
            <?php
$no = 1;
$data = json_decode($dataCovid);
foreach ($data as $covid) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $covid->attributes->Kasus_Posi; ?></td>
                <td><?php echo $covid->attributes->Kasus_Semb; ?></td>
                <td><?php echo $covid->attributes->Kasus_Meni; ?></td>
            </tr>
            <?php
}?>
        </table>
    </fieldset>
</body>
</html>