<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/favicon.png">

    <title>Login</title>

    <style >
    	body{
    		background:url('image/logo.jpg');
    		background-size: cover;
    		background-attachment: fixed; 
    	}
    </style>

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="./assets/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="page-header">
		<h3>Silahkan login menggunakan username dan password Anda</h3>
	</div>
<form method="post" action="">
	<table class="table">
		<tr>
			<td>Username</td>
			<td><input class="form-control" type="text" name="username" placeholder="Masukkan Username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input class="form-control" type="password" name="password" placeholder="Masukkan Password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input class="btn btn-success" type="submit" name="Login" value="Login"></td>
		</tr>
	</table>
</form>
</div>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    
	$username  = $_POST['username'];
	$password  = $_POST['password'];
	$password_encrypted = md5($password);

	if ( $username == '' || $password == ''){
		echo "Form belum lengkap!!!";
	}else {
		include "koneksi.php";
		$sqlLogin = mysqli_query($konek, "SELECT * FROM admin WHERE username ='$username' AND password = '$password_encrypted'");
		$jml = mysqli_num_rows($sqlLogin);
	    $d = mysqli_fetch_array($sqlLogin);
	    if ($jml > 0) {
			session_start();
			$_SESSION['login']    = true;
			$_SESSION['id']		  = $d['idadmin'];
			$_SESSION['username'] = $d['username'];
			header('location:./index.php');
		}else{
			echo "username atau password anda salah";
	    }
	}
}
?>
</body>
</html>
<?php include 'footer.php'; ?>