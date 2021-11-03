<html>
<head>
	<title>Membuat Perhitungan Bangun Datar Sederhana Dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$operasi = $_POST['operasi'];
        $phi = 22/7;
		switch ($operasi) {
			case 'keliling':
				$hasil = $phi * ($bil1 + $bil1);
			break;
			case 'luas':
				$hasil = $phi * $bil1 * $bil1;
			break;		
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">Lingkaran</h2>
		<form method="post" action="lingkaran.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Angka">
			<select class="opt" name="operasi">
                <option value="keliling">Keliling</option>
				<option value="luas">Luas</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>