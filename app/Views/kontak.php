<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - Green City</title>
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

  <!-- Hero Section Kontak -->
<section class="hero" style="background: url('<?= base_url('assets/images/bg1.jpg') ?>') no-repeat center center / cover;">
    <div class="hero-text">
      <h1>Hubungi Kami</h1>
      <p>Kami siap membantu menjawab pertanyaan Anda</p>
    </div>
</section>

  <!-- Kontak Section -->
  <section class="section reveal">
    <h2 class="section-title">Formulir Kontak</h2>
    <form class="kontak-form" action="#" method="post">
      <input type="text" name="nama" placeholder="Nama Anda" required>
      <input type="email" name="email" placeholder="Email Anda" required>
      <textarea name="pesan" rows="5" placeholder="Pesan Anda" required></textarea>
      <button type="submit" class="btn">Kirim Pesan</button>
    </form>
  </section>

  <!-- Kontak Langsung -->
  <section class="section reveal">
    <h2 class="section-title">Kontak Langsung</h2>
    <p>Anda juga dapat menghubungi kami langsung melalui WhatsApp:</p>
    <a href="https://wa.me/6281528406591" class="btn">Chat via WhatsApp</a>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Green City. All rights reserved.</p>
  </footer>
<button id="backToTop" title="Kembali ke atas">↑</button>
<script src="script.js"></script>
</body>
</html>