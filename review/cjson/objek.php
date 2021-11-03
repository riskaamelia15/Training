<?php
$json = '{
"nama": "Nurul Huda",
"domisili": "Surabaya",
"usia": 23,
"wni": true,
"hobi": [
    "Berenang", "Berlari", "Bertamasya"
]
}';

$mahasiswa = json_decode($json);

echo "Nama: {$mahasiswa->nama} <br>";
echo "Domisili: {$mahasiswa->domisili} <br>";

echo "Hobi: " . implode(", ", $mahasiswa->hobi);
?>