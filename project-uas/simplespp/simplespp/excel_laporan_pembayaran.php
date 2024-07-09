<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_pembayaran.xls");
	include "koneksi.php";
?>


<h3><strong><center>SMK KRIAN 1 SIDOARJO<br>Laporan Data Pembayaran SPP</center></strong></h3>
<table border="1" width="100%" cellspacing="0" cellpadding="4">
	<tr>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>No. Bayar</th>
		<th>Pembayaran Bulan</th>
		<th>Keterangan</th>
		<th>Jumlah</th>
		<th>Tgl. Pembayaran</th>
	</tr>
	<?php
	$sqlBayar = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas 
									FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa 
									WHERE tglbayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]' 
									ORDER BY nobayar ASC");
	$no=1;
	$total = 0;
 	while($d = mysqli_fetch_array($sqlBayar)){
    echo "<tr>
 	 	<td align='center'>$no</td>
 	 	<td align='center'>$d[nis]</td>
 	 	<td>$d[namasiswa]</td>
 	 	<td align='center'>$d[kelas]</td>
 	 	<td align='center'>$d[nobayar]</td>
 	 	<td>$d[bulan]</td>
 	 	<td align='center'>$d[ket]</td>
 	 	<td align='right'>$d[jumlah]</td>
 	 	<td align='center'>$d[tglbayar]</td>
 	    </tr>";
 	 $no++;
 	 $total += $d['jumlah'];
 	}
	?>
	<tr>
		<td colspan="7" align="right"><b>Total</b></td>
		<td align="right"><b><?php echo $total; ?></b></td>
		<td></td>
	</tr>
</table><br><br><br>

<table align="left" width="100%">
	<tr>
		<td></td>
		<td width="200">
			<p>Krian, <?php echo date('d/m/Y'); ?><br>
			Operator,</p>
			<br>
			<br>
			<p>_______________________</p>
		</td>
	</tr>
</table>



