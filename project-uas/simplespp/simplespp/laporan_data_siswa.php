<?php
session_start();
if(isset($_SESSION['login'])){
	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/favicon.png">

    <title>Cetak Laporan Data Siswa</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="./assets/style.css" rel="stylesheet">
	<style type="text/css">
		body{
			font-family: Arial;
		}
		@media print{
			#no-print{
				display: none;
			}
		}

		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<h3><strong><center>SMK KRIAN 1 SIDOARJO<br>Laporan Data Siswa</center></strong></h3>
<hr>
<table class="table table-bordered table-striped">
	<tr>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Tahun Ajaran</th>
	</tr>
	<?php
	$sqlSiswa = mysqli_query($konek, "SELECT * FROM siswa ORDER BY idsiswa ASC");
	$no=1;
 	while($d = mysqli_fetch_array($sqlSiswa)){
    echo "<tr>
 	 	<td width='40px' align='center'>$no</td>
 	 	<td>$d[nis]</td>
 	 	<td>$d[namasiswa]</td>
 	 	<td>$d[kelas]</td>
 	 	<td>$d[tahunajaran]</td>
 	    </tr>";
 	 $no++;
 	}
	?>
</table>

<table width="100%">
	<tr>
		<td></td>
		<td width="200">
			<center>
				<p>Krian, <?php echo date('d/m/Y'); ?><br>
				Petugas,</p>
				<br>
				<br>
				<p>_______________________</p>
			</center>
		</td>
	</tr>
</table>

<a href="#" class="btn btn-success" id="no-print" onclick="window.print();">Cetak/Print</a> 
<a href="excel_laporan_data_siswa.php" class="btn btn-primary" 
	id="no-print" target="_blank">Export ke Excel</a>
</body>
</html>

<?php 	
}else{
	header('location:login.php');
}
?>