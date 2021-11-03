<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <form action="" name="input" method="post">
        <table>
            <caption>
                Program bulan, jurusan, dan biodata
            </caption>

            <tr>
            <td>Bulan</td>
            <td>:</td>
            <td><select name="bulan" id="">
                    <option value="bulan">Bulan</option>
                    <option value="bulan">Januari</option>
                    <option value="bulan">Februari</option>
                    <option value="bulan">Maret</option>
                    <option value="bulan">April</option>
                    <option value="bulan">Mei</option>
                    <option value="bulan">Juni</option>
                    <option value="bulan">Juli</option>
                    <option value="bulan">Agustus</option>
                    <option value="bulan">September</option>
                    <option value="bulan">November</option>
                    <option value="bulan">Oktober</option>
                    <option value="bulan">Desember</option>
                </select><br></td>
            </tr>

            <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="radio" name="jurusan" value="RPL" checked> RPL
                <input type="radio" name="jurusan" value="TKRO" checked> TKRO
                <input type="radio" name="jurusan" value="TBSM" checked> TBSM<br>
            </td>
            </tr>

            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="">
                </td>
            </tr>

            <tr>
                <td>Usia</td>
                <td>:</td>
                <td>
                    <input type="number" name="usia" id="" min=10 max=50>
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea type="text" name="alamat" value="alamat" rows="5"></textarea><br>
                </td>
            </tr>

            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Membaca" id="">Membaca
                    <input type="checkbox" name="hobi[]" value="Streaming" id="">Olahraga
                    <input type="checkbox" name="hobi[]" value="Menggambar" id="">Menggambar
                    <input type="checkbox" name="hobi[]" value="Hangout" id="">Hangout
                    <input type="checkbox" name="hobi[]" value="Nonton" id="">Nonton
                    <input type="checkbox" name="hobi[]" value="Main Game" id="">Main Game
                </td>
            </tr>

            <tr>
                <td>agama</td>
                <td>:</td>
                <td>
                    <select name="agama" id="">
                        <option value="agama">Agama</option>
                        <option value="agama">Islam</option>
                        <option value="agama">Kristen</option>
                        <option value="agama">Hindu</option>
                        <option value="agama">Budha</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Tempat tinggal</td>
                <td>:</td>
                <td>
                    <input type="text" name="tinggal" id="">
                </td>
            </tr>

            <tr>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td>
                    <input type="text" name="negara" id="">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="reset" value="Reset">
                </td>
                <td> </td>
                <td>
                    <input type="submit" name="cek" value="Cek">
                </td>
            </tr>
        </table>

    </form>
</body>
</html>

<?php
if (isset($_POST['cek'])) {
    $bulan = $_POST['bulan'];
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $agama = $_POST['agama'];
    $tinggal = $_POST['tinggal'];
    $negara = $_POST['negara'];

    class bio
    {
        public $hasil, $bulan;
        protected $hasil2, $jurusan;
        private $hasil3, $usia, $nama, $alamat, $hobi, $agama, $tinggal, $negara;

        public function __construct(
            $bulan,
            $jurusan,
            $usia,
            $nama,
            $alamat,
            $hobi,
            $agama,
            $tinggal,
            $negara
        ) {$this->bulan = $bulan;
            $this->jurusan = $jurusan;
            $this->usia = $usia;
            $this->nama = $nama;
            $this->alamat = $alamat;
            $this->hobi = $hobi;
            $this->agama = $agama;
            $this->tinggal = $tinggal;
            $this->negara = $negara;

        }

        public function bulan()
        {
            if ($this->bulan = "Januari" || $this->bulan = "januari") {
                $namaBulan = "Januari";
                $this->hasil = $namaBulan;

            } elseif ($this->bulan = "Februari" || $this->bulan = "februari") {
                $namaBulan = "Februari";
                $this->hasil = $namaBulan;

            } elseif ($this->bulan = "Maret" || $this->bulan = "maret") {
                $namaBulan = "Maret";
                $this->hasil = $namaBulan;

            } elseif ($this->bulan = "April" || $this->bulan = "april") {
                $namaBulan = "April";
                $this->hasil = $namaBulan;

            } elseif ($this->bulan = "Mei" || $this->bulan = "mei") {
                $namaBulan = "Mei";
                $this->hasil = $namaBulan;

            } elseif ($this->bulan = "Juni" || $this->bulan = "juni") {
                $namaBulan = "Juni";
                $this->hasil = $namaBulan;

            } elseif ($this->bulan = "Juli" || $this->bulan = "Juli") {
                $namaBulan = "Juli";
                $this->hasil = $namaBulan;

            } elseif ($this->bulan = "Agustus" || $this->bulan = "agustus") {
                $namaBulan = "Agustus";
                $this->hasil = $namaBulan;

            } elseif ($this->bulan = "September" || $this->bulan = "september") {
                $namaBulan = "September";
                $this->hasil = $namaBulan;

            } elseif ($this->bulan = "Oktober" || $this->bulan = "oktober") {
                $namaBulan = "Oktober";
                $this->hasil = $namaBulan;

            } elseif ($this->bulan = "November" || $this->bulan = "november") {
                $namaBulan = "November";
                $this->hasil = $namaBulan;

            } elseif ($this->bulan = "Desember" || $this->bulan = "desember") {
                $namaBulan = "Desember";
                $this->hasil = $namaBulan;

            }

            return "
            <table>
            <caption><br>Cetak Data</caption>

                <tr>
                    <td>Bulan</td>
                    <td>:</td>
                    <td>$this->hasil</td>
                </tr>";}

        public function jurusan()
        {
            if ($this->jurusan = "RPL") {
                $bidang = "Rekayasa Perangkat Lunak";
                $this->hasil2 = $bidang;

            } elseif ($this->jurusan = "TKRO") {
                $bidang = "Teknik Kendaraan Ringan";
                $this->hasil2 = $bidang;

            } elseif ($this->jurusan = "TBSM") {
                $bidang = "Teknik Sepeda Motor";
                $this->hasil2 = $bidang;

            }

            return "<tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>$this->hasil2</td>
                </tr>";}

        public function biodata()
        {
            if ($this->negara == "Indonesia" || $this->negara == "indonesia") {
                $k = "WNI";
                $this->hasil3 = $k;

            } else {
                $k = "WNA";
                $this->hasil3 = $k;

            }

            return "<tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>$this->nama</td>
                </tr>

                <tr>
                    <td>usia</td>
                    <td>:</td>
                    <td>$this->usia</td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>$this->alamat</td>
                </tr>

                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>" . implode(", ", $this->hobi) . "</td>
                </tr>

                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>$this->agama</td>
                </tr>

                <tr>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>$this->tinggal</td>
                </tr>

                <tr>
                    <td>Negara</td>
                    <td>:</td>
                    <td>$this->negara ($this->hasil3)</td>
                </tr>

            </table>
            ";
        }

    }

    $hasil = new bio($bulan, $jurusan, $usia, $nama, $alamat, $hobi, $agama, $tinggal, $negara);
    echo $hasil->bulan();
    echo $hasil->jurusan();
    echo $hasil->biodata();

}