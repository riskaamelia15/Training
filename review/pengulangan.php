<?php

//FOR
for ($i= 0; $i < 5; $i++) { 
    echo "Data: $i <br>";
}

//FOR BERSARANG
for ($i=0; $i < 2; $i++) { 
    for ($i=0; $i < 3; $i++) { 
        echo "Ini perulangan ($i,$j)";
    }
}

//WHILE
$x = 0;
while ($x < 5) {
    echo "Data: $x <br>";
    $x++;
}

//DO WHILE
$a = 0;
do {
    echo "Data: $a <br>";
    $a++;
} while ($a < 5);
?>