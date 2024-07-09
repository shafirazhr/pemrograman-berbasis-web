<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_pembayaran.xls");
	include "koneksi.php";
?>


<h3><strong><center>SMK KRIAN 1 SIDOARJO<br>Laporan Data Tunggakan</center></strong></h3>
<table border="1" width="100%" cellspacing="0" cellpadding="4">
	<tr>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Tagihan Bulan</th>
		<th>Jumlah Tagihan</th>
		<th>Keterangan</th>
	</tr>
	<?php
	$sqlTagihan = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas 
									FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa 
									WHERE spp.ket is NULL
									ORDER BY siswa.namasiswa ASC");
	$no=1;
	$total = 0;
 	while($d = mysqli_fetch_array($sqlTagihan)){
    echo "<tr>
 	 	<td align='center'>$no</td>
 	 	<td align='center'>$d[nis]</td>
 	 	<td>$d[namasiswa]</td>
 	 	<td align='center'>$d[kelas]</td>
 	 	<td>$d[bulan]</td>
 	 	<td align='right'>$d[jumlah]</td>
 	 	<td align='center'>Belum Dibayar</td>
 	    </tr>";
 	 $no++;
 	 $total += $d['jumlah'];
 	}
	?>
	<tr>
		<td colspan="5" align="right"><b>Total Tagihan</b></td>
		<td align="right"><b><?php echo $total; ?></b></td>
		<td></td>
	</tr>
</table>



