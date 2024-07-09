<?php include 'header.php'; ?>
<div class="container">
	<div class="page-header">
	<h3>Data Admin</h3>
	</div>
<a class="btn btn-primary" style="margin-bottom: 15px" href="tambah_admin.php">Tambah Data</a>
<table class="table table-bordered table-striped">
 	<tr>
 		<th>No.</th>
 		<th>Username</th>
 		<th>Nama Lengkap</th>
 		<th>Aksi</th>
 	</tr>
<?php
	$sql = mysqli_query($konek, "SELECT * FROM admin ORDER BY idadmin ASC");	
 	$no=1;
 	while($d = mysqli_fetch_array($sql)){
    echo "<tr>
 	 	<td width='40px' align='center'>$no</td>
 	 	<td>$d[username]</td>
 	 	<td>$d[namalengkap]</td>
 	 	<td width='150px' align='center'>
 	 		<a class='btn btn-warning btn-sm' href='edit_admin.php?id=$d[idadmin]'>Edit</a>
 	 		<a class='btn btn-danger btn-sm' href='hapus_admin.php?id=$d[idadmin]'>Hapus</a>
 	 	</td>
 	    </tr>";
 	 $no++;
     }
 	?>
</table>
</div>

<?php include 'footer.php'; ?>