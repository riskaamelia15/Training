<?php
$perusahaan = [
    'nama' => 'Riska Amelia',
    'umur' => '18 Tahun',
    'alamat' => 'Kp. Cilebak',
    'hobby' => [
        'menggambar',
        'membaca',
        'streaming',
        'main game'
    ],
    'media sosial' => [
        'instagram' => 'risk.aa',
        'facebook' => 'Exteria Reil',
        'twiter' => 'shansei15'
    ]
];

echo "<pre>";
print_r($perusahaan);

echo "<br>";
echo "Program Array Multidimensi Menampilkan Satu Data<br>";
echo $perusahaan['hobby'][1] . "<br>";
echo $perusahaan['media sosial']['facebook'] ."<br>";
?>