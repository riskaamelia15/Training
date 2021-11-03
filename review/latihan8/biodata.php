<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
</head>
<body>

    <form action="outputbio.php" method="post" name="input">
        <h1>BIODATA</h1> <br>
        <table>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis" required> <br></td>
        </tr>

        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama" required> <br></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="radio" name="jurusan" value="T.Informatika" checked> T.Informatika 
                <input type="radio" name="jurusan" value="T.Elektro" checked> T.Elektro
                <input type="radio" name="jurusan" value="T.Sipil" checked> T.Sipil<br>
            </td>
        </tr>

        <tr>
            <td>Tempat dan Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat" required>
                <select name="tgl" id=""> 
                    <option value="tgl">Tgl</option>
                    <?php
                    for ($i=1; $i <= 31; $i++) { 
                        echo "<option> $i </option>";
                    }
                    ?>
                </select>
                <select name="bln" id="">
                    <option value="bln">Bln</option>
                    <option value="bln">Jan</option>
                    <option value="bln">Feb</option>
                    <option value="bln">Mar</option>
                    <option value="bln">Apr</option>
                    <option value="bln">Mei</option>
                    <option value="bln">Jun</option>
                    <option value="bln">Jul</option>
                    <option value="bln">Agu</option>
                    <option value="bln">Sep</option>
                    <option value="bln">Nov</option>
                    <option value="bln">Okt</option>
                    <option value="bln">Des</option>
                </select>
                <select name="thn" id="">
                    <option value="thn">Thn</option>
                    <?php
                    for ($i=1990; $i <= 2021; $i++) { 
                        echo "<option> $i </option>";
                    }
                    ?>
                </select> <br>
            </td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jk" value="Laki-laki" checked> Laki-laki  
                <input type="radio" name="jk" value="Perempuan" checked> Perempuan <br>
            </td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea type="text" name="alamat" value="alamat" rows="5"></textarea><br>
            </td>
        </tr>

        </table>
        
        <input type="reset" value="Reset">
        <input type="submit" name="Kirim" value="Kirim">
    </form>
    
</body>
</html>