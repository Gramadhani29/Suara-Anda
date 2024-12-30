<!DOCTYPE html>
<html lang="en">
<<<<<<< Updated upstream

    <head>
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Suara Anda</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.svg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  @include('includes.landing.stylesheet')


  <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    </head>

  <body>

    @include('includes.landing.navbar')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Layanan Laporan Pelecehan Masyarakat Berbasis Online</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Sampaikan laporan masalah Anda di sini, kami akan memprosesnya dengan cepat , aman dan nyaman.</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="{{ route('login')}}" class="btn-get-started scrollto">Laporkan!</a>
           
            <a href="#services" class="btn-get-started-2 scrollto">Alur laporan</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              <h3>Suara Anda</h3> adalah sistem laporan atau pengaduan terhadap pelecehan seksual baik laki-laki maupun merempuan
            </p>
            <ul>
              <h3>Tujuan Suara Anda</h3>
              <li><i class="ri-check-double-line"></i>Memberikan Informasi mengenai tindakan pencegahan</li>
              <li><i class="ri-check-double-line"></i>Mempermudah Masyarakat untuk melakukan pelaporan secara cepat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              <h4>Suara Anda</h4>merupakan komitmen  kami untuk melayani Masyarakat. Dengan hadirnya sistem pelaporan pengaduan online ini, Masyarakat dapat mencegah terjadinya kekerasan seksual.
            </p>
            <a href="#services" class="btn-learn-more">Tata cara atau alur pengaduan</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Pengguna</strong><br>DAFTAR pengguna Suara Anda</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Pengaduan</strong> <br> Jumlah pengaduan yg sudah dilaporkan</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Tuntas</strong> <br> Jumlah laporan yang sudah ditangani</p>
                  </div>
                </div>


              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>TATA CARA</h2>
          <p>Nah ini dia alur pelaporan yang ada website Suara Anda</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class='bx bxs-edit-alt'></i></div>
              <h4 class="title"><a href="">Kirim Laporan</a></h4>
              <p class="description">Tulis laporan keluhan Anda dengan jelas.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-shuffle"></i></div>
              <h4 class="title"><a href="">Proses Verifikasi</a></h4>
              <p class="description">Tunggu sampai laporan Anda di verifikasi oleh admin.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Tindak Lanjut</a></h4>
              <p class="description">Laporan Anda sedang dalam diproses dan ditindak lanjut.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class='bx bx-check-shield'></i></div>
              <h4 class="title"><a href="">Selesai</a></h4>
              <p class="description">Laporan pengaduan telah selesai ditindak.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    @include('includes.landing.footer')







  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.landing.javascript')

</body>

</html>
=======

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Suara Anda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.svg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">


    <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="font-sans bg-gray-100">

    @include('includes.landing.navbar')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="flex items-center bg-white min-h-screen">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 text-center md:text-left">
                    <h1 class="text-4xl font-bold text-gray-800 leading-snug mb-4" data-aos="fade-up">
                        Layanan Laporan Pelecehan Masyarakat Berbasis Online
                    </h1>
                    <p class="text-lg text-gray-600 mb-6" data-aos="fade-up" data-aos-delay="400">
                        Sampaikan laporan masalah Anda di sini, kami akan memprosesnya dengan cepat, aman dan nyaman.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="{{ route('login')}}" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600">Laporkan!</a>
                        <a href="#services" class="ml-4 bg-gray-300 text-gray-700 px-6 py-3 rounded-lg shadow-md hover:bg-gray-400">Alur Laporan</a>
                    </div>
                </div>
                <div class="md:w-1/2 mt-10 md:mt-0" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/img/hero.svg" alt="Hero Image" class="w-full">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-semibold text-gray-800" data-aos="fade-up">Tentang Kami</h2>
                </div>
                <div class="flex flex-col md:flex-row items-start gap-8">
                    <div class="md:w-1/2" data-aos="fade-up" data-aos-delay="150">
                        <h3 class="text-xl font-semibold mb-4">Suara Anda</h3>
                        <p class="text-gray-600 mb-6">
                            Adalah sistem laporan atau pengaduan terhadap pelecehan seksual baik laki-laki maupun perempuan.
                        </p>
                        <h3 class="text-xl font-semibold mb-4">Tujuan Suara Anda</h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-2">
                            <li>Memberikan informasi mengenai tindakan pencegahan.</li>
                            <li>Mempermudah masyarakat untuk melakukan pelaporan secara cepat.</li>
                        </ul>
                    </div>
                    <div class="md:w-1/2" data-aos="fade-up" data-aos-delay="300">
                        <h4 class="text-lg font-semibold mb-4">Komitmen Kami</h4>
                        <p class="text-gray-600 mb-6">
                            Suara Anda merupakan komitmen kami untuk melayani masyarakat. Dengan hadirnya sistem pelaporan pengaduan online ini, masyarakat dapat mencegah terjadinya kekerasan seksual.
                        </p>
                        <a href="#services" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600">Tata Cara</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div class="p-6 bg-gray-50 shadow rounded-lg" data-aos="fade-up" data-aos-delay="150">
                        <i class="bi bi-emoji-smile text-blue-500 text-3xl mb-4"></i>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">65</h3>
                        <p class="text-gray-600">Pengguna Suara Anda</p>
                    </div>
                    <div class="p-6 bg-gray-50 shadow rounded-lg" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-journal-richtext text-blue-500 text-3xl mb-4"></i>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">85</h3>
                        <p class="text-gray-600">Jumlah Pengaduan</p>
                    </div>
                    <div class="p-6 bg-gray-50 shadow rounded-lg" data-aos="fade-up" data-aos-delay="450">
                        <i class="bi bi-clock text-blue-500 text-3xl mb-4"></i>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">18</h3>
                        <p class="text-gray-600">Laporan Selesai</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-semibold text-gray-800" data-aos="fade-up">Tata Cara</h2>
                    <p class="text-gray-600" data-aos="fade-up" data-aos-delay="200">Nah ini dia alur pelaporan yang ada di website Suara Anda</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="p-6 bg-white shadow rounded-lg" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bxs-edit-alt text-blue-500 text-4xl mb-4"></i>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Kirim Laporan</h4>
                        <p class="text-gray-600">Tulis laporan keluhan Anda dengan jelas.</p>
                    </div>
                    <div class="p-6 bg-white shadow rounded-lg" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-shuffle text-blue-500 text-4xl mb-4"></i>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Proses Verifikasi</h4>
                        <p class="text-gray-600">Tunggu sampai laporan Anda diverifikasi oleh admin.</p>
                    </div>
                    <div class="p-6 bg-white shadow rounded-lg" data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-tachometer text-blue-500 text-4xl mb-4"></i>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Tindak Lanjut</h4>
                        <p class="text-gray-600">Laporan Anda sedang dalam proses tindak lanjut.</p>
                    </div>
                    <div class="p-6 bg-white shadow rounded-lg" data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-check-shield text-blue-500 text-4xl mb-4"></i>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Selesai</h4>
                        <p class="text-gray-600">Laporan pengaduan telah selesai ditindak.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        @include('includes.landing.footer')

    </main>

    <a href="#" class="fixed bottom-4 right-4 bg-blue-500 text-white p-3 rounded-full shadow-lg hover:bg-blue-600"><i class="bi bi-arrow-up-short text-xl"></i></a>

</body>

</html>
>>>>>>> Stashed changes
