@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kasir Violet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/gambar 6.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="/img/gambar 6.png" alt="">
        <h1 class="sitename">Kasir Violet</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#pricing">Harga</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
    </div>
  </header>
  <!-- End Header -->

  <!-- Main -->
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Welcome to <span>Kasir Violet</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Satu aplikasi dengan fitur dan layanan unggulan untuk semua jenis usaha</p>
          <img src="/img/gambar 4.png" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>Aplikasi Kasir Violet Membantu Wirausaha untuk Tumbuh dan Berkembang</h3>
            <p>
              Di balik vitalnya peran para pelaku UMKM, mereka juga memiliki beberapa tantangan dalam mengelola usahanya, 
              seperti sulitnya mengontrol kas masuk dan kas keluar, mengatur manajemen karyawan, sulitnya mendapat akses permodalan, 
              dan banyak lagi yang lainnya. Untuk itu, digitalisasi dan teknologi berperan penting dalam menumbuhkan usaha. Salah satunya adalah melalui pemanfaatan 
              fitur dan produk dari aplikasi kasir Violet, aplikasi wirausaha yang mampu membuat UMKM menjadi lebih maju lagi.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Manajemen Transaksi.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Manajemen Keuangan.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Pengalaman Pelanggan</span></li>
            </ul>
          </div>
          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="/img/gambar 5.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->
    
    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">
      <div class="text-center">
        <h2>Harga Aplikasi</h2>
        <h3>Pilih Paket Langganan Sesuai Kebutuhan</h3>
        <p>Tentukan paket terbaikmu mulai dari berlangganan tahunan atau bulanan</p>
      </div>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Starter</h3>
              <p class="description">Untuk semua jenis usaha. Kelola operasional dan penjualan lengkap</p>
              <h4><sup>Rp</sup>249.000</h4>
              <a href="#" class="cta-btn">Pilih Paket</a>
              <ul>
                <li><i class="bi bi-check"></i> <span>Single outlet</span></li>
                <li><i class="bi bi-check"></i> <span>Toko Online</span></li>
                <li><i class="bi bi-check"></i> <span>Aplikasi Kasir Online</span></li>
                <li><i class="bi bi-check"></i> <span>Manajemen Pembelian</span></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Pro</h3>
              <p class="description">Untuk semua jenis usaha. Perluas pasar dengan fitur tambahan</p>
              <h4><sup>Rp</sup>499.000</h4>
              <a href="#" class="cta-btn">Pilih Paket</a>
              <ul>
                <li><i class="bi bi-check"></i> <span>Single outlet</span></li>
                <li><i class="bi bi-check"></i> <span>Toko Online</span></li>
                <li><i class="bi bi-check"></i> <span>Aplikasi Kasir Online</span></li>
                <li><i class="bi bi-check"></i> <span>Manajemen Pembelian</span></li>
                <li><i class="bi bi-check"></i> <span>Multi Outlet</span></li>
                <li><i class="bi bi-check"></i> <span>Laporan Analisis</span></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Premium</h3>
              <p class="description">Untuk semua jenis usaha. Lakukan ekspansi dengan fitur lengkap</p>
              <h4><sup>Rp</sup>799.000</h4>
              <a href="#" class="cta-btn">Pilih Paket</a>
              <ul>
                <li><i class="bi bi-check"></i> <span>Single outlet</span></li>
                <li><i class="bi bi-check"></i> <span>Toko Online</span></li>
                <li><i class="bi bi-check"></i> <span>Aplikasi Kasir Online</span></li>
                <li><i class="bi bi-check"></i> <span>Manajemen Pembelian</span></li>
                <li><i class="bi bi-check"></i> <span>Multi Outlet</span></li>
                <li><i class="bi bi-check"></i> <span>Laporan Analisis</span></li>
                <li><i class="bi bi-check"></i> <span>Custom Report</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Pricing Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container">
        <div class="row">
          <div class="col-lg-5" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. A. Yani, Kota Banjarmasin, Kalimantan Selatan</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>kasirviolet@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>081234567890</p>
              </div>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0" data-aos="fade-left">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End Main -->

  <!-- Vendor JS Files -->
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/purecounter/purecounter.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>
@endsection
