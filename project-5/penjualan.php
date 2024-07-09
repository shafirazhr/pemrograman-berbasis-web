<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penjualan</title>
</head>
<style>
    @media screen and (max-width: 600px) {
    }
    .header { 
        background-color: lightslategray;
        padding: 20px; 
        text-align: center;}
    .table{
        background-color: silver;
        padding: 30px;}
    .hasil{
        background-color: #B0C4DE;
        padding: 40px;
        text-align: center;}
</style>
<body>
<form name="form" method="post" action="penjualan.php">
            <div class="header">
                <h1>Form Penjualan</h1>
            </div>
        <div class="table">    
        <table>
            <tr>
            <td><label for="NamaPembeli">Nama Pembeli:</label>
		    <input type="text" name="NamaPembeli" id="NamaPembeli"></td>
            </tr>
            <tr>
            <td><label for="NamaBarang">Nama Barang:</label>
		    <input type="text" name="NamaBarang" id="NamaBarang"></td>
            </tr>
            <tr>
            <td><label for="HargaBarang">Harga Barang:</label>
		    <input type="text" name="HargaBarang" id="HargaBarang"></td>
            </tr>
            <tr>
            <td><label for="JumlahBarang">Jumlah Barang:</label>
		    <input type="text" name="JumlahBarang" id="JumlahBarang"></td>
            </tr>
            <tr>
            <td><button type="submit" name="Beli">Beli</button>
            <button type="submit" name="kosongkan">Kosongkan</button></td>
            </tr>
        </table></div>
    </form>
    
    <div class="hasil">
    <?php
    if(isset($_POST['Beli'])){
        $NamaPembeli = $_POST ['NamaPembeli'];
        $NamaBarang = $_POST['NamaBarang'];
        $HargaBarang = $_POST['HargaBarang'];
        $JumlahBarang = $_POST['JumlahBarang'];

        $TotalHarga = $HargaBarang * $JumlahBarang ;
        $Diskon = 0;
        $Bonus = "";
        if($TotalHarga >= 2000000){
            $Diskon = 0.1 * $TotalHarga ;
            $Bonus = "Voucher cashback 100.000";
        } elseif($TotalHarga >= 200000){
            $Diskon = 0.05 * $TotalHarga ;
            $Bonus = "voucher cashback 10000";
        }
        $TotalBayar = $TotalHarga - $Diskon;

            echo "<h2>NOTA PENJUALAN </h2>";
			echo "<br><br>";
            echo "<b>Nama Pembeli</b>:  $NamaPembeli <br>";
            echo "<b>Nama Barang</b>: $NamaBarang <br>";
			echo "<b>Harga Barang</b>: $HargaBarang <br>";
			echo "<b>Jumlah Barang</b>: $JumlahBarang <br>";
			echo "<b>Total Harga</b>: $TotalHarga <br>";
			echo "<b>Diskon</b>: $Diskon <br>";
			echo "<b>Total Bayar</b>: $TotalBayar <br>";
			echo "<b>Bonus</b>: $Bonus";

    } elseif(isset($_POST['kosongkan'])){
		exit();
	}
?></div>
</body>
</html>

