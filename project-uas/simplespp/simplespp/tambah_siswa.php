<?php include 'header.php'; ?>
<div class="container">
	<div class="page-header">
		<h3>Tambah Data Siswa</h3>
	</div>
<form method="post" action="">
	<table class="table">
		<tr>
			<td width="150px">NIS</td>
			<td><input class="form-control" type="text" name="nis" maxlength="10" placeholder="Masukan NIS"></td>
		</tr>
		<tr>
			<td width="150px">Nama Siswa</td>
			<td><input class="form-control" type="text" name="namasiswa" maxlength="40" placeholder="Masukan Nama Siswa"></td>
		</tr>
		<tr>
			<td width="150px">Kelas</td>
			<td>
				<select class="form-control" name="kelas">
					<option value="" selected>- Pilih Kelas -</option>
						<?php 
						$sqlKelas = mysqli_query($konek, "SELECT * FROM walikelas ORDER BY kelas ASC");
						while($k = mysqli_fetch_array($sqlKelas)){
							?>
							<option value="<?php echo $k['kelas']; ?>"><?php echo $k['kelas']; ?></option>
							<?php
						} 
						?>
				</select>
			</td>
		</tr>
		<tr>
			<td width="150px">Tahun Ajaran</td>
			<td><input class="form-control" type="text" name="tahunajaran" value="2020/2021" readonly=""></td>
		</tr>
		<tr>
			<td width="150px">Biaya SPP</td>
			<td><input class="form-control" type="text" name="biayaspp" value="250000" readonly=""></td>
		</tr>
		<tr>
			<td width="150px">Jatuh Tempo Pertama</td>
			<td><input class="form-control" type="text" name="jatuhtempo" value="2020-08-01" readonly=""></td>
		</tr>
		<tr>
			<td width="150px">Non Spp</td>
			<td><input class="form-control" type="text" name="kategorilks" value="LKS" readonly=""></td>
			<td><input class="form-control" type="text" name="kategoriuts" value="UTS" readonly=""></td>
			<td><input class="form-control" type="text" name="kategoriuas" value="UAS" readonly=""></td>
		</tr>
		<tr>
			<td width="150px">Biaya Non SPP</td>
			<td><input class="form-control" type="text" name="biayalks" value="70000" readonly=""></td>
			<td><input class="form-control" type="text" name="biayauts" value="50000" readonly=""></td>
			<td><input class="form-control" type="text" name="biayauas" value="60000" readonly=""></td>
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
	$nis = $_POST['nis'];
	$namasiswa = $_POST['namasiswa'];
	$kelas = $_POST['kelas'];
	$tahun = $_POST['tahunajaran'];

	$biayaspp = $_POST['biayaspp'];
	$biayalks = $_POST['biayalks'];
	$biayauts = $_POST['biayauts'];
	$biayauas = $_POST['biayauas'];

	$awaltempo = $_POST['jatuhtempo'];

	$kategorilks = $_POST['kategorilks'];
	$kategoriuts = $_POST['kategoriuts'];
	$kategoriuas = $_POST['kategoriuas'];

	$bulanindo = array(
        '01' => 'SPP Januari',
        '02' => 'SPP Februari',
        '03' => 'SPP Maret',
        '04' => 'SPP April',
        '05' => 'SPP Mei',
        '06' => 'SPP Juni',
        '07' => 'SPP Juli',
        '08' => 'SPP Agustus',
        '09' => 'SPP September',
        '10' => 'SPP Oktober',
        '11' => 'SPP November',
        '12' => 'SPP Desember'
	);

	$ambil = mysqli_query($konek, "SELECT * FROM siswa WHERE nis='$nis'");

	$akunyangcocok = $ambil->num_rows;
	if ($akunyangcocok>0|| $nis==''|| $namasiswa==''|| $kelas==''){
		echo "Form Failed!!!";
	}else {
		 $simpan= mysqli_query($konek, "INSERT INTO siswa(nis,namasiswa,kelas,tahunajaran) VALUES ('$nis','$namasiswa','$kelas','$tahun')");
		
	    if (!$simpan) {
			echo "Menyimpan data siswa gagal!!!";
			
		}else{
			$ds=mysqli_fetch_array(mysqli_query($konek, "SELECT idsiswa FROM siswa ORDER BY idsiswa DESC LIMIT 1"));
			$idsiswa = $ds['idsiswa'];

			for ($i=0; $i<12 ; $i++) { 
				
				$jatuhtempo = date("Y-m-d", strtotime("+$i month", strtotime($awaltempo)));
				$bulan = $bulanindo[date('m', strtotime($jatuhtempo))]." ".date('Y', strtotime($jatuhtempo));
				mysqli_query($konek, "INSERT INTO spp(idsiswa,jatuhtempo,bulan,jumlah) VALUES ('$idsiswa','$jatuhtempo','$bulan','$biayaspp')");

			}
		}
		if (!$simpan) {
			echo "Menyimpan data siswa gagal!!!";
			
		}else{
			$d=mysqli_fetch_array(mysqli_query($konek, "SELECT idsiswa FROM siswa ORDER BY idsiswa DESC LIMIT 1"));
			$idsiswa = $d['idsiswa'];

			$lks = mysqli_query($konek, "INSERT INTO nonspp(idsiswa,kategori,jumlah) VALUES ('$idsiswa','$kategorilks','$biayalks')");
			
		}
		if (!$simpan) {
			echo "Menyimpan data siswa gagal!!!";
			
		}else{
			$d=mysqli_fetch_array(mysqli_query($konek, "SELECT idsiswa FROM siswa ORDER BY idsiswa DESC LIMIT 1"));
			$idsiswa = $d['idsiswa'];

			$uts = mysqli_query($konek, "INSERT INTO nonspp(idsiswa,kategori,jumlah) VALUES ('$idsiswa','$kategoriuts','$biayauts')");
			
		}
		if (!$simpan) {
			echo "Menyimpan data siswa gagal!!!";
			
		}else{
			$d=mysqli_fetch_array(mysqli_query($konek, "SELECT idsiswa FROM siswa ORDER BY idsiswa DESC LIMIT 1"));
			$idsiswa = $d['idsiswa'];

			$uas = mysqli_query($konek, "INSERT INTO nonspp(idsiswa,kategori,jumlah) VALUES ('$idsiswa','$kategoriuas','$biayauas')");
			
		}
			header('location:tampil_siswa.php');
	    }
	
}
?>

<?php include 'footer.php'; ?>