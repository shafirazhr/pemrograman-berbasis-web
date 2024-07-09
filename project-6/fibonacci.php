
<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci</title>
</head>
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
<body style="background-color:grey;">
	<center><h1> || Fibonacci ||</h1>
	<div class="table">   
	<table>
		<form method="post">
		<div id="label">
			<label >Masukkan Bilangan:
			<input type="number" name="bilangan" min="0" max="100">
		<input type="submit" name="Tampilkan" value="Tampilkan">
		<a href="Tugas6.php">Kembali</a>
		</form></label></div><br>
	</table></label></center>
	<div class= "output">
	<?php
	error_reporting(0);
		if (isset($_POST['Tampilkan'])) {
			$bilangan = $_POST['bilangan'];
			$a = 0;
			$b = 1;

			echo "Bilangan fibbonaci dari $bilangan adalah";

			for ($i = 0; $i < $bilangan; $i++) {
				echo "</br>";
				echo $a . "";

				$temp = $a + $b;
				$a = $b;
				$b = $temp;
			}
		}
	?></div>
</body>
</html>
