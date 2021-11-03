<?php

//IF
$belanja = 150000;

//Jika belanja lebih dari 100000 maka tampilkan echo
if ($belanja > 100000) {
    echo "Anda mendapatkan hadiah! <br>";
    echo "<br>";
}

//IF Else
$teman = "andi";

//Jika isi variable teman adalah "Budi" 
//maka tampilkan echo "dia adalah teman saya"
if ($teman == "Budi") {
    echo "dia adalah teman saya";

//Jika isi variable teman bukan "Budi" 
//maka tampilkan echo "dia bukan teman saya"
} else {
    echo "dia bukan teman saya";
}

//IF elseif
$teman = "andi";

//Jika isi variable teman adalah "Budi" 
//maka tampilkan echo "Budi adalah teman saya"
if ($teman == "Budi") {
    echo "Budi adalah teman saya";
}

//Jika isi variable teman adalah "andi" 
//maka tampilkan echo "Andi adalah teman saya"
elseif ($teman == "andi") {
    echo "Andi adalah teman saya";
}

//Jika isi variable teman bukan kedua kondisi diatas 
//maka tampilkan echo "Saya tidak punya teman"
else {
    echo "Saya tidak punya teman";
}

?>