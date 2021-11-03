<?php
if (isset($_POST['Kirim'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kls = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $jk = $_POST['jk'];
    $tgs1 = $_POST['tgs1'];
    $tgs2= $_POST['tgs2'];
    $tgs3 = $_POST['tgs3'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $total = (($tgs1 + $tgs2 + $tgs3 * (20/100)) + ($uts * (30/100)) + ($uas * (50/100)));
    $rata = $total / 3;

    //LULUS - TIDAK LULUS
        if ($tgs1 <= 75) {
        $t1 = "Perlu Perbaikan";
    } else {
        $t1 = "Lulus";
    }

    if ($tgs2 <= 75) {
        $t2 = "Perlu Perbaikan";
    } else {
        $t2 = "Lulus";
    }

    if ($tgs3 <= 75) {
        $t3 = "Perlu Perbaikan";
    } else {
        $t3 = "Lulus";
    }

    if ($uts <= 75) {
        $t4 = "Perlu Perbaikan";
    } else {
        $t4 = "Lulus";
    }

    if ($uas <= 75) {
        $t5 = "Perlu Perbaikan";
    } else {
        $t5 = "Lulus";
    }

    if ($rata <= 75) {
        $t6 = "Tidak Lulus";
    } else {
        $t6 = "Lulus";
    }

    if ($rata >= 90 && $rata <= 100) {
    $grade = "A";
    } elseif ($rata <= 90) {
    $grade = "B";
    } elseif ($rata <= 80) {
    $grade = "C";
    } elseif ($rata <= 75) {
    $grade = "D";
    } elseif ($rata <= 60 && $rata >= 0) {
    $grade = "E";
    } else {
    $grade = "Tidak ada nilai!";
        
    }
    
    echo "<center>";
    echo "<h3>Laporan Penilaian</h3>";
    echo "<h3>Hasil Akhir Penilaian Satu Semester</h3>";
    echo "<br>";
    echo "
    <table >

        <tr>
            <td>NIS</td>
            <td>$nis <br></td>
        </tr>

        <tr>
            <td>Nama Siswa</td>
            <td>$nama <br></td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td>$kls - $jurusan <br></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>$jk <br></td>
        </tr>

        <th></th>

        <tr>
            <td></td>
            <td><br></td>
        </tr>

        <tr>
            <td>Nilai Tugas 1</td>
            <td>$tgs1 ($t1) <br></td>
        </tr>

        <tr>
            <td>Nilai Tugas 2</td>
            <td>$tgs2 ($t2) <br></td>
        </tr>

        <tr>
            <td>Nilai Tugas 3</td>
            <td>$tgs3 ($t3) <br></td>
        </tr>

        <tr>
            <td>Nilai UTS</td>
            <td>$uts ($t4) <br></td>
        </tr>

        <tr>
            <td>Nilai UAS</td>
            <td>$uas ($t5) <br></td>
        </tr>

        <tr>
            <td></td>
            <td><br></td>
        </tr>

        <tr>
            <td><b>Nilai Rata-rata</b></td>
            <td><b>$rata - $grade ($t6) </b><br></td>
        </tr>
    </table>
    
    <br>";
    echo "</fieldset>";
}
?>