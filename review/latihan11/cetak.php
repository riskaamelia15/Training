<html lang="en">
<head>
<style>
th, td {
    border: 1px solid white;
    border-collapse: collapse;
    border-radius: 10px;
    background-color: #D6EEEE;
    text-align: center;
}

th:nth-child(even), th:nth-child(odd) {
    background-color: #96D4D4;
}

table {
    border-collapse: collapse;
    width: 100%;
}

tr {
    border-bottom: 1px solid #ddd;
}
</style>

    <title>Output Nilai</title>
</head>
<body>

<?php
if (isset($_POST['Cetak'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $n6 = $_POST['n6'];
    $n7 = $_POST['n7'];
    $n8 = $_POST['n8'];
    $n9 = $_POST['n9'];
    $n0 = $_POST['n0'];
    
    $mapel = [
    "Pendidikan Agama Islam" => $n1,
    "PPKN" => $n2,
    "Bahasa Indonesia" => $n3,
    "Matematika" => $n4,
    "Bahasa Inggris" => $n5,
    "Produk Kreatif dan Kewirausahaan" => $n6,
    "Al-Qur'an" => $n7,
    "Bimbingan Konseling" => $n8,
    "Produktif RPL" => $n9,
    "Produktif TKJ" => $n0,
    ];

    echo "<table>";?>
    <caption>
    <h3>Form Cetak Nilai Siswa</h3>
    <h3>SMK ASSALAAM BANDUNG</h3>
    <h4>Tahun 2021/2022</h4>
    </caption>

    <tr>
        <td colspan="3">
            Name:
            <?=$nama?>
        </td>
    </tr>

    <tr>
        <td colspan="3">
            NIS:
            <?=$nis?>
        </td>
    </tr>

    <tr>
    <th>No</th>
    <th>Mata Pelajaran</th> 
    <th>Nilai</th>
    </tr>
    
    <?php $a = 1;
    foreach ($mapel as $key => $value) {
        if ($value > 85 && $value <= 100) {
            $grade = "A";
            $bobot = 4;
        } elseif ($value > 75 && $value <= 85) {
            $grade = "B";
            $bobot = 4;
        } elseif ($value > 60 && $value <= 75) {
            $grade = "C";
            $bobot = 4;
        } elseif ($value > 40 && $value <= 60) {
            $grade = "D";
            $bobot = 4;
        } elseif ($value > 0 && $value <= 40) {
            $grade = "E";
            $bobot = 4;
        }

        $rata = $bobot / 10;

        echo "
        <tr>
        <td>$a</td>
        <td>$key</td>
        <td>$grade</td>
        </tr>
        "; $a++;
    }?>

    <tr>
        <td colspan="3">
            Nilai Rata-rata Anda Adalah:
            <?=$rata?>
        </td>
    </tr> 

    <?= "</table>";
}
?>

</body>
</html>
