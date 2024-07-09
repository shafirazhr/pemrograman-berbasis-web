<?php include 'header.php'; ?>
<div class="container">
	<div class="page-header">
		<h3>Tambah Data Admin</h3>
	</div>
<form method="post" action="">
	<table class="table">
		<tr>
			<td width="150px">Username</td>
			<td><input class="form-control" type="text" name="username" placeholder="Masukan Username"></td>
		</tr>
		<tr>
			<td width="150px">Password</td>
			<td><input class="form-control" type="password" name="password" placeholder="Masukan Password"></td>
		</tr>
		<tr>
			<td width="150px">Nama Lengkap</td>
			<td><input class="form-control" type="text" name="namalengkap" placeholder="Masukan Nama Lengkap"></td>
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
	$username = $_POST['username'];
	$password = $_POST['password'];
	$namalengkap = $_POST['namalengkap'];
	$password_encrypted = md5($password);

	$ambil = mysqli_query($konek, "SELECT * FROM admin WHERE username='$username'");

	$akunyangcocok = $ambil->num_rows;
	if ($akunyangcocok>0|| $username==''|| $password==''|| $namalengkap==''){
		echo "Form Failed!!!";
	}else {
		$simpan = mysqli_query($konek, "INSERT INTO admin(username,password,namalengkap) VALUES ('$username','$password_encrypted','$namalengkap')");
		
	    if (!$simpan) {
			echo "Simpan data gagal!!!";
			
		}else{
			header('location:tampil_admin.php');
	    }
	}
}
?>

<?php include 'footer.php'; ?>