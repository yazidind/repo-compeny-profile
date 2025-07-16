<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lokasi - Green City</title>
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

  <!-- Hero Section Lokasi -->
  <section class="hero" style="background: url('<?= base_url('assets/images/bg1.jpg') ?>') no-repeat center center / cover;">
    <div class="hero-text">
      <h1>Lokasi Green City</h1>
      <p>Temukan kami di pusat kota Balikpapan Utara</p>
    </div>
  </section>

  <!-- Google Maps Embed -->
  <section class="section reveal">
    <h2 class="section-title">Alamat Kami</h2>
    <p>Ruko Paladium Blok J No.16, Jln MT Haryono No.20, Batu Ampar, Balikpapan Utara, Kota Metropolitan</p>
    <div style="margin-top: 1rem; display: flex; justify-content: center;">
      <iframe
        src="https://www.google.com/maps?q=Ruko+Paladium+Blok+J+No.16,+Jln+MT+Haryono+No.20,+Batu+Ampar,+Balikpapan+Utara&output=embed"
        width="100%" height="450" style="border:0; max-width: 1000px;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Green City. All rights reserved.</p>
  </footer>
<button id="backToTop" title="Kembali ke atas">↑</button>
<script src="script.js"></script>
</body>
</html>