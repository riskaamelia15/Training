<html>
<?php
$a = 5;
$t = 10;
$s = 5;
$p= 10;
$l= 5;
$r = 5;
$bentuk = array(
    array(
        'Segitiga', 
        'Luas', 
        'L = 1/2 x Alas x Tinggi', 
        'L = 1/2 x ' . $a . ' x ' . $t, 
        'Hasil = ' .  1/2 * $a * $t),
    array(
        'Segitiga', 
        'Keliling', 
        'K = 3 x Panjang Sisi', 
        'K = 3 x ' . $a, 
        'Hasil = ' . 3 * $a),
    array(
        'Persegi', 
        'Luas', 
        'L = Sisi x Sisi', 
        'L = ' . $s . ' x ' . $s,
        'Hasil = ' . $s * $s),
    array(
        'Persegi', 
        'Keliling', 
        'K = 4 x Sisi', 
        'K = ' . 4 . ' x ' . $s,
        'Hasil = ' . 4 * $s ),
    array(
        'Persegi panjang', 
        'Luas', 
        'L = Panjang x Lebar', 
        'L = ' . $p . ' x ' . $l,
        'Hasil = ' . $p * $l),
    array(
        'Persegi panjang', 
        'Keliling', 
        'K = Panjang x Lebar', 
        'K = ' . $p . ' x ' . 2 . ' + ' . $l . ' x ' . 2,
        'Hasil = ' . $p * 2  * 2),
    array(
        'Lingkaran', 
        'Luas', 
        'L = Phi x Jari-jari x Jari-jari', 
        'L = ' . 3.14 . ' x ' . $r . ' x ' . $r,
        'Hasil = ' . 3.14 * $r * $r),
    array(
        'Lingkaran', 
        'Keliling', 
        'K = phi x 2 x Jari-jari', 
        'K = ' . 3.14 . ' x ' . 2 . ' x ' . $r,
        'Hasil = ' . 3.14 * 2 * $r),
);

//$key adalah variabel $bentuk
//$value adalah isi dari array
//Dihitung dari baris (atas ke bawah), mulai dari index Nol(0)
?>

<ul>
    <?php foreach ($bentuk as $key => $value) : ?>
        <li><?= $value[1]?> <?= $value[0] ?></li> 
        Rumus <?= $value[2] ?> <br>
        <?= $value[3] ?><br>
        <?= $value[4] ?>
    <?php endforeach ?>
</ul>
</html>