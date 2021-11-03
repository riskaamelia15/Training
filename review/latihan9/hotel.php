<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>

    <form action="outputhotel.php" method="post" name="input">
        <h1>Data Tamu Hotel</h1> <br>
        <table>
        <tr>
            <td>Tanggal Menginap</td>
            <td>:</td>
            <td><input type="date" name="tgl" id=""> <br></td>
        </tr>

        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama" required> <br></td>
        </tr>

        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="text" name="id" required> <br></td>
        </tr>

        <tr>
            <td>Tipe Kamar</td>
            <td>:</td>
            <td><input type="radio" name="kamar" value="Superior" checked> Superior
                <input type="radio" name="kamar" value="Deluxe" checked> Deluxe
                <input type="radio" name="kamar" value="Junior Suite" checked> Junior Suite<br>
            </td>
        </tr>

        <tr>
            <td>Durasi Menginap</td>
            <td>:</td>
            <td><input type="text" name="durasi" required> /Hari <br></td>
        </tr>

        </table>
        
        <input type="reset" value="Reset">
        <input type="submit" name="Pesan" value="Pesan">
    </form>
    
</body>
</html>