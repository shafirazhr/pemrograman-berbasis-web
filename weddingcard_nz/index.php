<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wedding of Novia & Zain</title>
    <link href="https://fonts.googleapis.com/css2?family=Georgia&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>


<body>

<section class="cover">
    <div class="cover-content">
        <div class="cover-3d">
            <h1 class="wedding-title">Save The Date</h1>
            <h2>Novia & Zain</h2>
            <p><strong>Resepsi:</strong> 23 Januari 2025, 10:00 AM</p>

            <div id="countdown" class="countdown-container">
                <div class="countdown-item">
                    <span id="days" class="countdown-number"></span>
                    <span class="countdown-label">Days</span>
                </div>
                <div class="countdown-item">
                    <span id="hours" class="countdown-number"></span>
                    <span class="countdown-label">Hours</span>
                </div>
                <div class="countdown-item">
                    <span id="minutes" class="countdown-number"></span>
                    <span class="countdown-label">Minutes</span>
                </div>
                <div class="countdown-item">
                    <span id="seconds" class="countdown-number"></span>
                    <span class="countdown-label">Seconds</span>
                </div>
            </div>
        </div>
        <a href="#mainContent" class="enter-button">Enter Invitation</a>
    </div>
</section>

<div id="mainContent">

    <section class="blessing">
        <p>بسم الله الرحمن الرحيم</p>
        <p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
        <p>Dengan penuh rasa syukur kepada Allah SWT, kami mengucapkan terima kasih atas rahmat dan hidayah-Nya yang telah memberikan kami kesempatan untuk melaksanakan pernikahan ini. Semoga Allah senantiasa memberkahi perjalanan hidup kami, memberikan kebahagiaan, dan menjadikan kami pasangan yang saling mencintai dan mendukung dalam kebaikan. Aamiin.</p>
        <p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
    </section>

    <section class="wedding-details">
        <div class="bride-groom">
            <div class="bride">
                <a href="https://www.instagram.com/novia_n.c/" target="_blank">
                    <img src="images/10.jpg" alt="Novia" class="bride-img">
                </a>
                <p><strong>Novia Nur Chomairoh</strong><br>Putri dari Bapak Sudarno dan Ibu Choiro Umatin</p>
            </div>
            <h2>&</h2>
            <div class="groom">
                <a href="https://www.instagram.com/zayn_gates/" target="_blank">
                    <img src="images/8.jpg" alt="Zain" class="groom-img">
                </a>
                <p><strong>Zain</strong><br>Putra dari Bapak Ali dan Ibu Fatimah</p>
            </div>
        </div>

<div class="details">
    <p>-----------------------------------------------------------</p>
    <h2>Resepsi</h2>
    <p><strong>Tanggal:</strong> 23 Januari 2025, 10:00 AM</p>
    <p><strong>Lokasi:</strong> Karanggeneng, Lamongan</p>
    <section class="location-map">
        <img src="images/lks.png" alt="Map" class="map-img">
    </section>
    <a href="https://maps.app.goo.gl/ZLgbJmiJ5hwqfTK17" class="map-button">❤️ Buka di Peta ❤️</a>
    <p>-----------------------------------------------------------</p>
</div>

    </section>

    <section class="prewed-photos">
        <h2>Foto Pre-Wedding</h2>
        <div class="photo-grid">
            <img src="images/6.jpg" alt="Prewed 1">
            <img src="images/7.jpg" alt="Prewed 2">
            <img src="images/9.jpg" alt="Prewed 3">
        </div>
    </section>

    <section class="thank-you">
        <h2>Terima Kasih</h2>
        <p>Dengan tulus kami mengucapkan terima kasih kepada semua tamu undangan yang telah hadir dan memberikan doa restu untuk pernikahan kami. Kehadiran Anda semua merupakan kebahagiaan yang tak ternilai bagi kami. Semoga Allah SWT membalas segala kebaikan dan perhatian yang telah diberikan. Kami berharap dapat terus menjalin silaturahmi dan berbagi kebahagiaan bersama di masa depan. Aamiin.</p>
    </section>

</div>

<div class="music-controls">
    <button id="toggle-music" aria-label="Play Music">
        <img id="music-icon" src="images/play-icon.png" alt="Play Music">
    </button>
    <audio id="background-music" autoplay loop muted>
        <source src="msk.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</div>

<script>
    var countDownDate = new Date("Jan 23, 2025 10:00:00").getTime();

    var countdownfunction = setInterval(function () {
        var now = new Date().getTime();
        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        if (distance < 0) {
            clearInterval(countdownfunction);
            document.getElementById("countdown").innerHTML = "The Wedding has Started!";
        }
    }, 1000);

</script>
<script>
    // Musik diputar otomatis dan kontrol
    document.addEventListener('DOMContentLoaded', function () {
        const music = document.getElementById('background-music');
        const toggleButton = document.getElementById('toggle-music');
        const musicIcon = document.getElementById('music-icon');

        // Unmute music setelah 1 detik
        setTimeout(() => {
            music.muted = false;
        }, 1000);

        toggleButton.addEventListener('click', function () {
            if (music.paused) {
                music.play();
                musicIcon.src = 'images/jd.jpg';
                toggleButton.setAttribute('aria-label', 'Pause Music');
            } else {
                music.pause();
                musicIcon.src = 'images/msk.jpg';
                toggleButton.setAttribute('aria-label', 'Play Music');
            }
        });
    });
</script>
</body>

</html>
