<?php

//Angka genap
echo "ANGKA GENAP <br>";
for ($i= 1; $i <= 100; $i++) { 
    $i = $i + 1;
    echo "$i ";
}

echo "<br>";
echo "<br>";
//ANAK AYAM
echo "ANAK AYAM <br>";
for ($a= 10; $a > 0; $a--) { 
    for ($i=1; $i <= 1; $i++) {        
        $j = $a - $i; 
        if ($j < 1) {
            echo "Anak ayam turun $a, mati $i tingal induknya";
        } else {
            echo "Anak ayam turun $a, mati $i tinggal $j <br>";
        }
    }
}

echo "<br>";
echo "<br>";

//For bersarang
echo "SEGITIGA <br>";
echo "<br>";
for ($c=10; $c >= 0; $c--) { 
    for ($d=10; $d >= $c; $d--) { 
        echo "*";
    } 
    echo "<br>";
}

echo "<br>";

for ($c=10; $c >= 0; $c--) { 
    for ($d=0; $d <= $c; $d++) { 
        echo "+";
    } 
    echo "<br>";
}

echo "<br>";

echo '<p style="float: left; text-align: right;">';
for($i=1; $i<=10; $i++){
for($x=$i; $x>=1; $x--){
echo "*";
}
echo "<br>";
}
echo '</p>';

echo "<br>";

for ($n = 0; $n <= 10; $n++) { 
    for ($r = 10; $r >= $n; $r--) { 
        echo "&nbsp";
    } for ($r1 = 1; $r1 <= $n; $r1++) { 
        echo "+";
    }
    echo "<br>";
}

echo "<br>";

echo '<p style="float: left; text-align: right;">';
for($i=10; $i>=1; $i--){
for($x=$i; $x>=1; $x--){
echo "*";
}
echo "<br>";
}
echo '</p>';

echo "<br>";

	for($a=1; $a<=10; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=10; $c>=$a; $c-=1){
		echo "+";
	}
	echo "<br>";
	}
?>