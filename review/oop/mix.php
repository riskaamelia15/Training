<?php

class motor
{
    public $merkmotor, $ownermotor;

    public function __construct(
        $merk = 'Satria FU',
        $owner = 'Didik Prabowo'
    ) {
        $this->merkmotor = $merk;
        $this->ownermotor = $owner;

    }

    public function getData(): array
    {
        $data = [
            'owner' => $this->ownermotor,
            'merk' => $this->merkmotor,
        ];
        return $data;
    }

    //gunakan 2 garis bawah
    public function __destruct()
    {
        echo "<br> Selesai... ";

    }
}

$motor1 = new motor();
echo $motor1->getData()['owner'];
echo "<br>" . $motor1->getData()['merk'];
