<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang</title>
</head>
<body>

    <form action="" method="post" name="input">
        Masukan Bintang: <input type="text" name="bintang" required> <br> <br>
        <input type="submit" name="Submit" value="Submit"> 
    </form>
    
</body>
</html>

<?php
if (isset($_POST['Submit'])) {
    $bintang = $_POST['bintang'];
    $star = "*";
    
    echo "<br>";
    echo "Program Segitiga Bintang Siku-siku <br>";
    echo "<br>";
    
    for ($c=$bintang; $c >= 1; $c--) { 
    for ($d=$bintang; $d >= $c; $d--) { 
        echo "$star";
    } 
    echo "<br>";
    }

}
    

?>
