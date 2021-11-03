<?php
class User
{
    public $name;
    public $username;
    protected $brithdate = '03 Juni 2016';
    private $address = 'Yogyakarta';
    protected $gender = 'Male';

    public function showSalam()
    {
        echo "Salam... nama saya $this->name <br/>";
    }
}

// membuat lagi class baru
// dengan extends class User
// artinya mewarisi property dan method
// dari class User
class Bio extends User
{
    // mengubah visibility keyword menjadi piblic
    // juga mengubah nilai menjadi 01 Januari 2017
    public $brithdate = '01 Januari 2017';

    public function showBio()
    {
        // menggunakan property dari class User
        echo "Username : $this->username <br/>";
        echo "Brithdate : $this->brithdate <br/>";
        echo "Gender : $this->gender <br/>";
    }

    public function showAddress()
    {
        echo "Address : $this->address";
    }
}

// membuat object Bagus
$Bagus = new Bio();

// memberikan nilai kepada property
$Bagus->name = 'Bagus';
$Bagus->username = 'tubagus';

// tidak bisa memberikan nilai:
// Cannot access protected property
// karena property gender adalah protected
// hanya boleh diakses dari dalam class itu sendiri
// dan dari dalam extended class
// $Bagus->gender = 'Female';

// memanggil property
// kode ini tidak error
echo $Bagus->username . '<br/>';

// Undefined property.
// karena property gender adalah protected
// echo $Bagus->gender;

// dalam class User property brithdate adalah protected
// tapi setelah di extends di class Bio
// diubah public dan di ganti nilainya
// jadi 01 Januari 2017
echo $Bagus->brithdate . '<br/>';

// memanggil method
// kode ini tidak error
$Bagus->showSalam();
$Bagus->showBio();

// PHP Notice:  Undefined property.
// Karena address adalah private
//$Bagus->showAddress();
