<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirta - Kolam Renang Premium</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="font-sans bg-blue-50">
    <!-- Loading Animation -->
    <div class="loader" id="loader">
        <div class="animate-pulse flex flex-col items-center">
            <div class="text-4xl text-blue-600 mb-4">
                <i class="fas fa-swimming-pool"></i>
            </div>
            <p class="text-blue-600 font-bold">Tirta Kolam Renang</p>
        </div>
    </div>

    @include('halamanweb.layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('halamanweb.layouts.footer')

    @stack('scripts')
    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6281234567890" target="_blank"
        class="fixed right-6 bottom-6  z-50 bg-green-500 hover:bg-green-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg transition-all duration-300 transform hover:scale-110 group">

        <!-- WhatsApp Icon -->
        <i class="fab fa-whatsapp text-2xl"></i>

        <!-- Tooltip -->
        <span
            class="absolute right-full ml-2 px-2 py-1 bg-gray-800 text-white text-xs rounded whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-200">
            Hubungi Kami
        </span>
    </a>
</body>

</html>