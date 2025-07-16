// Hover effect pada tombol
const buttons = document.querySelectorAll('.btn');
buttons.forEach(btn => {
  btn.addEventListener('mouseenter', () => {
    btn.style.transform = 'scale(1.05)';
    btn.style.boxShadow = '0 4px 12px rgba(0,0,0,0.2)';
  });
  btn.addEventListener('mouseleave', () => {
    btn.style.transform = 'scale(1)';
    btn.style.boxShadow = 'none';
  });
});

// Hover efek gambar di kartu
document.querySelectorAll('.card img').forEach(img => {
  img.style.transition = 'transform 0.3s ease';
  img.addEventListener('mouseenter', () => {
    img.style.transform = 'scale(1.03)';
  });
  img.addEventListener('mouseleave', () => {
    img.style.transform = 'scale(1)';
  });
});

// Smooth scroll anchor
document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// Navbar hover scaling
document.querySelectorAll('.nav-links a').forEach(link => {
  link.addEventListener('mouseenter', () => {
    link.style.color = 'white';
    link.style.transform = 'scale(1.1)';
  });
  link.addEventListener('mouseleave', () => {
    link.style.color = '';
    link.style.transform = 'scale(1)';
  });
});

// Scroll reveal
function checkReveal() {
  const reveals = document.querySelectorAll('.reveal');
  const windowHeight = window.innerHeight;

  reveals.forEach(el => {
    const elementTop = el.getBoundingClientRect().top;
    const elementBottom = el.getBoundingClientRect().bottom;

    if (elementTop < windowHeight - 100 && elementBottom > 100) {
      el.classList.add('active');
    } else {
      el.classList.remove('active'); // <--- ini penting biar bisa animasi ulang
    }
  });
}

window.addEventListener('scroll', checkReveal);
window.addEventListener('load', checkReveal);

// Back to top
const backToTopBtn = document.getElementById('backToTop');

window.addEventListener('scroll', () => {
  if (window.scrollY > 400) {
    backToTopBtn.classList.add('show');
  } else {
    backToTopBtn.classList.remove('show');
  }
});

backToTopBtn.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});


// Fade transition saat pindah halaman
document.querySelectorAll('a[href]:not([target])').forEach(link => {
  link.addEventListener('click', function (e) {
    const href = this.getAttribute('href');
    if (href && !href.startsWith('#')) {
      e.preventDefault();
      document.body.classList.remove('fade-in');
      document.body.style.transition = 'opacity 0.4s ease';
      document.body.style.opacity = '0';
      setTimeout(() => { window.location.href = href; }, 400);
    }
  });
});

// DOM Loaded
document.addEventListener('DOMContentLoaded', () => {
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.querySelector('.nav-links');
  const darkToggle = document.getElementById('darkModeToggle');

  // Hamburger toggle
  if (hamburger && navLinks) {
    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      // Tambah animasi setiap li saat toggle
      const navItems = navLinks.querySelectorAll('li');
      navItems.forEach((li, index) => {
        li.style.animation = navLinks.classList.contains('active')
          ? `slideDown 0.4s ease forwards ${(index * 0.05)}s`
          : 'none';
      });
    });

    // Tutup menu saat link diklik
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('active');
      });
    });
  }

  // Dark Mode toggle + transisi
  const currentMode = localStorage.getItem('darkMode');
  if (currentMode === 'enabled') {
    document.body.classList.add('dark');
    darkToggle.innerHTML = '☀️';
  }

  if (darkToggle) {
    darkToggle.addEventListener('click', () => {
      document.body.classList.toggle('dark');
      const isDark = document.body.classList.contains('dark');
      localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');

      // Tambahkan transisi smooth ke icon
      darkToggle.style.transition = 'transform 0.3s ease';
      darkToggle.style.transform = 'scale(1.2)';
      setTimeout(() => {
        darkToggle.innerHTML = isDark ? '☀️' : '🌙';
        darkToggle.style.transform = 'scale(1)';
      }, 150);
    });
  }

  // Navbar & logo fade saat load
  const navbar = document.querySelector('.navbar');
  const logoImg = document.querySelector('.logo-img');
  if (navbar) {
    navbar.style.opacity = '0';
    navbar.style.transition = 'opacity 1s ease-in-out';
    setTimeout(() => { navbar.style.opacity = '1'; }, 300);
  }
  if (logoImg) {
    logoImg.classList.add('loaded');
  }

  // Preloader hilang
  const preloader = document.getElementById("preloader");
  if (preloader) {
    preloader.style.display = "none";
  }

  document.body.classList.add('fade-in');
});