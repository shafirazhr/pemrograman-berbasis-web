<?php include 'header.php'; ?>
<div class="container">
	<div class="page-header">
		<h3>Tambah Data Guru</h3>
	</div>
<form method="post" action="">
	<table class="table">
		<tr>
			<td width="150px">Nama Guru</td>
			<td><input class="form-control" type="text" name="namaguru" placeholder="Masukan Nama Guru"></td>
		</tr>
		<tr>
			<td></td>
			<td><input class="btn btn-success" type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$nama = $_POST['namaguru'];

	if ($nama==''){
		echo "Form belum lengkap!!!";
	}else {
		$simpan = mysqli_query($konek, "INSERT INTO guru(namaguru) VALUES ('$nama')");
		
	    if (!$simpan) {
			echo "Simpan data gagal!!!";
			
		}else{
			header('location:tampil_guru.php');
	    }
	}
}
?>

<?php include 'footer.php'; ?>