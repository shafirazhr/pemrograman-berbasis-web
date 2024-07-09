<?php include 'header.php'; ?>

<?php
$sqlEdit = mysqli_query($konek, "SELECT * FROM admin WHERE idadmin='$_GET[id]'");
$e = mysqli_fetch_array($sqlEdit);
?>
<div class="container">
	<div class="page-header">
		<h3>Edit Data Admin</h3>
	</div>
<form method="post" action="">
	<input type="hidden" name="idadmin" value="<?php echo $e['idadmin']; ?>" >
	<table class="table">
		<tr>
			<td width="150px">Username</td>
			<td><input class="form-control" type="text" name="username" value="<?php echo $e['username']; ?>" ></td>
		</tr>
		<tr>
			<td width="150px">Password</td>
			<td><input class="form-control" type="password" name="password" value="<?php echo $e['password']; ?>" ></td>
		</tr>
		<tr>
			<td width="150px">Nama Lengkap</td>
			<td><input class="form-control" type="text" name="namalengkap" value="<?php echo $e['namalengkap']; ?>" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input class="btn btn-success" type="submit" value="Update"></td>
		</tr>
	</table>
</form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$id   = $_POST['idadmin'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$namalengkap = $_POST['namalengkap'];
	$password_encrypted = md5($password);

	if ($username==''|| $password_encrypted==''|| $namalengkap==''){
		echo "Form belum lengkap!!!";
	}else {
		$edit = mysqli_query($konek, "UPDATE admin SET username='$username', password='$password_encrypted', namalengkap='$namalengkap' WHERE idadmin='$id'");
		
	    if (!$edit) {
			echo "Edit data gagal!!!";
			
		}else{
			header('location:tampil_admin.php');
	    }
	}
}
?>

<?php include 'footer.php'; ?>