<main>
  <!-- Hero Section -->
  <section id="hero" class="hero section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
            <div class="company-badge mb-4">
              <i class="bi bi-mortarboard-fill me-2"></i>
              Sistem Informasi Beasiswa
            </div>

            <h1 class="mb-4">
              Kelola Data <br>
              Mahasiswa & Beasiswa <br>
              <span class="accent-text">Secara Efisien</span>
            </h1>

            <p class="mb-4 mb-md-5">
              Sistem ini membantu admin akademik dalam pengelolaan data mahasiswa, program beasiswa, dan pencatatan histori penerima beasiswa secara cepat dan akurat.
            </p>

            <div class="hero-buttons">
              <a href="{{ url('/admin') }}" class="btn btn-primary me-0 me-sm-2 mx-1">Masuk Panel Admin</a>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
            <img src="{{ asset('assets/img/illustration-1.webp') }}" alt="Hero Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4 align-items-center justify-content-between">
        <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
          <span class="about-meta">TENTANG SISTEM</span>
          <h2 class="about-title">Pengelolaan Beasiswa Digital</h2>
          <p class="about-description">
            Sistem ini memudahkan pengelolaan program beasiswa dengan mencatat penerima beasiswa, periode pemberian, serta menyediakan histori dan pencarian data terintegrasi.
          </p>

          <div class="row feature-list-wrapper">
            <div class="col-md-6">
              <ul class="feature-list">
                <li><i class="bi bi-check-circle-fill"></i> Manajemen Mahasiswa</li>
                <li><i class="bi bi-check-circle-fill"></i> Manajemen Beasiswa</li>
                <li><i class="bi bi-check-circle-fill"></i> Riwayat Penerima</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="feature-list">
                <li><i class="bi bi-check-circle-fill"></i> Data Relasional Otomatis</li>
                <li><i class="bi bi-check-circle-fill"></i> Validasi & Keamanan</li>
                <li><i class="bi bi-check-circle-fill"></i> Pencarian Cepat</li>
              </ul>
            </div>
          </div>

          <div class="info-wrapper">
            <div class="row gy-4">
              <div class="col-lg-5">
                <div class="profile d-flex align-items-center gap-3">
                  <img src="{{ asset('assets/img/avatar-1.webp') }}" alt="Admin Akademik" class="profile-image">
                  <div>
                    <h4 class="profile-name">Admin Akademik</h4>
                    <p class="profile-position">Pengelola Beasiswa</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="contact-info d-flex align-items-center gap-2">
                  <i class="bi bi-telephone-fill"></i>
                  <div>
                    <p class="contact-label">Kontak Kami</p>
                    <p class="contact-number">+62 812 3456 7890</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
          <div class="image-wrapper">
            <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
              <img src="{{ asset('assets/img/about-5.webp') }}" alt="Beasiswa" class="img-fluid main-image rounded-4">
              <img src="{{ asset('assets/img/about-2.webp') }}" alt="Mahasiswa" class="img-fluid small-image rounded-4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="features section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Fitur Utama</h2>
      <p>Beberapa fitur utama yang tersedia pada sistem manajemen beasiswa ini:</p>
    </div>

    <div class="container">
      <div class="d-flex justify-content-center">
        <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1"><h4>Student</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2"><h4>Scholarship</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3"><h4>Student Scholarship</h4></a>
          </li>
        </ul>
      </div>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
        <!-- Student -->
        <div class="tab-pane fade active show" id="features-tab-1">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
              <h3>Manajemen Data Mahasiswa</h3>
              <p class="fst-italic">Meliputi data nama, email, dan NIM mahasiswa yang dapat ditambah, ubah, atau dihapus.</p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Validasi email & NIM unik</li>
                <li><i class="bi bi-check2-all"></i> Tampilan daftar dan detail mahasiswa</li>
                <li><i class="bi bi-check2-all"></i> Mudah digunakan oleh admin</li>
              </ul>
            </div>
            <div class="col-lg-6 text-center">
              <img src="{{ asset('assets/img/features-illustration-1.webp') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div>

        <!-- Scholarship -->
        <div class="tab-pane fade" id="features-tab-2">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
              <h3>Pengelolaan Beasiswa</h3>
              <p class="fst-italic">Mencakup informasi nama beasiswa, deskripsi, penyedia, tanggal aktif, dan status.</p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Penjadwalan tanggal mulai & berakhir</li>
                <li><i class="bi bi-check2-all"></i> Status aktif atau nonaktif</li>
                <li><i class="bi bi-check2-all"></i> Integrasi dengan data mahasiswa</li>
              </ul>
            </div>
            <div class="col-lg-6 text-center">
              <img src="{{ asset('assets/img/features-illustration-2.webp') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div>

        <!-- Student Scholarship -->
        <div class="tab-pane fade" id="features-tab-3">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
              <h3>Pencatatan Penerima Beasiswa</h3>
              <ul>
                <li><i class="bi bi-check2-all"></i> Relasi mahasiswa dengan beasiswa</li>
                <li><i class="bi bi-check2-all"></i> Kolom tanggal pemberian beasiswa</li>
                <li><i class="bi bi-check2-all"></i> Riwayat penerima untuk setiap beasiswa</li>
              </ul>
              <p class="fst-italic">Memastikan informasi beasiswa yang diberikan dapat ditelusuri kembali dengan mudah.</p>
            </div>
            <div class="col-lg-6 text-center">
              <img src="{{ asset('assets/img/features-illustration-3.webp') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Cards Section -->
  <section id="features-cards" class="features-cards section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="feature-box orange">
            <i class="bi bi-award"></i>
            <h4>Data Valid</h4>
            <p>Validasi manual untuk menjaga integritas data mahasiswa dan beasiswa.</p>
          </div>
        </div>
        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="feature-box blue">
            <i class="bi bi-patch-check"></i>
            <h4>Relasi Tertaut</h4>
            <p>Relasi antar tabel tercatat secara otomatis dan transparan.</p>
          </div>
        </div>
        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="feature-box green">
            <i class="bi bi-search"></i>
            <h4>Pencarian Cepat</h4>
            <p>Cari mahasiswa atau beasiswa hanya dalam hitungan detik.</p>
          </div>
        </div>
        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="feature-box red">
            <i class="bi bi-shield-lock"></i>
            <h4>Keamanan</h4>
            <p>Akses dibatasi hanya untuk admin dengan otorisasi khusus.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
