<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - Green City</title>
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

  <!-- Hero Section Tentang -->
  <section class="hero" style="background: url('<?= base_url('assets/images/bg1.jpg') ?>') no-repeat center center / cover;">
    <div class="hero-text">
      <h1>Tentang Kami</h1>
      <p>Komitmen kami menghadirkan hunian terbaik untuk Anda</p>
    </div>
  </section>

  <!-- Tentang Section -->
  <section class="section reveal">
    <h2 class="section-title">Profil Green City</h2>
    <p>Green City adalah pengembang perumahan terpercaya yang telah beroperasi sejak tahun 2024. Kami telah membangun lebih dari 1000 unit rumah berkualitas di berbagai lokasi strategis. Visi kami adalah menciptakan lingkungan hidup yang nyaman, aman, dan hijau untuk keluarga Indonesia.</p>
    <br />
    <p>Misi kami adalah:
      <ul style="text-align: left; max-width: 800px; margin: 1rem auto;">
        <li>✔ Menyediakan hunian yang berkualitas dan terjangkau</li>
        <li>✔ Membangun lingkungan hijau yang berkelanjutan</li>
        <li>✔ Memberikan pelayanan terbaik kepada pelanggan</li>
        <li>✔ Menjamin legalitas dan kelengkapan dokumen properti</li>
      </ul>
    </p>
  </section>

  <!-- booklet Section -->
  <section class="section reveal">
  <h2 class="section-title">Download E-Booklet</h2>
  <p>Dapatkan informasi lengkap tentang Green City dalam bentuk booklet digital.</p>
  <a href="<?= base_url('assets/green-city-booklet.pdf') ?>" class="btn" download>
  Download Booklet (PDF)
</a>
</section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Green City. All rights reserved.</p>
  </footer>
<button id="backToTop" title="Kembali ke atas">↑</button>
<script src="script.js"></script>
</body>
</html>