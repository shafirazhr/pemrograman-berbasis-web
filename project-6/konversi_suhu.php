<!DOCTYPE html>
<html>
<head>
	<title>Konversi Suhu</title>
</head>
<body>
<style>
@media screen and (max-width: 600px) {
    }
label {
  font-size: 16px;
  margin-top: 5px;
  padding: 8px;
  border: 2px solid #333;
  border-radius: 3px;
  margin-top: 13px;
  text-align: center;
  background: darkgrey;
}
.output {
  font-size: 15px;
  font-weight: bold;
  text-align: center;
  margin-top: 2px;
  background-color: #B0C4DE;
  padding: 40px;
  text-align: center;
}
</style>
<body style="background-color:grey;">.
	<center><h1> || Konversi Suhu ||</h1>
	<div class="table">    
    <table>
		<form method="post">
			<div id="label">
			<label >Masukkan Suhu:
			<input type="number" name="suhu" min="1" max="100"> </label> <br><br>
			<select name="SatuanAsal">
    		<option selected disabled hidden>Pilih_Suhu</option>
				<option value="celcius">Celcius</option>
				<option value="farenheit">Farenheit</option>
				<option value="kelvin">Kelvin</option>
				<option value="reamur">Reamur</option>
			</select></label></div><br>
			<input type="submit" name="submit" value="Convert">
			<a href="Tugas6.php">Kembali</a>
	</form></table></div>
	<div class= "output" >
		<?php
		error_reporting(0);
		if (isset($_POST['submit'])) {
			$suhu = $_POST['suhu'];
			$SatuanAsal = $_POST['SatuanAsal'];

			if(empty($_POST['suhu'])) {
				echo "Kolom tidak boleh kosong!";
			}
			if(empty($_POST['SatuanAsal'])) {
				echo "Harap pilih satuan suhu!";
			}

        
			if ($SatuanAsal == 'celcius') {
					echo "<p> Hasil konversi suhu dari " .$suhu. " celcius adalah: ";
					$farenheit = ($suhu * 9/5) + 32;
					echo "<p>Hasil konversi: " . $farenheit . " Farenheit</p>";
					$reamur = ($suhu * 4/5);
					echo "<p>Hasil konversi: " . $reamur . " Reamur</p>";
					$kelvin = $suhu + 273 ;
					echo "<p>Hasil konversi: " . $kelvin . " Kelvin</p>";
				}
			if ($SatuanAsal == 'farenheit') {
					echo "<p> Hasil konversi suhu dari " .$suhu. " farenheit adalah: ";
					$celcius = ($suhu - 32) * 5/9;
					echo "<p>Hasil konversi: " . $celcius . " Celcius</p>";
					$kelvin = 5/9 * ($suhu + 32) + 273;
					echo "<p>Hasil konversi: " . $kelvin . " Kelvin</p>";
					$reamur = ($suhu - 32) * 4/9;
					echo "<p>Hasil konversi: " . $reamur . " Reamur</p>";
				}
			if ($SatuanAsal == 'reamur') {
					echo "<p> Hasil konversi suhu dari " .$suhu. " reamur adalah: ";
					$celcius = ($suhu * 5/4);
					echo "<p>Hasil konversi: " . $celcius . " Celcius</p>";
					$farenheit = ($suhu * 9/4) + 32;
					echo "<p>Hasil konversi: " . $farenheit . " Farenheit</p>";
					$kelvin = ($suhu * 5/4)+273;
					echo "<p>Hasil konversi: " . $kelvin . " Kelvin</p>";
			}
			if ($SatuanAsal == 'kelvin') {
					echo "<p> Hasil konversi suhu dari " .$suhu. " celcius adalah: ";
					$suhu = ($suhu - 273);
					echo "<p>Hasil konversi: " . $suhu . " Celcius</p>";
					$suhu = 9/5 * ($suhu - 273) + 32;
					echo "<p>Hasil konversi: " . $suhu . " Farenheit</p>";
					$suhu = ($suhu-273)*4/5;
					echo "<p>Hasil konversi: " . $suhu . " Reamur</p>";
				}
			}
?></div>
</body>
</html>