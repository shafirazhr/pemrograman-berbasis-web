<!DOCTYPE html>
<html>
<head>
	<title>Faktorial</title>
</head>
<body>
<style>
@media screen and (max-width: 600px) {
    }
table{
        background-color: silver;
        padding: 1px;}
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
	<center><h1> || Faktorial ||</h1>
	<div class="table">   
	<table>
		<form method="post">
		<div id="label">
			<label >Masukkan Angka:
			<input type="number" name="angka" min="1" max="100">
			<input type="submit" name="Hitung" value="Hitung">
			<a href="Tugas6.php">Kembali</a>
		</form></label></div><br>
	</table></label></center>
	<br>
<div class= "output">
<?php
	error_reporting(0);
	if (isset($_POST['Hitung'])) {
		$angka = $_POST["angka"];
		$hasil = 1;
		for ($i = 1; $i <= $angka; $i++){
			$hasil *= $i;
		}
		echo " hasil faktorial dari $angka! = $hasil";
	}
?></div>
</body>
</html>