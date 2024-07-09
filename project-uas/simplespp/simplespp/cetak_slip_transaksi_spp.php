<?php
session_start();
if(isset($_SESSION['login'])){
	include "koneksi.php";
?>

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

    <title>Cetak Laporan Pembayaran SPP</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="./assets/style.css" rel="stylesheet">
	<style type="text/css">
        
        {
            margin:0;
            padding:0;
            font-family: arial;
            font-size:6pt;
            color:#000;
        }
        body
        {
            width:100%;
            font-family: arial;
            font-size:6pt;
            margin:0;
            padding:0;
        }
         
        p
        {
            margin:0;
            padding:0;
            margin-left: 0px;
        }
         
        #wrapper
        {
            width:44mm;
            margin:0 0mm;
        }
        
        #main {
    float:left;
    width:0mm;
    background:#ffffff;
    padding:0mm;
}
 
#sidebar {
    float:right;
    width:0mm;
    background:#ffffff;
    padding:0mm;
} 
         
        .page
        {
            height:200mm;
            width:44mm;
            page-break-after:always;
        }
 
        table
        {
            /** border-left: 1px solid #fff;
            border-top: 1px solid #fff; **/
            font-family: arial; 
            border-spacing:0;
            border-collapse: collapse; 
             
        }
         
        table td 
        {
            /**border-right: 1px solid #fff;
            border-bottom: 1px solid #fff;**/
            padding: 2mm;
            
        }
         
        table.heading
        {
            height:0mm;
            margin-bottom: 1px;
        }
         
        h1.heading
        {
            font-size:6pt;
            color:#000;
            font-weight:normal;
            font-style: italic;
            
            
        }
         
        h2.heading
        {
            font-size:6pt;
            color:#000;
            font-weight:normal;
        }
         
        hr
        {
            color:#ccc;
            background:#ccc;
        }
         
        #invoice_body
        {
            height: auto;
        }
         
        #invoice_body , #invoice_total
        {   
            width:100%;
        }
        #invoice_body table , #invoice_total table
        {
            width:100%;
            /** border-left: 1px solid #ccc;
            border-top: 1px solid #ccc; **/
     
            border-spacing:0;
            border-collapse: collapse; 
             
            margin-top:0mm;
        }
         
        #invoice_body table td , #invoice_total table td
        {
            text-align:center;
            font-size:8pt;
            /** border-right: 1px solid black;
            border-bottom: 1px solid black;**/
            padding:0 0;
            font-weight: normal;
        }
        
        #invoice_head table td
        {
            text-align:left;
            font-size:8pt;
            /** border-right: 1px solid black;
            border-bottom: 1px solid black;**/
            padding:0 0;
            font-weight: normal;
        }
         
        #invoice_body table td.mono  , #invoice_total table td.mono
        {
            text-align:right;
            padding-right:0mm;
            font-size:6pt;
            border: 1px solid white;
            font-weight: normal;
        }
         
        #footer
        {   
            width:44mm;
            margin:0 2mm;
            padding-bottom:1mm;
        }
        #footer table
        {
            width:100%;
            /** border-left: 1px solid #ccc;
            border-top: 1px solid #ccc; **/
             
            background:#eee;
             
            border-spacing:0;
            border-collapse: collapse; 
        }
        #footer table td
        {
            width:25%;
            text-align:center;
            font-size:8pt;
            /** border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;**/
        }
        @media print{
			#no-print{
				display: none;
			}
		}
    </style>
	
</head>
<body>
<font size="1"><center><b>SMK KRIAN 1 SIDOARJO<br>Struk Pembayaran</b></center></font><br>
<?php 
$sqlSiswa = mysqli_query($konek, "SELECT * FROM siswa WHERE namasiswa='$_GET[namasiswa]'");
$ds = mysqli_fetch_array($sqlSiswa);
 ?>

 <?php 
$sqlBayar = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas 
									FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa 
									WHERE idspp='$_GET[id]'
									ORDER BY nobayar ASC");
$d = mysqli_fetch_array($sqlBayar);
 ?>
<table>
    <tr>
        <td>No.Bayar<br>Tgl.Pembayaran</td>
        <td>:&nbsp;&nbsp;<?php echo $d['nobayar']; ?><br>:&nbsp;&nbsp;<?php echo $d['tglbayar']; ?></td>
    </tr>
</table>
<div style="border-bottom:1px dashed black;">
</div>
<table>
	<tr>
		<td width="64">Nama Siswa<br>NIS<br>Kelas<br>Tahun Ajaran</td>
		<td>:<br>:<br>:<br>:</td>
		<td><?php echo $ds['namasiswa']; ?><br><?php echo $ds['nis']; ?><br><?php echo $ds['kelas']; ?><br><?php echo $ds['tahunajaran']; ?></td>
	</tr>
</table>
<table>
    
        <td>Pembayaran&nbsp;&nbsp;:</td>
        <td><?php echo $d['bulan']; ?></td>

</table>
<div style="border-bottom:1px dashed black;">
</div>
<table>
    <tr>
        <td width="100" align="right">Jumlah&nbsp;&nbsp;:<br>Keterangan&nbsp;&nbsp;:</td>
        <td><?php echo $d['jumlah']; ?><br><?php echo $d['ket']; ?></td>
    </tr>
</table>
<br>
<br>
<br>
<table>
    <tr>
        <td width="500">
            <p><center>Struk ini sebagai Bukti<br>Pembayaran yang Sah<br>Harap disimpan<br> 
                ===<?php echo date('d/m/Y'); ?>===</center></p>
            
        </td>
    </tr>
</table>
<br>
<table width="10%">
	<tr>
		<td></td>
		<td width="200">
			<p><center>Petugas,</center></p>
			<br>
			<br>
			<p>___________________</p>
		</td>
	</tr>
</table>

<a href="#" class="btn btn-success" id="no-print" onclick="window.print();">Cetak/Print</a>
<a href="transaksi.php" class="btn btn-default" id="no-print"><b>Kembali</a>
</body>
</html>

<?php 	
}else{
	header('location:login.php');
}
?>