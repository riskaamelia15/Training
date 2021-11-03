<?php  
class kucing {
    public $kaki;
    public $ekor;
    public $warna;
    public $mulut;

    public function berjalan($kaki) {
        return 'kucing berjalan dengan ' . $kaki . ' kaki';
    }
    public function ekor($ekor) {
        return 'kucing memiliki ' . $ekor . ' ekor';
    }
    public function bulu($warna) {
        return 'kucing memiliki bulu ' . $warna;
    }
    public function makan($mulut) {
        return 'kucing makan dengan ' . $mulut . ' mulut';
    }
}

$kucing = new kucing();
echo $kucing->berjalan(4);
echo "<br>";
echo $kucing->berjalan(3);
?>