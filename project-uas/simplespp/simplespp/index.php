<html>
<head>
    <title>Aplikasi Pembayaran</title>
</head>
<body>
<div class="container">
	<div class="page-header">
		<h3>Selamat Datang di Aplikasi Pembayaran SMK KRIAN 1 SIDOARJO</h3>
	</div>

        <?php
            include "koneksi.php";
            $tgl    =date("Y-m-d");
        ?>
        <form action="index.php" method="post" name="postform">
            <?php include "header.php"; ?>

            <p><i><b>Tampilkan Pembayaran Hari ini</b></i></p>

            <table border="0">
                <tr>
                    <td width="80"><input class="btn btn-primary" type="submit" value="Tampilkan Data" name="tampil"/></td>
                </tr>
            </table>
        </form>
        <p>
        <?php
            //proses jika sudah klik button
            if(isset($_POST['tampil'])){
        ?>
        <i><b>Informasi : </b> Menampilkan Data Berdasarkan Tanggal Hari ini: <b><?php echo $tgl?></b></i>
        <?php
        $totalspp = 0;
            $spp = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas 
									FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa 
									WHERE tglbayar='$tgl' 
									ORDER BY nobayar ASC");
        ?>
        <?php
        $totalnonspp = 0;
            $nonspp = mysqli_query($konek, "SELECT nonspp.*,siswa.nis,siswa.namasiswa,siswa.kelas 
									FROM nonspp INNER JOIN siswa ON nonspp.idsiswa=siswa.idsiswa 
									WHERE tglbayar='$tgl' 
									ORDER BY nobayar ASC");
        ?>
        </p>
        <table class="table table-bordered table-striped">
	    <tr>
			<th>No.</th>
			<th>NIS</th>
			<th>Nama Siswa</th>
			<th>Kelas</th>
			<th>No. Bayar</th>
			<th>Pembayaran</th>
			<th>Keterangan</th>
			<th>Jumlah</th>
			<th>Tgl. Pembayaran</th>
		</tr>
            <?php
                //menampilkan data

                $no=0;
                while($row=mysqli_fetch_array($spp)){
                $no++
                
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $row['nis']?></td>
                <td><?php echo $row['namasiswa']?></td>
                <td><?php echo $row['kelas']?></td>
                <td><?php echo $row['nobayar']?></td>
                <td><?php echo $row['bulan']?></td>
                <td><?php echo $row['ket']?></td>
                <td><?php echo $row['jumlah']?></td>
                <td><?php echo $row['tglbayar']?></td>
            </tr>
            <?php
            $totalspp = $row['jumlah'];
                }
                
            ?> 
            <?php
                //menampilkan data
                
                while($row=mysqli_fetch_array($nonspp)){
                $no++
                
            ?> 
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $row['nis']?></td>
                <td><?php echo $row['namasiswa']?></td>
                <td><?php echo $row['kelas']?></td>
                <td><?php echo $row['nobayar']?></td>
                <td><?php echo $row['kategori']?></td>
                <td><?php echo $row['ket']?></td>
                <td><?php echo $row['jumlah']?></td>
                <td><?php echo $row['tglbayar']?></td>
            </tr>
            <?php
             $totalnonspp = $row['jumlah'];
                }
               
            ?>   
            <tr>
                <td colspan="6" height="40"> 
                <?php
                    //jika tidak ada data
                    if(mysqli_num_rows($spp)==0){
                        echo "<font color=red><blink>Tidak ada Pembayaran SPP pada hari ini!!!<br></blink></font>";
                    }
                ?>
                <?php
                    //jika tidak ada data
                    if(mysqli_num_rows($nonspp)==0){
                        echo "<font color=red><blink>Tidak ada Pembayaran NonSPP pada hari ini!!!</blink></font>";
                    }
                ?>
                </td>
                <td colspan="1" align="right"><b>Total</b></td>
				<td colspan="2" align="left"><b><?php echo $totalspp+$totalnonspp; ?></b></td>
            </tr> 
        </table>
                <?php
            }
            else{
                unset($_POST['tampil']);
            }
        ?>
       </div>

 <?php include "footer.php"; ?>  

</body>
</html>
