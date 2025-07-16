<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Green City - Perumahan Impian</title>
  <link rel="stylesheet" href="style.css" />
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

<!-- Hero Section -->
<section class="hero" style="background: url('<?= base_url('assets/images/bg1.jpg') ?>') no-repeat center center / cover;">
  <div class="hero-text">
    <h1>Perumahan Nyaman dan Asri</h1>
    <p>Temukan hunian terbaik untuk keluarga Anda di Green City</p>
    <a href="#tipe" class="btn">Lihat Tipe Rumah</a>
  </div>
</section>

<!-- Sekilas Tipe Rumah -->
<section id="tipe" class="section reveal">
  <h2 class="section-title">Tipe Rumah</h2>
  <div class="card-container">
    <div class="card">
      <img src="<?= base_url('assets/images/tipe-rumah36.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;">
      <h3>Tipe 36</h3>
      <p>Rumah minimalis dengan taman depan dan carport</p>
    </div>
    <div class="card">
      <img src="<?= base_url('assets/images/tipe-rumah69.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;">
      <h3>Tipe 69</h3>
      <p>Lebih luas dengan 2 kamar tidur dan dapur modern</p>
    </div>
    <div class="card">
      <img src="<?= base_url('assets/images/tipe-rumah65.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;">
      <h3>Tipe 65</h3>
      <p>Cocok untuk keluarga besar, tersedia halaman belakang</p>
    </div>
  </div>
</section>

<!-- Tentang Kami -->
<section id="tentang" class="section reveal">
  <h2>
    <a href="<?= base_url('tentang') ?>" class="btn" style="text-decoration: none; color: white;">Tentang Kami</a>
  </h2>
  <p>Green City adalah pengembang properti terpercaya yang berkomitmen menyediakan hunian berkualitas tinggi dengan lingkungan hijau dan fasilitas lengkap.</p>
</section>

<!-- Galeri -->
<section class="section">
  <h2 class="section-title">Fasilitas</h2>
  <div class="card-container">
    <div class="card">
      <img src="<?= base_url('assets/images/lapangan-basket.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;">
      <h3>Lapangan Basket</h3>
      <p>Lapangan Basket yang free akses untuk warga perumahan dibuka tiap jam 08:30–22:00</p>
    </div>
    <div class="card">
      <img src="<?= base_url('assets/images/bola.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;">
      <h3>Lapangan Bola</h3>
      <p>Lapangan Bola yang free akses untuk warga perumahan dibuka tiap jam 16:00–22:00</p>
    </div>
    <div class="card">
      <img src="<?= base_url('assets/images/playground.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;">
      <h3>Playground</h3>
      <p>Tempat anak-anak bermain sekaligus taman untuk warga perumahan yang buka di jam 07:30–18:00</p>
    </div>
    <div class="card">
      <img src="<?= base_url('assets/images/supermarket.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;">
      <h3>Pusat Perbelanjaan</h3>
      <p>Pusat perbelanjaan yang tentunya buka 24 jam dan siap memenuhi kebutuhan warga perumahan</p>
    </div>
    <div class="card">
      <img src="<?= base_url('assets/images/portal.jpg') ?>" style="height: 200px; object-fit: cover; width: 100%;">
      <h3>Portal Masuk</h3>
      <p>Portal masuk perumahan yang dijaga 24 jam agar warga Green City merasa aman dan tentram</p>
    </div>
  </div>
</section>

<!-- Lokasi (Google Maps) -->
<section id="lokasi" class="section reveal">
  <h2 class="section-title">Lokasi Kami</h2>
  <p>Ruko Paladium Blok J No.16, Jln MT Haryono No.20, Batu Ampar, Balikpapan Utara</p>
  <div class="map-container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15945.09935116584!2d116.8727407!3d-1.2474677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df147f3c2f5bfa3%3A0x4de6eaa9c30dcf54!2sRuko%20Paladium!5e0!3m2!1sid!2sid!4v1720080000000!5m2!1sid!2sid"
      width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
</section>

<!-- Kontak Kami -->
<section id="kontak" class="section reveal">
  <h2 class="section-title">Hubungi Kami</h2>
  <p>Klik tombol di bawah untuk langsung terhubung ke WhatsApp kami.</p>
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