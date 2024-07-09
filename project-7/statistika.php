<!DOCTYPE html>
<html>
<head>
	<title>MEAN, MODUS, MIN, MAX</title>
</head>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #B0C4DE;
  margin: 0;
  padding: 0;
}
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
input{
  font-size: 15px;
  font-weight: bold;
  text-align: center;
  margin-top: 2px;
  background-color: #B0C4DE;
  padding: 40px;
  text-align: center;
}
h2 {
  margin-top: 0;
  font-weight: bold;
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
}
</style>
<body>
	<h2>|| MENCARI HASIL: ||</h2>
	<h2>|| MEAN || MIX || MIN || MODUS ||</h2>
	<form method="post">
    <label >Masukkan Bilangan:
      <input style="width: 50%;" placeholder="1, 2, 3, 4" name="data" type="text/date">
		<input type="submit" name="hitung" value="Hitung">
	</form>
	<?php
	if(isset($_POST['hitung'])){
		$data = explode(",", $_POST['data']); //konversi string menjadi array
		$n = count($data); //hitung jumlah data
		
		$mean = array_sum($data)/$n;
		
		//hitung max dan min
		$max = max($data);
		$min = min($data);
		
		//hitung modus
		$counts = array_count_values($data);
		$modus = array_search(max($counts), $counts);
		
		//tampilkan hasil
		echo "<br>";
		echo "Mean: " . $mean . "<br>";
		echo "Max: " . $max . "<br>";
		echo "Min: " . $min . "<br>";
		echo "Modus: " . $modus;
	}
	?>
</body>
</html>


$nama_array = array (indeks_0 => ”data_0”, indeks_1 => “data_1”, .... , “indeks_n =>
“data_n”);