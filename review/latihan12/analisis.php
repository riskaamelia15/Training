<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Analisis</title>
</head>
<body>
<h4>TUGAS ANALISIS</h4> <br>
<?php
$bentuk = [
    'Segitiga' => [
        $a = 5,
        $t = 10,
        //Luas = 1/2 x alas x tinggi
        'Luas' => [
            'Luas Segitiga',
            'Rumus: Luas = 1/2 x Alas x Tinggi',
            'L = 1/2 x ' . $a . ' x ' . $t,
            'Hasil = ' . 1/2 * $a * $t
        ],
        //Keliling = 3 x Panjang sisi
        'Keliling' => [
            'Keliling Segitiga',
            'Rumus: Keliling = 3 x Panjang Sisi',
            'K = 3 x ' . $a,
            'Hasil = ' . 3 * $a
        ]
    ],

    'Persegi' => [
        $s = 5,
        //Luas = sisi x sisi
        'Luas' => [
            'Luas Persegi',
            'Rumus: Luas = Sisi x Sisi',
            'L = ' . $s . ' x ' . $s,
            'Hasil = ' . $s * $s
        ],
        //Keliling = 4 x sisi
        'Keliling' => [
            'Keliling Persegi',
            'Rumus: Keliling = 4 x Sisi',
            'K = ' . 4 . ' x ' . $s,
            'Hasil = ' . 4 * $s 
        ]
    ],

    'Persegi Panjang' => [
        $p= 10,
        $l= 5,
        //Luas = panjang x lebar
        'Luas' => [
            'Luas Persegi Panjang',
            'Rumus: Luas = Panjang x Lebar',
            'L = ' . $p . ' x ' . $l,
            'Hasil = ' . $p * $l
        ],
        //Keliling = (panjang x 2) + (Lebar x 2)
        'Keliling' => [
            'Keliling Persegi Panjang',
            'Rumus: Keliling = Panjang x Lebar',
            'K = ' . $p . ' x ' . 2 . ' + ' . $l . ' x ' . 2,
            'Hasil = ' . $p * 2  * 2
        ],
    ],

    'Lingkaran' => [
        $r= 5,
        //Luas = Phi x r x r
        'Luas' => [
            'Luas Lingkaran',
            'Rumus: Luas = Phi x r x r',
            'L = ' . 3.14 . ' x ' . $r . ' x ' . $r,
            'Hasil = ' . 3.14 * $r * $r
        ],
        //Keliling = phi x 2 x r
        'Keliling' => [
            'Keliling Lingkaran',
            'Rumus: Keliling = phi x 2 x r',
            'K = ' . 3.14 . ' x ' . 2 . ' x ' . $r,
            'Hasil = ' . 3.14 * 2 * $r
        ],
    ],
];

echo "<pre>";
print_r($bentuk);
echo "<br>";

echo "<br>";
echo "Program Array Multidimensi Menampilkan Perhitungan Bangun Datar<br>";
echo $bentuk['Segitiga']['Luas'][0] . " = " . $bentuk['Segitiga']['Luas'][1]  . "<br>";
echo $bentuk['Segitiga']['Keliling'][0] . " = " . $bentuk['Segitiga']['Keliling'][1]. "<br>";
    
    ?>

</body>
</html>