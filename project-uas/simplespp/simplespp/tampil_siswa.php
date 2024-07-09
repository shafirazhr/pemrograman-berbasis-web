<?php include 'header.php'; ?>
<div class="container">
	<div class="page-header">
		<h3>Data Siswa</h3>
	</div>
<a class="btn btn-primary" style="margin-bottom: 15px" href="tambah_siswa.php">Tambah Data</a>
		<form action="tampil_siswa.php" method="get" class="navbar-form navbar-right">
			<input type="text" class="form-control" name="keyword">
			<button class="btn btn-primary">Cari</button>
		</form>
<table class="table table-bordered table-striped">
 	<tr>
 		<th>No.</th>
 		<th>NIS</th>
 		<th>Nama Siswa</th>
 		<th>Kelas</th>
 		<th>Tahun Ajaran</th>
 		<th>Aksi</th>
 	</tr>
<?php
	if(isset($_GET["keyword"])){
		$keyword = $_GET["keyword"];
		$query = "SELECT * FROM siswa WHERE namasiswa LIKE '%$keyword%' OR nis LIKE '%$keyword%' ORDER BY kelas ASC";
	}else{
		$query = "SELECT * FROM siswa ORDER BY kelas ASC";
	}
	$sql = mysqli_query($konek, $query);	
 	$no=1;
 	while($d = mysqli_fetch_array($sql)){
    echo "<tr>
 	 	<td width='40px' align='center'>$no</td>
 	 	<td>$d[nis]</td>
 	 	<td>$d[namasiswa]</td>
 	 	<td>$d[kelas]</td>
 	 	<td>$d[tahunajaran]</td>
 	 	<td width='250px' align='center'>
 	 		<a class='btn btn-warning btn-sm' href='edit_siswa.php?id=$d[idsiswa]'>Edit</a>
 	 		<a class='btn btn-danger btn-sm' href='hapus_siswa.php?id=$d[idsiswa]'>Hapus data Siswa</a>
 	 	</td>
 	    </tr>";
 	 $no++;
     }
 	?>
</table>
</div>

<?php include 'footer.php'; ?>