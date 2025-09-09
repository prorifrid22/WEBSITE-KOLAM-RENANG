@extends('halamanweb.layouts.app')

@section('content')
<br><br>

<div class="py-16 bg-blue-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl font-bold text-blue-800 mb-4">Informasi Cuaca Saat Ini</h1>
        <p class="text-gray-600 mb-8">Data cuaca langsung untuk wilayah Bandung dan sekitarnya.</p>

        <!-- Widget Cuaca -->
        <div id="weather-widget" class="inline-flex items-center bg-white shadow-md px-5 py-4 rounded-lg border border-blue-200 transition duration-300 mb-6">
            <i id="weather-icon" class="fas fa-sun text-yellow-500 text-3xl mr-4"></i>
            <div class="text-left">
                <div class="text-2xl font-semibold text-blue-800" id="weather-temp">--°C</div>
                <div class="text-sm text-blue-700" id="weather-desc">Memuat...</div>
                <div class="text-xs text-gray-500 mt-1" id="weather-extra">--</div>
            </div>
        </div>

        <!-- Gambar ilustrasi -->
        <div class="mt-8">
            <img src="https://cdn-icons-png.flaticon.com/512/869/869869.png" alt="Cuaca" class="mx-auto w-24 h-24 opacity-70">
        </div>

        <!-- Tombol muat ulang -->
        <div class="mt-6">
            <button onclick="loadWeather()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition">
                Perbarui Data
            </button>
        </div>
    </div>
</div>

<script>
function loadWeather() {
    fetch("https://api.open-meteo.com/v1/forecast?latitude=-6.9147&longitude=107.6098&current_weather=true")
        .then(response => response.json())
        .then(data => {
            const temp = data.current_weather.temperature;
            const wind = data.current_weather.windspeed;
            const code = data.current_weather.weathercode;
            const desc = getWeatherDescription(code);
            const iconClass = getWeatherIcon(code);

            document.getElementById("weather-temp").textContent = `${temp}°C`;
            document.getElementById("weather-desc").textContent = desc;
            document.getElementById("weather-extra").textContent = `Angin: ${wind} km/jam`;
            document.getElementById("weather-icon").className = `fas ${iconClass} text-yellow-500 text-3xl mr-4`;
        })
        .catch(error => {
            console.error("Gagal memuat data cuaca:", error);
            document.getElementById("weather-desc").textContent = "Tidak tersedia";
        });
}

function getWeatherDescription(code) {
    const descriptions = {
        0: "Cerah",
        1: "Sebagian Berawan",
        2: "Berawan",
        3: "Mendung",
        45: "Kabut",
        48: "Kabut Beku",
        51: "Gerimis Ringan",
        53: "Gerimis",
        55: "Gerimis Lebat",
        61: "Hujan Ringan",
        63: "Hujan",
        65: "Hujan Lebat",
        80: "Hujan Ringan",
        81: "Hujan",
        82: "Hujan Lebat"
    };
    return descriptions[code] || "Tidak Diketahui";
}

function getWeatherIcon(code) {
    if ([0].includes(code)) return "fa-sun";
    if ([1, 2].includes(code)) return "fa-cloud-sun";
    if ([3].includes(code)) return "fa-cloud";
    if ([45, 48].includes(code)) return "fa-smog";
    if ([51, 53, 55].includes(code)) return "fa-cloud-rain";
    if ([61, 63, 65, 80, 81, 82].includes(code)) return "fa-cloud-showers-heavy";
    return "fa-question";
}

// Load on page load
document.addEventListener("DOMContentLoaded", loadWeather);
</script>
@endsection
