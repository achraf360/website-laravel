<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-raleway">
  <div class="min-h-screen bg-gray-100">
    @include('layouts.client_navigation')

    <!-- Page Heading -->
    @if (isset($header))
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
      </div>
    </header>
    @endif

    <!-- Page Content -->
    <main class="overflow-x-hidden" id="main">
      @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 text-center">
      <p>&copy; {{ date('Y') }} Delis. All rights reserved.</p>
    </footer>
  </div>
</body>

</html>