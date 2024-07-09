<?php
session_start();
if(isset($_SESSION['login'])){
	include "koneksi.php";

	if($_GET['act']=='bayar') {

		$idspp = $_GET['id'];
		$namasiswa = $_GET['namasiswa'];

		$today = date("ymd");
		$query = mysqli_query($konek, "SELECT max(nobayar) AS last FROM spp WHERE nobayar LIKE '$today%'");
		$data = mysqli_fetch_array($query);
		$lastNoBayar = $data['last'];
		$lastNoUrut =substr($lastNoBayar, 6, 4);
		$nextNoUrut = $lastNoUrut + 1;
		$nextNoBayar = $today.sprintf('%04s', $nextNoUrut);

		$tglBayar = date('Y-m-d');

		$admin = $_SESSION['id'];

		mysqli_query($konek, "UPDATE spp SET nobayar='$nextNoBayar', tglbayar='$tglBayar', ket='LUNAS', idadmin='$admin' WHERE idspp='$idspp'");

		header('location:transaksi.php?namasiswa='.$namasiswa);

	}
	elseif($_GET['act']=='batal') {
		
		$idspp = $_GET['id'];
		$namasiswa = $_GET['namasiswa'];

		mysqli_query($konek, "UPDATE spp SET nobayar=null, tglbayar=null, ket=null, idadmin=null WHERE idspp='$idspp'");

		header('location:transaksi.php?namasiswa='.$namasiswa);
	}
	if($_GET['act']=='bayar1') {

		$idnonspp = $_GET['id'];
		$namasiswa = $_GET['namasiswa'];

		$today = date("ymd");
		$query = mysqli_query($konek, "SELECT max(nobayar) AS last FROM nonspp WHERE nobayar LIKE '$today%'");
		$data = mysqli_fetch_array($query);
		$lastNoBayar = $data['last'];
		$lastNoUrut =substr($lastNoBayar, 6, 4);
		$nextNoUrut = $lastNoUrut + 1;
		$nextNoBayar = $today.sprintf('%04s', $nextNoUrut);

		$tglBayar = date('Y-m-d');

		$admin = $_SESSION['id'];

		mysqli_query($konek, "UPDATE nonspp SET nobayar='$nextNoBayar', tglbayar='$tglBayar', ket='LUNAS', idadmin='$admin' WHERE idnonspp='$idnonspp'");

		header('location:transaksi.php?namasiswa='.$namasiswa);

	}
	elseif($_GET['act']=='batal1') {
		
		$idnonspp = $_GET['id'];
		$namasiswa = $_GET['namasiswa'];

		mysqli_query($konek, "UPDATE nonspp SET nobayar=null, tglbayar=null, ket=null, idadmin=null WHERE idnonspp='$idnonspp'");

		header('location:transaksi.php?namasiswa='.$namasiswa);
	}
}
?>