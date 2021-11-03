<?php
if (isset($_POST['jam'])) {
    $jam = $_POST['jam'];
    echo "Jumlah Jam Kerja: $jam <br>";
    $kerja = $_POST['kerja'];
    echo "Golongan Kerja: $kerja <br>";
    }
    
    switch ($kerja) {
        case 'A':
            $gaji = 4000 * $jam;
            echo "Gaji Anda: $gaji";
            break;
        case 'B':
            $gaji = 5000 * $jam;
            echo "Gaji Anda: $gaji";
            break;
        case 'C':
            $gaji = 6000 * $jam;
            echo "Gaji Anda: $gaji";
            break;
        case 'D':
            $gaji = 7000 * $jam;
            echo "Gaji Anda: $gaji";
            break;
    }
?>

<html>
    <br>
    <form action="gaji.html" method="post">
        <input type="submit" name="Return" value="Return">
    </form>
    
</html>
