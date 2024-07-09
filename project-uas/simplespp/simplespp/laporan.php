<?php include 'header.php'; ?>
<div class="container">
	<div class="page-header">
		<h3>Laporan</h3>
	</div>
<ul>
	<a class="btn btn-primary" style="margin-right: 300px" href="laporan_data_guru.php" target="_blank">Laporan Data Guru</a>
	<a class="btn btn-primary" style="margin-right: 300px" href="laporan_data_siswa.php" target="_blank">Laporan Data Siswa</a>
	<a class="btn btn-danger" href="laporan_tunggakan.php" target="_blank">Laporan Tunggakan</a>
	<li style="margin-top: 20px">
		<strong>Laporan Pembayaran</strong><br><br>
		<form method="GET" action="laporan_pembayaran.php" target="_blank">
			Mulai tanggal <input class="form-control" type="date" name="tgl1" value="<?php echo date('Y-m-d'); ?>"><br>
			Sampai Tanggal <input class="form-control" type="date" name="tgl2" value="<?php echo date('Y-m-d'); ?>">
			<input class="btn btn-success" style="margin-top: 10px" type="submit" value="Tampilkan">
		</form>
	</li>
</ul>
</div>

<?php include 'footer.php'; ?>