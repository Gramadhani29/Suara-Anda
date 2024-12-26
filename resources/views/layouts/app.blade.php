<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
        <div class="min-h-screen">
            {{-- Navigation --}}
            <livewire:layout.navigation />

            {{-- Page Heading --}}
            @hasSection('header')
                <header class="bg-blue-500 dark:bg-blue-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-white dark:text-gray-200">
                        @yield('header')
                    </div>
                </header>
            @endif

            {{-- Page Content --}}
            <main class="bg-gray dark:bg-gray-800 p-6 rounded-lg shadow-lg mx-auto max-w-7xl mt-6">
                @yield('content')
            </main>
        </div>
    </body>
</html>
