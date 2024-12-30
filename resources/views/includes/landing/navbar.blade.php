<!-- ======= Header ======= -->
<<<<<<< Updated upstream
<header id="header" class="fixed-top">
  <div class="container d-flex justify-content-between align-items-center">

    <div class="logo d-flex align-items-center">
      <img src="assets/img/logo.svg" class="img-fluid me-2" alt="Logo">
      <h1 class="m-0"><a href="index.html" class="text-white text-decoration-none">Suara Anda</a></h1>
    </div>

    <nav id="navbar" class="navbar navbar-expand-lg">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="#hero">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#about">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#artikel">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light me-2" href="{{ url('login') }}">Masuk</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" href="{{ url('register') }}">Daftar</a>
          </li>
        </ul>
      </div>
    </nav>

  </div>
</header><!-- End Header -->

<style>
  .logo {
    display: flex;
    align-items: center;
  }

  .logo img {
    height: 40px;
    width: auto;
  }

  .logo h1 {
    font-size: 1.5rem;
    margin: 0;
  }

  .navbar-nav .nav-link {
    margin-right: 15px;
    font-size: 1rem;
  }

  .navbar-nav .btn {
    margin-left: 15px;
    padding: 5px 15px;
  }

  .navbar-toggler {
    border: none;
  }

  @media (max-width: 768px) {
    .navbar-nav {
      text-align: center;
    }

    .navbar-nav .btn {
      margin: 5px 0;
      width: 100%;
    }
  }
</style>

<!-- Add Bootstrap JS and CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
=======
<header id="header" class="fixed top-0 w-full bg-gray-900 text-white shadow-lg z-50">
  <div class="container mx-auto flex justify-between items-center py-4 px-6">

    <div class="logo flex items-center">
      <img src="assets/img/logo.svg" class="h-10 w-auto mr-3" alt="Logo">
      <h1 class="text-xl font-bold m-0"><a href="index.html" class="text-white hover:text-blue-500">Suara Anda</a></h1>
    </div>

    <nav id="navbar" class="hidden md:flex items-center space-x-6">
      <a class="hover:text-blue-500" href="#hero">Home</a>
      <a class="hover:text-blue-500" href="#about">Tentang Kami</a>
      <a class="hover:text-blue-500" href="#artikel">Artikel</a>
      <a href="{{ url('login') }}" class="border border-white text-white px-4 py-2 rounded hover:bg-gray-700">Masuk</a>
      <a href="{{ url('register') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Daftar</a>
    </nav>

    <!-- Mobile Menu Toggle -->
    <button id="mobile-menu-toggle" class="md:hidden text-white focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden bg-gray-800 text-white md:hidden">
    <a href="#hero" class="block py-2 px-4 hover:bg-gray-700">Home</a>
    <a href="#about" class="block py-2 px-4 hover:bg-gray-700">Tentang Kami</a>
    <a href="#artikel" class="block py-2 px-4 hover:bg-gray-700">Artikel</a>
    <a href="{{ url('login') }}" class="block py-2 px-4 border-t border-gray-700 hover:bg-gray-700">Masuk</a>
    <a href="{{ url('register') }}" class="block py-2 px-4 bg-blue-500 hover:bg-blue-600">Daftar</a>
  </div>
</header>
<!-- End Header -->

<script>
  // Toggle Mobile Menu
  document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  });
</script>

<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
>>>>>>> Stashed changes
