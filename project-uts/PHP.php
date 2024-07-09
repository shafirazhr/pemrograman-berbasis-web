<form action="" method="post">
	<div class="row">
		<label>Nama Lengkap</label>
		<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
	<div class="row">
		<label>Nama</label>
		<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
	<div class="row">
		<label>No HP</label>
		<input type="text" name="angka" value="<?=isset($_POST['angka']) ? $_POST['angka'] : ''?>"/>
	</div>
	<div class="row">
		<label>Email</label>
		<input type="text" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/>
	</div>
	<div class="row">
		<label>Tanggal Lahir</label>
		<input type="date" name="email" value="<?=isset($_POST['TTL']) ? $_POST['TTL'] : ''?>"/>
	</div>
	<div class="row">
		<label>Asal Kota</label>
		<input type="text/date" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
	<div class="row">
		<label>Instagram</label>
		<input type="text/date" name="email" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
	<div class="row">
		<label>IDOL</label>
		<input type="text/date" name="email" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
</form>
<?php
if (isset($_POST['submit'])) {
	echo '<h1>Hasil Input</h1>';
	echo '<ul>';
	echo '<li>Nama Lengkap: ' . $_POST['nama'] . '</li>';
	echo '<li>Nama: ' . $_POST['nama'] . '</li>';
	echo '<li>No HP: ' . $_POST['angka'] . '</li>';
	echo '<li>Email: ' . $_POST['email'] . '</li>';
	echo '<li>Tanggal Lahir: ' . $_POST['TTL'] . '</li>';
	echo '<li>Asal Kota: ' . $_POST['nama'] . '</li>';
	echo '<li>Instagram: ' . $_POST['nama'] . '</li>';
	echo '<li>IDOL: ' . $_POST['nama'] . '</li>';

	
	$list_skill = array();
	foreach ($program as $skill) {
		if ( isset($POST['skill' . $skill]) )
		{
			$list_skill[] = $skill;
		}
	}

	echo '<li>Skill: ' . ($list_skill ? join($list_skill, ', ') : '-') . '</li>';
	echo '</ul>';
}?>