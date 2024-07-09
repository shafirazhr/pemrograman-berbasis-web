<?php include 'header.php'; ?>
<div class="container">
	<div class="page-header">
		<h3>Tambah Data Kelas dan Walikelas</h3>
    </div>
<form method="post" action="">
	<table class="table">
		<tr>
			<td width="150px">Kelas</td>
			<td><input class="form-control" type="text" name="kelas" maxlength="40" placeholder="Masukan Kelas"></td>
		</tr>
		<tr>
			<td>Pilih Guru / Walikelas</td>
			<td>
				<select class="form-control" name="guru">
				<option value="" selected>- Pilih Guru -</option>
				<?php
				$sqlGuru = mysqli_query($konek, "SELECT * FROM guru ORDER BY idguru ASC");
				while($g = mysqli_fetch_array($sqlGuru)){
					echo "<option value='$g[idguru]'>$g[namaguru]</option>";
				}
				?>	
				</select>
			</td>
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
	$kelas = $_POST['kelas'];
	$guru = $_POST['guru'];

	if ($kelas=='' || $guru==''){
		echo "Form belum lengkap!!!";
	}else {
		$simpan = mysqli_query($konek, "INSERT INTO walikelas(kelas,idguru) VALUES ('$kelas','$guru')");
		
	    if (!$simpan) {
			echo "Simpan data gagal!!!";
			
		}else{
			header('location:tampil_walikelas.php');
	    }
	}
}
?>

<?php include 'footer.php'; ?>