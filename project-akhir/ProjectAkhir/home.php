<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
	body {
		font-family: Arial, sans-serif;
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
    .slideshow-container {
            position: relative;
            max-width: 100%;
            height: 100%;
            margin: auto;
        }
        .mySlides {
            display: none;
            width: 100%;
            height: 100%;
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
      <div class="slideshow-container">
        <?php
            $fotoBeranda = array(
                "hd.jpg",
                "hd1.jpg",
                "hd3.jpg"
            );

            foreach ($fotoBeranda as $index => $foto) {
              echo '<img class="mySlides" src="/SHAFIRAZZ_101/' . $foto . '" alt="Foto Beranda ' . ($index+1) . '">';
          }
        ?>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var slides = document.getElementsByClassName("mySlides");

            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            slides[slideIndex - 1].style.display = "block";

            setTimeout(showSlides, 2000); // Ganti gambar setiap 2 detik
        }
    </script>
</body>
</html>