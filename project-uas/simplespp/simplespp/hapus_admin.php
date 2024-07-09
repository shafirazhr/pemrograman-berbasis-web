<?php
session_start();
if(isset($_SESSION['login'])){
	include "koneksi.php";
	$hapus = mysqli_query($konek, "DELETE FROM admin WHERE idadmin='$_GET[id]'");

	if ($hapus) {
			header('location:tampil_admin.php');
		}else{
			echo "Hapus data gagal<br>
			<a href='tampil_admin.php'><<<  Kembali</a>";

   }
}else{
	echo "Anda tidak meiliki akses ke halaman ini!!!";
}
?>