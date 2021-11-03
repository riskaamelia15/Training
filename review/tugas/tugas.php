
<html>
<form action="" method="post">
    Nama : <input type="text" name="nama" id=""> <br>
    Divisi : <select name="divisi" id="">
        <option value="A01">A01</option>
        <option value="A02">A02</option>
        <option value="A03">A03</option>
        <option value="A01">B01</option>
        <option value="A02">B02</option>
        <option value="A01">C01</option>
        <option value="A02">C02</option>
        <option value="A03">C03</option>
    </select>
    <br> Absen : <input type="text" name="absen" id=""> <br>
    <input type="submit" name="cek" value="cek">
</form>
</html>
<?php
if (isset($_POST['cek'])) {
    $nama = $_POST['nama'];
    $divisi = $_POST['divisi'];
    $absen = $_POST['absen'];

    class perusahaan
    {
        public $hasil;

        public function gaji($nama, $divisi, $absen)
        {

            if ($divisi = "A01") {
                $gajian = 4500000;
                $this->hasil = ($gajian * (100 / 2)) - $gajian;

            } elseif ($divisi = "A02") {
                $gajian = 4000000;
                $this->hasil = ($gajian * (100 / 2)) - $gajian;

            } elseif ($divisi = "A03") {
                $gajian = 4500000;

                $this->hasil = ($gajian * (100 / 2)) - $gajian;

            } elseif ($divisi = "B01") {
                $gajian = 4000000;

                $this->hasil = ($gajian * (100 / 2)) - $gajian;

            } elseif ($divisi = "B02") {
                $gajian = 4000000;

                $this->hasil = ($gajian * (100 / 2)) - $gajian;

            } elseif ($divisi = "C01") {
                $gajian = 3000000;

                $this->hasil = ($gajian * (100 / 2)) - $gajian;

            } elseif ($divisi = "C02") {
                $gajian = 4000000;

                $this->hasil = ($gajian * (100 / 2)) - $gajian;

            } elseif ($divisi = "C03") {
                $gajian = 2000000;
                $this->hasil = ($gajian * (100 / 2)) - $gajian;

            }

            if ($this->absen > 4) {
                return "Nama : $nama <br>
                Absen : $absen<br>
                Gaji Rp. " . $this->hasil;
            } else {
                return "Nama : $nama<br>
                Gaji Rp. " . $gajian;

            }
        }

    };

    $a = new perusahaan();
    echo $a->gaji($nama, $divisi, $absen);

}
