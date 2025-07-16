<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeri - Green City</title>
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
      <h1>Galeri Green City</h1>
      <p>Lihat suasana perumahan yang nyaman dan asri</p>
    </div>
  </section>

  <!-- Galeri Section -->
<section class="section reveal">
  <h2 class="section-title">Fasilitas</h2>
  <div class="card-container">

    <!-- Lapangan Basket -->
    <div class="card">
      <img src="<?= base_url('assets/images/lapangan-basket.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;" alt="Lapangan Basket">
      <h3>Lapangan Basket</h3>
      <p>Lapangan Basket yang free akses untuk warga perumahan, dibuka tiap jam 08:30–22:00</p>
    </div>

    <!-- Lapangan Bola -->
    <div class="card">
      <img src="<?= base_url('assets/images/bola.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;" alt="Lapangan Bola">
      <h3>Lapangan Bola</h3>
      <p>Lapangan Bola yang free akses untuk warga perumahan, dibuka tiap jam 16:00–22:00</p>
    </div>

    <!-- Playground -->
    <div class="card">
      <img src="<?= base_url('assets/images/playground.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;" alt="Playground">
      <h3>Playground</h3>
      <p>Tempat anak-anak bermain sekaligus taman untuk warga perumahan yang buka di jam 07:30–18:00</p>
    </div>

    <!-- Supermarket -->
    <div class="card">
      <img src="<?= base_url('assets/images/supermarket.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;" alt="Pusat Perbelanjaan">
      <h3>Pusat Perbelanjaan</h3>
      <p>Pusat perbelanjaan yang buka 24 jam dan siap memenuhi kebutuhan warga perumahan</p>
    </div>

    <!-- Portal Masuk -->
    <div class="card">
      <img src="<?= base_url('assets/images/portal.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;" alt="Portal Masuk">
      <h3>Portal Masuk</h3>
      <p>Portal masuk perumahan yang dijaga 24 jam agar warga Green City merasa nyaman dan tentram</p>
    </div>

  </div>
</section>

  <!-- CTA Section -->
  <section class="section reveal">
    <h2 class="section-title">Tertarik Melihat Langsung?</h2>
    <p>Hubungi kami untuk jadwal kunjungan dan survey lokasi.</p>
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