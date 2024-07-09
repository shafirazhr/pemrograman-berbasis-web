<?php 
$host = "localhost"; // misalnya "localhost"
$username = "id20730048_cek"; // nama pengguna database
$password = "Cek!2345"; // kata sandi database
$database = "id20730048_cek"; // nama database

$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
// Mendapatkan nilai dari form
$email = $_POST['email'];
$namaPengirim = $_POST['Nama_Pengirim'];
$rekeningPengirim = $_POST['Rekening_Pengirim'];
$asal = $_POST['mataUang_Asal'];
$tujuan = $_POST['mataUang_Tujuan'];
$input = $_POST['Input_MataUang'];
$namaPenerima = $_POST['Nama_Penerima'];
$rekeningPenerima = $_POST['Rekening_Penerima'];

$query = "INSERT INTO output (email, Nama_Pengirim, Rekening_Pengirim, mataUang_Asal, mataUang_Tujuan, Input_MataUang, Nama_Penerima, Rekening_Penerima) VALUES ('$email', '$namaPengirim', '$rekeningPengirim', '$asal', '$tujuan', '$input', '$namaPenerima', '$rekeningPenerima')";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>