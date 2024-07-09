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

    <title>Cetak Laporan Pembayaran</title>

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
<h3><strong><center>SMK KRIAN 1 SIDOARJO<br>Laporan Data Pembayaran</center></strong></h3>
<hr>
<p>Tanggal : <?php echo $_GET['tgl1']." sampai ".$_GET['tgl2']; ?></p>
<table class="table table-bordered table-striped">
	<tr>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>No. Bayar</th>
		<th>Pembayaran</th>
		<th>Keterangan</th>
		<th>Jumlah</th>
		<th>Tgl. Pembayaran</th>
	</tr>
	<?php
	$sqlBayarspp = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas 
									FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa 
									WHERE tglbayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]' 
									ORDER BY nobayar ASC");
	$no=1;
	$totalspp = 0;
 	while($d = mysqli_fetch_array($sqlBayarspp)){
    echo "<tr>
 	 	<td width='40px' align='center'>$no</td>
 	 	<td>$d[nis]</td>
 	 	<td>$d[namasiswa]</td>
 	 	<td>$d[kelas]</td>
 	 	<td>$d[nobayar]</td>
 	 	<td>$d[bulan]</td>
 	 	<td>$d[ket]</td>
 	 	<td>$d[jumlah]</td>
 	 	<td>$d[tglbayar]</td>
 	    </tr>";
 	 $no++;
 	 $totalspp += $d['jumlah'];
 	}

 	?>
	<?php
	$sqlBayarnonspp = mysqli_query($konek, "SELECT nonspp.*,siswa.nis,siswa.namasiswa,siswa.kelas 
									FROM nonspp INNER JOIN siswa ON nonspp.idsiswa=siswa.idsiswa 
									WHERE tglbayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]' 
									ORDER BY nobayar ASC");
	
	$totalnonspp = 0;
 	while($d = mysqli_fetch_array($sqlBayarnonspp)){
    echo "<tr>
 	 	<td width='40px' align='center'>$no</td>
 	 	<td>$d[nis]</td>
 	 	<td>$d[namasiswa]</td>
 	 	<td>$d[kelas]</td>
 	 	<td>$d[nobayar]</td>
 	 	<td>$d[kategori]</td>
 	 	<td>$d[ket]</td>
 	 	<td>$d[jumlah]</td>
 	 	<td>$d[tglbayar]</td>
 	    </tr>";
 	$no++;
 	 $totalnonspp += $d['jumlah'];
 	}
	?>

	<tr>
		<td colspan="7" align="right"><b>Total</b></td>
		<td colspan="2" align="left"><b><?php echo $totalspp+$totalnonspp; ?></b></td>

	</tr>
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
<a href="excel_laporan_pembayaran.php?tgl1=<?php echo $_GET['tgl1']; ?>&tgl2=<?php echo $_GET['tgl2']; ?>" class="btn btn-primary" 
	id="no-print" target="_blank">Export ke Excel</a>
</body>
</html>

<?php 	
}else{
	header('location:login.php');
}
?>