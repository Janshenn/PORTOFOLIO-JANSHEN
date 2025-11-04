<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Janshen</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">Janshen<span>.</span></div>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#projects">Proyek</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section id="home" class="hero">
    <div class="hero-content">
      <h1>Hai, Saya <span>Janshen</span></h1>
      <p>Seorang <strong>Frontend Developer</strong> yang suka menciptakan tampilan web menarik dan interaktif.</p>
      <a href="#projects" class="btn">Lihat Proyek Saya</a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about">
    <h2>Tentang Saya</h2>
    <p>
      Saya adalah seorang mahasiswa IT yang berfokus pada pengembangan web.
      Saya memiliki pengalaman dalam HTML, CSS, JavaScript, dan framework modern seperti React serta Laravel untuk backend.
    </p>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects">
    <h2>Proyek Terbaru</h2>
    <div class="project-grid">
      <div class="project-card">
        <h3>Website Kesehatan</h3>
        <p>Website tentang tips olahraga dan gaya hidup sehat menggunakan HTML, CSS, dan JS.</p>
      </div>
      <div class="project-card">
        <h3>Aplikasi To-Do List</h3>
        <p>Aplikasi sederhana untuk mencatat aktivitas harian dengan filter tugas selesai dan belum selesai.</p>
      </div>
      <div class="project-card">
        <h3>Appoint Your Doctor</h3>
        <p>Aplikasi Flutter untuk membuat janji dengan dokter favorit dengan tampilan modern.</p>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact">
    <h2>Hubungi Saya</h2>
    <p>Ingin berkolaborasi? Silakan hubungi saya melalui:</p>
    <a href="mailto:janshen@example.com" class="btn">Email Saya</a>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>© 2025 Janshen. Dibuat dengan ❤️</p>
  </footer>
</body>
</html>
