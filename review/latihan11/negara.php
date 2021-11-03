<?php
//ARRAY Numeric
//Array Numeric adalah jenis array yang menggunakan index angka, index dimulai dari angka 0.
$negara = array("Indonesia", "Malaysia", "Singapura", "Brunei Darussalam", "Filipina");

echo "1. Output Array menggunakan perintah print_r() <br>";
echo '<pre>';
print_r($negara);

echo "<br>";

//ARRAY Assosiatif
$negara = [
    "Indonesia" => "Jakarta",
    "Malaysia" => "Kuala Lumpur",
    "Singapura" => "Singapura",
    "Thailand" => "Bangkok",
    "Filipina" => "Manila"
];

echo "2. Output Array Assosiatif <br><br>";
foreach ($negara as $kunci => $nilai) {
    echo "<li>Ibukota " . $kunci . " adalah " . $nilai . "</li>";
    echo "<br>";
}
?>
