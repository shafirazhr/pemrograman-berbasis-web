<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Mata Uang</title>
</head>
<style>
@media screen and (max-width: 600px) {
    }
body {
    background-color: #2980B9; 
}
nav {
      background-color: #333;
      color: #fff;
      display: flex;
      justify-content: space-between;
      padding: 15px;
    }
    nav a {
      color: #fff;
      text-decoration: none;
      margin-right: 15px;
    }
.tampilan {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 5px;
    border: 2px solid black;
    border-radius: 5px;
    margin-top: 5px;
}
.output {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 5px;
    border: 2px solid black;
    border-radius: 5px;
    margin-top: 5px;
}
</style>
<body>
<nav>
        <div>
          <a href="home.php">BERANDA</a>
          <a href="kurs.php">INFORMASI</a>
          <a href="offline.php">OFFLINE</a>
          <a href="konversi.php">ONLINE</a>
          <a href="https://forms.gle/jx95gakJm315ZSPA9">KONFIRMASI</a>
        </div>
        <div>
        <a href="https://maps.app.goo.gl/K8QToe3MR5EEdYe76">ALAMAT</a>
        <a href="Contact.php">CONTACT</a>
        </div>
      </nav>
    <div class="tampilan">
    <h2>Konversi Mata Uang</h2>
    <form method="POST" action="lanjut.php">
    <label>Email:</label>
        <input type="nama" name="email" required>
        <br><br>
        <label>Nama:</label>
        <input type="text" name="NAMA" required>
        <br><br>
        <label>Mata Uang Asal:</label>
        <select name="mataUang_Asal">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="JPY">JPY</option>
            <option value="KRW">KRW</option>
            <option value="IDR">IDR</option>
            <option value="SAR">SAR</option>
            <option value="MYR">MYR</option>
            <option value="CNY">CNY</option>
        </select>
        <br><br>
        <label>Masukkan Nominal Mata Uang:</label>
        <input type="text" name="Input_MataUang" required>
        <br><br>
        <label>Mata Uang Tujuan:</label>
        <select name="mataUang_Tujuan">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="JPY">JPY</option>
            <option value="KRW">KRW</option>
            <option value="IDR">IDR</option>
            <option value="SAR">SAR</option>
            <option value="MYR">MYR</option>
            <option value="CNY">CNY</option>
        </select>
        <br><br>
        <button type="submit" name="submit" values="lanjut">LANJUT</button></td>
        <button type="submit" name="reset">KOSONGKAN</button></td> </div>
    </form>

<script>
        function validateForm() {
            var email = document.forms["myForm"]["email"].value;

            // Validasi Email
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Email tidak valid");
                return false;
            }
        }
</script>
    <div class= "output">
    
<?php
    error_reporting(0);
    if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $nama = $_POST['NAMA'];
    $asal = $_POST['mataUang_Asal'];
    $tujuan = $_POST['mataUang_Tujuan'];
    $input = $_POST['Input_MataUang'];

    function konversiMataUang($asal, $tujuan, $input){
        // Konversi dari mata uang asal ke aud
        switch($asal){
            case 'EUR':
                $AUD = ($input * 1.63);
                break;
            case 'JPY':
                $AUD = ($input * 0.011);
                break;
            case 'KRW':
                $AUD = ($input * 0.0011) ;
                break;
            case 'IDR':
                $AUD = ($input * 0.00010);
                break;
            case 'SAR':
                $AUD = ($input * 0.40);
                break;
            case 'MYR':
                $AUD = ($input * 0.33);
                break;
            case 'CNY':
                $AUD = ($input *  0.21);
                break;
            case 'USD':
                $AUD = ($input *  1.50);
                break;
            default:
                $AUD = $input;
                break;
        }

        // Konversi dari dollar ke mata uang tujuan
        switch($tujuan){
            case 'EUR':
                $hasil = ($AUD / 1.63);
                break;
            case 'JPY':
                $hasil = ($AUD / 0.011);
                break;
            case 'KRW':
                $hasil = ($AUD / 0.0011);
                break;
            case 'IDR':
                $hasil = ($AUD / 0.00010);
                break;
            case 'SAR':
                $hasil = ($AUD / 0.40);
                break;
            case 'MYR':
                $hasil = ($AUD / 0.33);
                break;
            case 'CNY':
                $hasil = ($AUD / 0.21);
                break;
            case 'USD':
                $hasil = ($AUD / 1.50);
                break;
            default:
                $hasil = $AUD;
        }
        return $hasil;
    }

    $hasil = konversiMataUang($asal, $tujuan, $input);

    echo "-----------------------------------------------<br>";
    echo "Hasil Konversi Mata Uang <br>";
    echo "============================<br>";
    echo "EMAIL: " .$email. "<br>";
    echo "Nama: " .$nama. "<br>";
    echo "Nominal Mata Uang: " .$input. " " .$asal. "<br>";
    echo "Nominal Konversi: " .$hasil. " " .$tujuan. "<br>";
    echo "============================<br>";
    echo "         TERIMA KASIH           <br>";
    echo "________________________________<br>";


    }elseif(isset($_POST['reset'])){
    exit();
}
?></div>

</body>
</html>
