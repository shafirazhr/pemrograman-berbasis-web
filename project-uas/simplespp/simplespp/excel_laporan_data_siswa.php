<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_pembayaran.xls");
	include "koneksi.php";
?>


<h3><strong><center>SMK KRIAN 1 SIDOARJO<br>Laporan Data Siswa</center></strong></h3>
<table border="1" width="100%" cellspacing="0" cellpadding="4">
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
 	 	<td align='center'>$no</td>
 	 	<td align='center'>$d[nis]</td>
 	 	<td>$d[namasiswa]</td>
 	 	<td align='center'>$d[kelas]</td>
 	 	<td align='center'>$d[tahunajaran]</td>
 	    </tr>";
 	 $no++;
 	}
	?>
</table>



