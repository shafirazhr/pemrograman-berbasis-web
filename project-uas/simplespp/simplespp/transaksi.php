<?php include 'header.php'; ?>
<div class="container">
	<div class="page-header">
		<h3>Transaksi Pembayaran Sekolah</h3>
	</div>
<form method="get" action="">
	<table class="table">
		<tr>
			<td><input class="form-control" type="text" name="namasiswa" placeholder="Masukan Nama Siswa"></td>
			<td><input class="btn btn-success" type="submit" value="Cari siswa"></td>
		</tr>
	</table>
</form>

<?php
	if(isset($_GET['namasiswa']) && $_GET['namasiswa']!=''){
		$sqlSiswa = mysqli_query($konek, "SELECT * FROM siswa WHERE namasiswa='$_GET[namasiswa]'");
		$ds = mysqli_fetch_array($sqlSiswa);
		$namasiswa = $ds['namasiswa'];
?>

<h3>Biodata <?php echo $ds['namasiswa']; ?></h3>
<table class="table">
	<tr>
		<td width="100">NIS</td>
		<td width="4">:</td>
		<td><?php echo $ds['nis']; ?></td>
	</tr>
	<tr>
		<td width="100">Nama Siswa</td>
		<td width="4">:</td>
		<td><?php echo $ds['namasiswa']; ?></td>
	</tr>
	<tr>
		<td width="100">Kelas</td>
		<td width="4">:</td>
		<td><?php echo $ds['kelas']; ?></td>
	</tr>
	<tr>
		<td width="100">Tahun Ajaran</td>
		<td width="4">:</td>
		<td><?php echo $ds['tahunajaran']; ?></td>
	</tr>
</table>

<h3>Tagihan SPP <?php echo $ds['namasiswa']; ?></h3>
<table class="table table-bordered table-striped">
 	<tr>
 		<th>No.</th>
 		<th>Bulan</th>
 		<th>Jatuh Tempo</th>
 		<th>No. Bayar</th>
 		<th>Tgl. Bayar</th>
 		<th>Jumlah</th>
 		<th>Keterangan</th>
 		<th>Bayar</th>
 	</tr>
<?php
	$sql = mysqli_query($konek, "SELECT * FROM spp WHERE idsiswa='$ds[idsiswa]' ORDER BY jatuhtempo ASC");	
 	$no=1;
 	while($d = mysqli_fetch_array($sql)){
    echo "<tr>
 	 	<td width='40px' align='center'>$no</td>
 	 	<td>$d[bulan]</td>
 	 	<td>$d[jatuhtempo]</td>
 	 	<td>$d[nobayar]</td>
 	 	<td>$d[tglbayar]</td>
 	 	<td>$d[jumlah]</td>
 	 	<td>$d[ket]</td>
 	 	<td width='150px' align='center'>";
 	 		if($d['nobayar']==''){
 	 			echo "<a class='btn btn-success btn-sm' href='proses_transaksi.php?namasiswa=$namasiswa&act=bayar&id=$d[idspp]'>Bayar</a>";
 	 		}else{
 	 			echo "<a class='btn btn-danger btn-sm' href='proses_transaksi.php?namasiswa=$namasiswa&act=batal&id=$d[idspp]'>Batal</a>
 	 				<a class='btn btn-default' href='cetak_slip_transaksi_spp.php?namasiswa=$namasiswa&id=$d[idspp]'>Cetak</a>";
 	 		}
 	 	echo "</td>
 	    </tr>";
 	 $no++;
     }
 	?>
</table>
<h3>Tagihan Non SPP <?php echo $ds['namasiswa']; ?></h3>
<table class="table table-bordered table-striped">
 	<tr>
 		<th>No.</th>
 		<th>Kategori</th>
 		<th>No. Bayar</th>
 		<th>Tgl. Bayar</th>
 		<th>Jumlah</th>
 		<th>Keterangan</th>
 		<th>Bayar</th>
 	</tr>
<?php
	$sql = mysqli_query($konek, "SELECT * FROM nonspp WHERE idsiswa='$ds[idsiswa]'");	
 	$no=1;
 	while($d = mysqli_fetch_array($sql)){
    echo "<tr>
 	 	<td width='40px' align='center'>$no</td>
 	 	<td>$d[kategori]</td>
 	 	<td>$d[nobayar]</td>
 	 	<td>$d[tglbayar]</td>
 	 	<td>$d[jumlah]</td>
 	 	<td>$d[ket]</td>
 	 	<td width='150px' align='center'>";
 	 		if($d['nobayar']==''){
 	 			echo "<a class='btn btn-success btn-sm' href='proses_transaksi.php?namasiswa=$namasiswa&act=bayar1&id=$d[idnonspp]'>Bayar</a>";
 	 		}else{
 	 			echo "<a class='btn btn-danger btn-sm' href='proses_transaksi.php?namasiswa=$namasiswa&act=batal1&id=$d[idnonspp]'>Batal</a>
 	 				<a class='btn btn-default' href='cetak_slip_transaksi_nonspp.php?namasiswa=$namasiswa&id=$d[idnonspp]'>Cetak</a>";
 	 		}
 	 	echo "</td>
 	    </tr>";
 	 $no++;
     }
 	?>
</table>


<?php
}
?>
<p>Pembayaran Sekolah dilakukan dengan cara mencari Nama Siswa atau NIS melalui form diatas, kemudian proses pembayaran</p>
</div>

<?php include 'footer.php'; ?>