<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian</title>
</head>
<body>
    <form action="rapot.php" method="post" name="input">
        <h3>Program Penilaian</h3>
        <h2>Laporan Hasil Penilaian Satu Semester</h2> <br>
        
        <table>

        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis" required> <br></td>
        </tr>

        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama" required> <br></td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
            <select name="kelas" id="">
                <option name="kelas" value="">Kelas</option>
                <option name="kelas" value="X">X</option>
                <option name="kelas" value="XI">XI</option>
                <option name="kelas" value="XII">XII</option>
            </select> 

            <select name="jurusan" id="">
                <option name="jurusan" value="">Jurusan</option>
                <option name="jurusan" value="RPL 1">RPL 1</option>
                <option name="jurusan" value="RPL 2">RPL 2</option>
                <option name="jurusan" value="RPL 3">RPL 3</option>
            </select>
            <br></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jk" value="Laki-laki" checked> Laki-laki  
            <input type="radio" name="jk" value="Perempuan" checked> Perempuan <br>
            </td>
        </tr>

        <tr>
            <td>Nilai Tugas 1</td>
            <td>:</td>
            <td><input type="number" name="tgs1" id="" min="0" max="100" required> <br></td>
        </tr>

        <tr>
            <td>Nilai Tugas 2</td>
            <td>:</td>
            <td><input type="number" name="tgs2" id="" min="0" max="100"  required> <br></td>
        </tr>

        <tr>
            <td>Nilai Tugas 3</td>
            <td>:</td>
            <td><input type="number" name="tgs3" id="" min="0" max="100"  required> <br></td>
        </tr>

        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><input type="number" name="uts" id="" min="0" max="100"  required> <br></td>
        </tr>

        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><input type="number" name="uas" id="" min="0" max="100"  required> <br></td>
        </tr>

        </table>
        
        <input type="reset" value="Reset">
        <input type="submit" name="Kirim" value="Kirim">
    </form>
</body>
</html>