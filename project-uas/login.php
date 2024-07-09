<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 align="center">Buat Akun</h2>
        <form method="POST" action="" onSubmit="validasi()">
            <div class="form-group">
                <label for="name">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <input type="submit" name="daftar" value="Daftar" class="btn btn-primary">
            <input type="submit" name="login" value="Login" class="btn btn-primary">
        </form>
    </div>


<?php
include "connect.php";
if (isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $masuk = mysqli_query($conn, "INSERT INTO daftar (username, email, password) VALUES ('$username','$email','$password')");
    if ($masuk) {
        header("Location: index.php"); 
        exit;
    } else {
        echo "Gagal menyimpan data";
    }
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $masuk = mysqli_query($conn, "INSERT INTO daftar (username, email, password) VALUES ('$username','$email','$password')");
    if ($masuk) {
        header("Location: index.php"); 
        exit;
    } else {
        echo "Gagal menyimpan data";
    }
}
?>

</body>
</html>



