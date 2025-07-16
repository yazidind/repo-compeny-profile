<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipe Rumah - Green City</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="preloader"></div>

  <!-- Navbar -->
  <header>
  <nav class="navbar">
    <!-- Kiri: Logo -->
    <div class="logo">
      <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo Green City" class="logo-img"/>
    </div>

    <!-- Tengah: Menu -->
<ul class="nav-links" id="navLinks">
  <li><a href="<?= base_url('/') ?>">Home</a></li>
  <li><a href="<?= base_url('tipe-rumah') ?>">Tipe Rumah</a></li>
  <li><a href="<?= base_url('tentang') ?>">Tentang</a></li>
  <li><a href="<?= base_url('galeri') ?>">Galeri</a></li>
  <li><a href="<?= base_url('lokasi') ?>">Lokasi</a></li>
  <li><a href="<?= base_url('kontak') ?>">Kontak</a></li>
</ul>

    <!-- Kanan: Dark Mode + Hamburger -->
<div class="menu-controls">
  <button id="darkModeToggle" class="icon-btn">🌙</button>
  <div class="hamburger" id="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
  </nav>
</header>

  <!-- Hero Section Galeri -->
  <section class="hero" style="background: url('<?= base_url('assets/images/bg1.jpg') ?>') no-repeat center center / cover;">
    <div class="hero-text">
      <h1>Beberapa Tipe Kami</h1>
      <p>Lihat-lihat aja dulu mana tau cocok</p>
    </div>
  </section>

  <!-- Tipe Rumah Section -->
  <section class="section reveal">
  <h2 class="section-title">Pilihan Tipe Rumah</h2>
  <div class="card-container">

    <!-- Tipe 36 -->
    <div class="card">
      <img src="<?= base_url('assets/images/tipe-rumah36.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;" alt="Tipe 36">
      <h3>Tipe 36</h3>
      <p>Rumah minimalis cocok untuk keluarga kecil.<br>
         Fasilitas: 2 Kamar Tidur, 1 Kamar Mandi, Carport, Taman Depan.</p>
    </div>

    <!-- Tipe 69 -->
    <div class="card">
      <img src="<?= base_url('assets/images/tipe-rumah69.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;" alt="Tipe 69">
      <h3>Tipe 69</h3>
      <p>Rumah modern dengan ruang keluarga luas.<br>
         Fasilitas: 2+1 Kamar Tidur, 2 Kamar Mandi, Dapur, Ruang Tamu, Carport.</p>
    </div>

    <!-- Tipe 65 -->
    <div class="card">
      <img src="<?= base_url('assets/images/tipe-rumah65.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;" alt="Tipe 65">
      <h3>Tipe 65</h3>
      <p>Rumah luas untuk keluarga besar.<br>
         Fasilitas: 3 Kamar Tidur, 2 Kamar Mandi, Ruang Makan, Ruang Keluarga, Taman Belakang.</p>
    </div>

  </div>
</section>

  <!-- CTA Section -->
  <section class="section reveal">
    <h2 class="section-title">Tertarik dengan Salah Satu Tipe?</h2>
    <p>Hubungi kami sekarang juga untuk informasi lebih lanjut atau jadwalkan kunjungan ke lokasi.</p>
    <a href="https://wa.me/6281528406591" class="btn">Hubungi via WhatsApp</a>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Green City. All rights reserved.</p>
  </footer>
<button id="backToTop" title="Kembali ke atas">↑</button>
<script src="script.js"></script>
</body>
</html>
