<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AquaBlue - Kolam Renang Premium</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Animasi Loading Ombak */
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            flex-direction: column;
        }
        
        .wave-container {
            width: 200px;
            height: 100px;
            position: relative;
            overflow: hidden;
        }
        
        .wave {
            position: absolute;
            width: 200%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="%233b82f6" opacity=".25"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" fill="%233b82f6" opacity=".5"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%233b82f6"/></svg>');
            <img src="{{ asset('images/logo.png') }}" alt="Logo">

            background-repeat: repeat-x;
            background-size: 50% 100px;
            animation: waveAnimation 4s linear infinite;
            bottom: 0;
        }
        
        .wave:nth-child(2) {
            animation: waveAnimation 6s linear infinite;
            opacity: 0.5;
            bottom: 5px;
        }
        
        .wave:nth-child(3) {
            animation: waveAnimation 8s linear infinite;
            opacity: 0.3;
            bottom: 10px;
        }
        
        @keyframes waveAnimation {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        
        /* Efek ombak di navbar */
        .navbar-wave-effect {
            position: relative;
            overflow: hidden;
        }
        
        .navbar-wave-effect::before {
            content: "";
            position: absolute;
            top: -20px;
            left: 0;
            width: 200%;
            height: 60px;
            background-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 60" xmlns="http://www.w3.org/2000/svg"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="%23ffffff" opacity=".2"/></svg>');
            background-repeat: repeat-x;
            background-size: 50% 60px;
            animation: navbarWave 10s linear infinite;
        }
        
        @keyframes navbarWave {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        
        /* Efek gelombang di hero section */
        .wave-shape {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }
        
        .wave-shape svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 150px;
        }
        
        .wave-shape .shape-fill {
            fill: #FEF08A;
        }
        
        /* Animasi ombak di footer */
        .footer-wave {
            position: absolute;
            top: -60px;
            left: 0;
            width: 100%;
            height: 60px;
            background-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 60" xmlns="http://www.w3.org/2000/svg"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="%23FEF08A" opacity=".25"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" fill="%23FEF08A" opacity=".5"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23FEF08A"/></svg>');
            background-repeat: repeat-x;
            background-size: 1200px 60px;
            animation: footerWave 15s linear infinite;
        }
        
        @keyframes footerWave {
            0% {
                background-position-x: 0;
            }
            100% {
                background-position-x: 1200px;
            }
        }
    </style>
</head>
<body class="font-sans bg-blue-50">
    <!-- Loading Animation Ombak -->
    <div class="loader" id="loader">
        <div class="wave-container">
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
        <p class="mt-8 text-blue-600 font-bold text-xl">Memuat..</p>
    </div>

    <!-- Navbar dengan Ombak -->
    <nav class="navbar-wave-effect fixed w-full z-50 bg-blue-500/20 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <span class="text-yellow-300 font-bold text-2xl"><i class="fas fa-swimming-pool mr-2"></i>AquaBlue</span>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#" class="text-yellow-200 hover:bg-blue-600/30 px-3 py-2 rounded-md text-sm font-medium">Beranda</a>
                        <a href="#" class="text-white hover:bg-blue-600/30 px-3 py-2 rounded-md text-sm font-medium">Fasilitas</a>
                        <a href="#" class="text-white hover:bg-blue-600/30 px-3 py-2 rounded-md text-sm font-medium">Harga</a>
                        <a href="#" class="text-white hover:bg-blue-600/30 px-3 py-2 rounded-md text-sm font-medium">Galeri</a>
                        <a href="#" class="text-white hover:bg-blue-600/30 px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button class="text-white hover:text-yellow-200 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-16 pb-32 bg-gradient-to-b from-blue-500 to-blue-700 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                <div class="mb-12 lg:mb-0">
                    <h1 class="text-4xl md:text-5xl font-extrabold mb-6">
                        <span class="block text-yellow-300">Kolam Renang Premium</span>
                        <span class="block">Untuk Keluarga Anda</span>
                    </h1>
                    <p class="text-lg mb-8 text-blue-100">
                        Nikmati pengalaman berenang terbaik dengan fasilitas lengkap dan air yang selalu jernih. Tempat yang sempurna untuk bersantai dan berolahraga.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-bold py-3 px-6 rounded-lg text-center transition duration-300">
                            <i class="fas fa-ticket-alt mr-2"></i> Pesan Tiket
                        </a>
                        <a href="#" class="border-2 border-white hover:bg-white/20 text-white font-bold py-3 px-6 rounded-lg text-center transition duration-300">
                            <i class="fas fa-images mr-2"></i> Lihat Galeri
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1551969014-7d2c4cddf0b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1080&q=80" alt="Kolam Renang AquaBlue" class="rounded-xl shadow-2xl border-4 border-yellow-300 transform rotate-2 hover:rotate-0 transition duration-500">
                    <div class="absolute -bottom-6 -left-6 bg-yellow-300 w-24 h-24 rounded-full z-0"></div>
                    <div class="absolute -top-6 -right-6 bg-blue-300 w-20 h-20 rounded-full z-0"></div>
                </div>
            </div>
        </div>
        
        <!-- Wave Shape -->
        <div class="wave-shape">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <!-- Fasilitas Section -->
    <div class="py-20 bg-yellow-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-blue-800 mb-4">Fasilitas Unggulan Kami</h2>
                <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border-t-4 border-blue-500">
                    <div class="text-blue-500 mb-4 text-4xl">
                        <i class="fas fa-swimmer"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Kolam Renang Olimpiade</h3>
                    <p class="text-gray-600">Kolam dengan panjang 50m dan kedalaman 2m, sempurna untuk latihan serius maupun kompetisi.</p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border-t-4 border-yellow-400">
                    <div class="text-yellow-500 mb-4 text-4xl">
                        <i class="fas fa-umbrella-beach"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Kolam Anak & Rekreasi</h3>
                    <p class="text-gray-600">Area khusus anak dengan kedalaman aman dan berbagai permainan air yang menyenangkan.</p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border-t-4 border-blue-500">
                    <div class="text-blue-500 mb-4 text-4xl">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Jacuzzi & Sauna</h3>
                    <p class="text-gray-600">Rileksasikan tubuh setelah berenang dengan fasilitas Jacuzzi hangat dan ruang sauna yang nyaman.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Harga Tiket -->
    <div class="py-20 bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-yellow-300 mb-4">Paket Harga Tiket</h2>
                <div class="w-20 h-1 bg-white mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white/10 p-8 rounded-xl backdrop-blur-sm border border-blue-400 hover:border-yellow-300 transition duration-300">
                    <h3 class="text-xl font-bold text-yellow-300 mb-3">Reguler</h3>
                    <p class="text-4xl font-bold mb-4">Rp35.000<span class="text-lg font-normal">/orang</span></p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center"><i class="fas fa-check text-yellow-300 mr-2"></i> Akses kolam utama</li>
                        <li class="flex items-center"><i class="fas fa-check text-yellow-300 mr-2"></i> Fasilitas shower</li>
                        <li class="flex items-center"><i class="fas fa-check text-yellow-300 mr-2"></i> Loker penyimpanan</li>
                        <li class="flex items-center text-gray-300"><i class="fas fa-times text-red-300 mr-2"></i> Kolam anak</li>
                        <li class="flex items-center text-gray-300"><i class="fas fa-times text-red-300 mr-2"></i> Jacuzzi & Sauna</li>
                    </ul>
                    <a href="#" class="block text-center bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                        Pesan Sekarang
                    </a>
                </div>
                
                <div class="bg-yellow-400 p-8 rounded-xl shadow-lg border-2 border-yellow-300 transform scale-105 relative">
                    <div class="absolute top-0 right-0 bg-blue-700 text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg">
                        POPULER
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-3">Premium</h3>
                    <p class="text-4xl font-bold mb-4">Rp60.000<span class="text-lg font-normal">/orang</span></p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center"><i class="fas fa-check text-blue-700 mr-2"></i> Akses semua kolam</li>
                        <li class="flex items-center"><i class="fas fa-check text-blue-700 mr-2"></i> Fasilitas shower premium</li>
                        <li class="flex items-center"><i class="fas fa-check text-blue-700 mr-2"></i> Loker penyimpanan</li>
                        <li class="flex items-center"><i class="fas fa-check text-blue-700 mr-2"></i> Kolam anak</li>
                        <li class="flex items-center"><i class="fas fa-check text-blue-700 mr-2"></i> Jacuzzi & Sauna</li>
                    </ul>
                    <a href="#" class="block text-center bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                        Pesan Sekarang
                    </a>
                </div>
                
                <div class="bg-white/10 p-8 rounded-xl backdrop-blur-sm border border-blue-400 hover:border-yellow-300 transition duration-300">
                    <h3 class="text-xl font-bold text-yellow-300 mb-3">Keluarga</h3>
                    <p class="text-4xl font-bold mb-4">Rp150.000<span class="text-lg font-normal">/4 orang</span></p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center"><i class="fas fa-check text-yellow-300 mr-2"></i> Akses semua kolam</li>
                        <li class="flex items-center"><i class="fas fa-check text-yellow-300 mr-2"></i> Fasilitas shower</li>
                        <li class="flex items-center"><i class="fas fa-check text-yellow-300 mr-2"></i> Loker keluarga</li>
                        <li class="flex items-center"><i class="fas fa-check text-yellow-300 mr-2"></i> Kolam anak</li>
                        <li class="flex items-center text-gray-300"><i class="fas fa-times text-red-300 mr-2"></i> Jacuzzi & Sauna</li>
                    </ul>
                    <a href="#" class="block text-center bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimoni -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-blue-800 mb-4">Apa Kata Pengunjung?</h2>
                <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-blue-50 p-8 rounded-xl border-l-4 border-yellow-400">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Testimoni 1" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-blue-800">Sarah Wijaya</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Kolam renang yang sangat bersih dan nyaman. Anak-anak saya sangat menyukai area bermain airnya. Pelayanannya juga ramah dan profesional."</p>
                </div>
                
                <div class="bg-blue-50 p-8 rounded-xl border-l-4 border-yellow-400">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Testimoni 2" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-blue-800">Budi Santoso</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Sebagai perenang kompetitif, saya sangat menghargai kolam olimpiade di AquaBlue. Panjangnya tepat dan airnya selalu dalam kondisi prima untuk latihan."</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="relative py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl font-extrabold mb-6">Siap Berenang Hari Ini?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Dapatkan pengalaman berenang terbaik dengan fasilitas lengkap dan harga terjangkau. Pesan tiket Anda sekarang!</p>
            <a href="#" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-bold py-4 px-8 rounded-lg text-lg transition duration-300 shadow-lg">
                <i class="fas fa-ticket-alt mr-2"></i> Pesan Tiket Online
            </a>
        </div>
        <div class="footer-wave"></div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white pt-12 pb-6 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-yellow-300 font-bold text-xl mb-4"><i class="fas fa-swimming-pool mr-2"></i>AquaBlue</h3>
                    <p class="mb-4">Kolam renang premium dengan fasilitas lengkap untuk keluarga dan atlet.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-yellow-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white hover:text-yellow-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white hover:text-yellow-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white hover:text-yellow-300"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4 text-yellow-300">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-yellow-300 transition duration-300">Beranda</a></li>
                        <li><a href="#" class="hover:text-yellow-300 transition duration-300">Fasilitas</a></li>
                        <li><a href="#" class="hover:text-yellow-300 transition duration-300">Harga Tiket</a></li>
                        <li><a href="#" class="hover:text-yellow-300 transition duration-300">Galeri</a></li>
                        <li><a href="#" class="hover:text-yellow-300 transition duration-300">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4 text-yellow-300">Jam Operasional</h4>
                    <ul class="space-y-2">
                        <li class="flex justify-between"><span>Senin-Jumat</span> <span>06:00 - 21:00</span></li>
                        <li class="flex justify-between"><span>Sabtu-Minggu</span> <span>07:00 - 22:00</span></li>
                        <li class="flex justify-between"><span>Hari Libur</span> <span>07:00 - 23:00</span></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4 text-yellow-300">Kontak Kami</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start"><i class="fas fa-map-marker-alt mt-1 mr-2 text-yellow-300"></i> Jl. Renang Sejahtera No. 123, Jakarta</li>
                        <li class="flex items-start"><i class="fas fa-phone-alt mt-1 mr-2 text-yellow-300"></i> (021) 1234-5678</li>
                        <li class="flex items-start"><i class="fas fa-envelope mt-1 mr-2 text-yellow-300"></i> info@aquablue.com</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-blue-700 pt-6 text-center text-blue-300">
                <p>&copy; 2023 AquaBlue. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simulate loading animation
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('loader').style.opacity = '0';
                setTimeout(function() {
                    document.getElementById('loader').style.display = 'none';
                }, 500);
            }, 500);
        });
    </script>
</body>
</html>