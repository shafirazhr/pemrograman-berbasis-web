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

$email = $_POST['email'];
$nama = $_POST['NAMA'];
$asal = $_POST['mataUang_Asal'];
$tujuan = $_POST['mataUang_Tujuan'];
$input = $_POST['Input_MataUang'];

$query = "INSERT INTO offline (email, NAMA, mataUang_Asal, mataUang_Tujuan, Input_MataUang) VALUES ('$email', '$nama', '$asal', '$tujuan', '$input')";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>