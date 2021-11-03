<?php

// class motor {

//     function __construct() {
//         echo "<h1>Halo kodingan, ini berasal dari Constructor</h1>";
//     }
// }

// $motor1 = new motor();

echo "<br>";
echo "<br>";

class motor {
    public $merkmotor;

    //gunakan 2 garis bawah
    public function __construct($merk) {
        $this->merkmotor = $merk;
    }

    public function cetakmerk() {
        return $this->merkmotor;
    }
}

$motor1 = new motor("Satria FU");
echo $motor1->cetakmerk();

?>