<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_pembayaran.xls");
	include "koneksi.php";
?>


<h3><strong><center>SMK KRIAN 1 SIDOARJO<br>Laporan Data Guru</center></strong></h3>
<table border="1" width="100%" cellspacing="0" cellpadding="4">
	<tr>
		<th>No.</th>
		<th>ID</th>
		<th>Nama Guru</th>
	</tr>
	<?php
	$sqlGuru = mysqli_query($konek, "SELECT * FROM guru ORDER BY idguru ASC");
	$no=1;
	$total = 0;
 	while($d = mysqli_fetch_array($sqlGuru)){
    echo "<tr>
 	 	<td align='center'>$no</td>
 	 	<td align='center'>$d[idguru]</td>
 	 	<td>$d[namaguru]</td>
 	    </tr>";
 	 $no++;
 	}
	?>
</table>



