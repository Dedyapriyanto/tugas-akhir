<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Diri Saya</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <h1>Data Diri Saya</h1>
        <nav>
            <a href="#intro">Beranda</a>
            <a href="#deskripsi">Tentang Saya</a>
            <a href="#kemampuan">Kemampuan</a>
            <a href="#kontak">Kontak</a>
        </nav>
    </header>

    <!-- Intro -->
    <section id="intro" class="fade-in">
        <div class="profile-container">
            <img src="images/g1.jpg" alt="Foto Profil" class="profile-pic">
            <h2>Hai, Saya <span class="highlight-nama">Dedy Apriyanto</span></h2>
            <p>Pengembang Web | Desainer UI/UX | Pecinta Teknologi</p>

            <p><i class="fa-solid fa-envelope"></i> Email: <a href="mailto:14.dedyapriyanto@gmail.com">14.dedyapriyanto@gmail.com</a></p>
            <p><i class="fa-solid fa-phone"></i> Telepon: <a href="tel:+6281295282843">+62 812 9528 2843</a></p>
            <p><i class="fa-brands fa-instagram"></i> Instagram: <a href="https://www.instagram.com/playcozy_" target="_blank">@playcozy_</a></p>
            <p><i class="fa-brands fa-github"></i> GitHub: <a href="https://github.com/dedyapriyanto" target="_blank">dedyapriyanto</a></p>
        </div>
    </section>

    <!-- Deskripsi -->
    <section id="deskripsi" class="fade-in">
        <h2><i class="fa-solid fa-user-pen"></i> Tentang Saya</h2>
        <p>
            Saya tinggal di sebuah desa yang berada di bagian selatan Jogjakarta,
            lebih tepatnya di Kabupaten Kulonprogo. Saya lahir pada tanggal 14 April 2005,
            saya adalah anak pertama dari 2 bersaudara, dan saya memiliki hobi bermain game, hiking,
            dan olahraga.
        </p>
        <p>
            Saya adalah seorang <span class="highlight">mahasiswa informatika</span> yang menempuh pendidikan di Universitas Ahmad Dahlan yang berada di Jogjakarta.
            <span class="highlight">Saya memiliki ketertarikan di bidang</span> <span class="highlight">pemrograman terutama di bagian pemrograman Web</span>.
            Mengapa saya tertarik dengan pemrograman ini? <span class="highlight">Karena saya bisa membuat sebuah pemrograman web dengan imajinasi saya sendiri tanpa ada batasan</span>.
        </p>
    </section>

    <!-- Kemampuan -->
    <section id="kemampuan" class="fade-in">
        <h2><i class="fa-solid fa-laptop-code"></i> Kemampuan</h2>
        <div class="skills-bars">
            <div class="skill-bar">
                <span>HTML & CSS</span>
                <div class="bar-bg"><div class="bar-fill html" style="width:95%"></div></div>
            </div>
            <div class="skill-bar">
                <span>JavaScript & jQuery</span>
                <div class="bar-bg"><div class="bar-fill js" style="width:80%"></div></div>
            </div>
            <div class="skill-bar">
                <span>PHP & MySQL</span>
                <div class="bar-bg"><div class="bar-fill php" style="width:85%"></div></div>
            </div>
            <div class="skill-bar">
                <span>Desain UI/UX</span>
                <div class="bar-bg"><div class="bar-fill uiux" style="width:75%"></div></div>
            </div>
            <div class="skill-bar">
                <span>Responsive Web Design</span>
                <div class="bar-bg"><div class="bar-fill responsive" style="width:90%"></div></div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="fade-in">
        <center>
            <h2><i class="fa-solid fa-envelope"></i> Kontak Saya</h2>
        </center>
        <form action="process.php" method="post" class="contact-form">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="4" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </section>

    <footer>
        <p>&copy; <?= date("Y") ?> Dedy Apriyanto <span>Universitas Ahmad Dahlan</span></p>
    </footer>
</body>
</html>