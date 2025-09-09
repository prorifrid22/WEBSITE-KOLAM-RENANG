<nav class="fixed w-full z-50 bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-blue-600 font-bold text-2xl">
                        <i class="fas fa-swimming-pool mr-2 text-yellow-500"></i>Tirta
                    </span>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-center space-x-4">
                    <!-- Widget Cuaca sebagai Link -->
                    <a href="/cuaca">
                        <div
                            class="flex items-center bg-blue-50 hover:bg-blue-100 px-3 py-1 rounded-full transition duration-300 cursor-pointer mr-2 border border-blue-200">
                            <i class="fas fa-sun text-yellow-500 mr-2"></i>
                            <span class="text-blue-800 text-sm font-medium">28°C</span>
                            <span class="text-blue-800 text-sm ml-1">Cerah</span>
                        </div>
                    </a>

                    <!-- Menu Navigasi -->
                    <a href="/"
                        class="relative group text-blue-800 hover:text-yellow-500 px-3 py-2 rounded-md text-sm font-medium transition">
                        Beranda
                        <span
                            class="absolute left-0 bottom-0 w-0 h-0.5 bg-yellow-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="/fasilitas"
                        class="relative group text-blue-800 hover:text-yellow-500 px-3 py-2 rounded-md text-sm font-medium transition">
                        Fasilitas
                        <span
                            class="absolute left-0 bottom-0 w-0 h-0.5 bg-yellow-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="/galeri"
                        class="relative group text-blue-800 hover:text-yellow-500 px-3 py-2 rounded-md text-sm font-medium transition">
                        Galeri
                        <span
                            class="absolute left-0 bottom-0 w-0 h-0.5 bg-yellow-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="kontak"
                        class="relative group text-blue-800 hover:text-yellow-500 px-3 py-2 rounded-md text-sm font-medium transition">
                        Kontak
                        <span
                            class="absolute left-0 bottom-0 w-0 h-0.5 bg-yellow-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="booking"
                        class="relative group text-blue-800 hover:text-yellow-500 px-3 py-2 rounded-md text-sm font-medium transition">
                        Booking
                        <span
                            class="absolute left-0 bottom-0 w-0 h-0.5 bg-yellow-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>

                    <!-- Tombol Tiket -->
                    <a href="/pesantiket"
                        class="ml-4 bg-yellow-500 hover:bg-yellow-600 text-white font-bold px-4 py-2 rounded-md text-sm transition duration-300 flex items-center shadow-md">
                        <i class="fas fa-ticket-alt mr-2"></i> Pesan Tiket
                    </a>
                </div>
            </div>
            <div class="md:hidden">
                <button class="text-blue-800 hover:text-yellow-500 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>
</nav>

<script>
    // Ganti dengan API key dan lokasi Anda
    const apiKey = 'API_KEY_ANDA';
    const city = 'Jakarta';
    
    fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}&lang=id`)
        .then(response => response.json())
        .then(data => {
            const temp = Math.round(data.main.temp);
            const weather = data.weather[0].description;
            const icon = data.weather[0].main.toLowerCase();
            
            // Update icon berdasarkan kondisi cuaca
            let weatherIcon;
            switch(icon) {
                case 'rain':
                    weatherIcon = 'fa-cloud-rain';
                    break;
                case 'clouds':
                    weatherIcon = 'fa-cloud';
                    break;
                case 'clear':
                    weatherIcon = 'fa-sun';
                    break;
                default:
                    weatherIcon = 'fa-cloud-sun';
            }
            
            document.querySelector('.weather-widget i').className = `fas ${weatherIcon} text-yellow-500 mr-2`;
            document.querySelector('.weather-widget span:first-of-type').textContent = `${temp}°C`;
            document.querySelector('.weather-widget span:last-of-type').textContent = weather;
        })
        .catch(error => {
            console.error('Error fetching weather:', error);
        });
</script>