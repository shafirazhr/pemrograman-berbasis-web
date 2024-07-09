<!DOCTYPE html>
<html>
<head>
  <title>Formulir Saran</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 20px;
}

h1 {
  color: #333;
}

form {
  width: 400px;
  margin-top: 20px;
}

label {
  display: block;
  margin-top: 10px;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 5px;
  font-size: 16px;
}

input[type="submit"] {
  margin-top: 10px;
  padding: 10px 20px;
  font-size: 16px;
  background-color: #333;
  color: #fff;
  border: none;
  cursor: pointer;
}
</style>
<center><body>
  <h1>Formulir Saran</h1>
  
  <form action="" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="nama" required>

    <label for="message">Pesan atau Saran:</label>
    <textarea id="message" name="pesan" required></textarea>

    <input type="submit" name="kirim" value="Kirim" class="btn btn-primary">
  </form>
  <h1>Terima Kasih!</h1>
  
<?php
include "koneksi.php";
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];
    $masuk = mysqli_query($conn, "INSERT INTO saran (nama, pesan) VALUES ('$nama','$pesan')");
    if ($masuk) {
        header("Location: utama.php"); 
        exit;
    } else {
        echo "Gagal menyimpan data";
    }
}
?>
</body>
</html>

</body>
</html>
