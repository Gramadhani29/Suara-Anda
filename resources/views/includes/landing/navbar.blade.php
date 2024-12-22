<!-- ======= Header ======= -->
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
