<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung</title>
</head>
<body>
    <form action="" name="input" method="post">
        <table>
            <tr>
                <td>Nilai pertama :</td>
                <td> <input type="text" name="a" id=""> <br></td>
            </tr>
            <tr>
                <td>Nilai kedua :</td>
                <td><input type="text" name="t" id=""> <br></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" name="hitung" value="Hitung"></td>
            </tr>

        </table>

    <?php

if (isset($_POST['hitung'])) {
    $a = @$_POST['a'];
    $t = @$_POST['t'];

    echo "Nilai Pertama : $a <br>";
    echo "Nilai Nilai kedua : $t <br> <br>";

    class jajar
    {
        public $jajar;
        public $belah;

        //gunakan 2 garis bawah
        public function __construct($a, $t)
        {
            $this->jajar = $a * $t;
            //belah ketupat dan layang-layang punya rumus yang sama
            $this->belah = 1 / 2 * ($a * $t);
        }

        public function hasil()
        {
            return "Luas Jajargenjang <br>
        Luas = Alas x Tinggi <br>
        L = " . $this->jajar . "<br> <br>";
        }
    }

    class belah extends jajar
    {
        public function hasil2()
        {
            return "Luas Belah Ketupat <br>
        Luas = 1/2 x D1 x D2 <br>
        L = " . $this->belah . "<br> <br>";
        }
    }

    class layang extends jajar
    {
        public function hasil3()
        {
            return "Luas Layang-layang <br>
        Luas = 1/2 x D1 x D2 <br>
        L = " . $this->belah;
        }
    }

    $cek = new jajar($a, $t);
    echo $cek->hasil();
    $cek2 = new belah($a, $t);
    echo $cek2->hasil2();
    $cek3 = new layang($a, $t);
    echo $cek3->hasil3();

}
;

?>
    </form>
</body>
</html>