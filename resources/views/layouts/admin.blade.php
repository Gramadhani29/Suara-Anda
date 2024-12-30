<!DOCTYPE html>
<<<<<<< Updated upstream
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title') </title>

  @include('includes.admin.style')
</head>

<body>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    @include('includes.admin.sidebar')
    <div class="flex flex-col flex-1 w-full">

      @include('includes.admin.navbar')

      @yield('content')



      @include('includes.admin.footer')
    </div>
  </div>
  @include('sweetalert::alert')
  @include('includes.admin.script')
</body>

</html>
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    @livewireStyles
    <style>
        .sidebar {
            height: 100vh;
            background-color: #0d1117;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #1c1f26;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar p-3">
            <div class="text-center mb-4">
                <img src="https://via.placeholder.com/80" class="rounded-circle mb-2" alt="Profile Image">
                <h5>Gilang Ramadhani</h5>
            </div>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="#">Pengaduan</a>
            <a href="#">Konseling</a>
            <a href="#">Artikel</a>
            <button class="btn btn-danger w-100 mt-3">Log Out</button>
        </div>

        <!-- Content -->
        <div class="flex-grow-1 content">
            @yield('content')
        </div>
    </div>

    @livewireScripts
</body>
</html>
>>>>>>> Stashed changes
