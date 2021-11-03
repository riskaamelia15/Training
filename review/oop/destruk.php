<?php

class motor
{
    public $merkmotor;

    public function mulai()
    {
        echo "Mulai... <br>";
    }

    //gunakan 2 garis bawah
    public function __destruct()
    {
        echo "Selesai... <br>";

    }
}

$motor1 = new motor();
echo $motor1->mulai();
