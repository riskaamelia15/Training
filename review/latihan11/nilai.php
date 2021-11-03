
<html>
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

input[type=text] {
    border: none;
    background-color: #D6EEEE;
}

input[type=submit] {
    background-color: #96D4D4;
    border: none;
    padding: 10px 20px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10px;
}
</style>

<title>Input Nilai</title>
</head>

<body>

<form action="cetak.php" method="post">

<table style="width:100%">
<caption>
    <h3>Form Cetak Nilai Siswa</h3>
    <h3>SMK ASSALAAM BANDUNG</h3>
    <h4>Tahun 2021/2022</h4>
</caption>

    <tr>
        <td colspan="3">
            Name:
            <input type="text" name="nama" style="border-radius: 10px;">
        </td>
    </tr>
    <tr>
        <td colspan="3">
            NIS:
            <input type="text" name="nis" style="border-radius: 10px;">
        </td>
    </tr>

    <tr>
    <th>No</th>
    <th style="width:90%">Mata Pelajaran</th> 
    <th>Nilai</th>
    </tr>

    <?php 
    $mapel = array(
    "Pendidikan Agama Islam",
    "PPKN",
    "Bahasa Indonesia",
    "Matematika",
    "Bahasa Inggris",
    "Produk Kreatif dan Kewirausahaan",
    "Al-Qur'an",
    "Bimbingan Konseling",
    "Produktif RPL",
    "Produktif TKJ",
    ); ?>

    <tr>
    <td>1</td>
    <td><?= $mapel[0] ?></td>
    <td><input type="text" name="n1" size="2" style="border-radius: 10px;"></td>
    </tr>

    <tr>
    <td>2</td>
    <td><?= $mapel[1] ?></td>
    <td><input type="text" name="n2" size="2" style="border-radius: 10px;"></td>
    </tr>

    <tr>
    <td>3</td>
    <td><?= $mapel[2] ?></td>
    <td><input type="text" name="n3" size="2" style="border-radius: 10px;"></td>
    </tr>

    <tr>
    <td>4</td>
    <td><?= $mapel[3] ?></td>
    <td><input type="text" name="n4" size="2" style="border-radius: 10px;"></td>
    </tr>

    <tr>
    <td>5</td>
    <td><?= $mapel[4] ?></td>
    <td><input type="text" name="n5" size="2" style="border-radius: 10px;"></td>
    </tr>

    <tr>
    <td>6</td>
    <td><?= $mapel[5] ?></td>
    <td><input type="text" name="n6" size="2" style="border-radius: 10px;"></td>
    </tr>

    <tr>
    <td>7</td>
    <td><?= $mapel[6] ?></td>
    <td><input type="text" name="n7" size="2" style="border-radius: 10px;"></td>
    </tr>

    <tr>
    <td>8</td>
    <td><?= $mapel[7] ?></td>
    <td><input type="text" name="n8" size="2" style="border-radius: 10px;"></td>
    </tr>

    <tr>
    <td>9</td>
    <td><?= $mapel[8] ?></td>
    <td><input type="text" name="n9" size="2" style="border-radius: 10px;"></td>
    </tr>

    <tr>
    <td>10</td>
    <td><?= $mapel[9] ?></td>
    <td><input type="text" name="n0" size="2" style="border-radius: 10px;"></td>
    </tr>

</table>
<center>
    <input type="submit" name="Cetak" value="Cetak Nilai">
</center>
</form>
</body>
</html>
