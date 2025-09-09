@extends('halamanweb.layouts.app')
@section('content')
<br>
<br>
    <!-- Fasilitas Utama -->
    <div class="py-16 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-blue-800 mb-4">Fasilitas Unggulan</h2>
                <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Berbagai fasilitas modern untuk pengalaman berenang terbaik</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Kolam Olimpiade -->
                <div class="facility-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                    <div class="h-48 overflow-hidden">
                        <img src="images/olympic-pool.jpg" alt="Kolam Olimpiade" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                          a  <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <i class="fas fa-swimmer text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800">Kolam Olimpiade</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Kolam standar internasional 50 meter dengan 8 lintasan, kedalaman 2 meter, dan sistem sirkulasi air mutakhir.</p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Panjang 50m, lebar 25m</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Sistem penyaringan air canggih</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Pencahayaan profesional</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kolam Anak -->
                <div class="facility-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                    <div class="h-48 overflow-hidden">
                        <img src="images/kids-pool.jpg" alt="Kolam Anak" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="bg-yellow-100 p-2 rounded-full mr-3">
                                <i class="fas fa-umbrella-beach text-yellow-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800">Kolam Anak</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Area khusus anak dengan kedalaman aman 0.6-0.8 meter dilengkapi berbagai permainan air yang menyenangkan.</p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Water slide mini</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Air mancur interaktif</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Penjaga pantai bersertifikat</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Jacuzzi & Sauna -->
                <div class="facility-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                    <div class="h-48 overflow-hidden">
                        <img src="images/jacuzzi.jpg" alt="Jacuzzi & Sauna" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <i class="fas fa-spa text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800">Jacuzzi & Sauna</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Fasilitas relaksasi premium dengan air hangat bersuhu 38°C dan ruang sauna kayu tradisional.</p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Kapasitas 8 orang</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Sistem hidromassage</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Ruang ganti premium</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kolam Arus -->
                <div class="facility-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                    <div class="h-48 overflow-hidden">
                        <img src="images/lazy-river.jpg" alt="Kolam Arus" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <i class="fas fa-water text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800">Kolam Arus</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Nikmati sensasi berenang mengikuti arus sepanjang 150 meter dengan berbagai tingkat kecepatan.</p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>3 tingkat kecepatan arus</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Kedalaman 1.2 meter</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Area istirahat di sepanjang jalur</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Ruang Ganti -->
                <div class="facility-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                    <div class="h-48 overflow-hidden">
                        <img src="images/locker-room.jpg" alt="Ruang Ganti" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <i class="fas fa-lock text-blue-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800">Ruang Ganti Premium</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Fasilitas kamar mandi dan ruang ganti yang luas dengan locker elektronik dan perlengkapan lengkap.</p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Locker sistem PIN</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Pengering rambut</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Area makeup khusus</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kafe -->
                <div class="facility-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                    <div class="h-48 overflow-hidden">
                        <img src="images/cafe.jpg" alt="Kafe Poolside" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="bg-yellow-100 p-2 rounded-full mr-3">
                                <i class="fas fa-utensils text-yellow-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800">Kafe Poolside</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Tempat bersantai sambil menikmati makanan dan minuman sehat dengan pemandangan kolam renang.</p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Menu sehat dan segar</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Minuman isotonik</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Area teduh dengan bean bag</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fasilitas Tambahan -->
    <div class="py-16 bg-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-blue-800 mb-4">Fasilitas Pendukung</h2>
                <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center p-4">
                    <div class="bg-white p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-3 shadow-md">
                        <i class="fas fa-parking text-blue-500 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-blue-800">Parkir Luas</h3>
                    <p class="text-sm text-gray-600">200+ slot kendaraan</p>
                </div>
                <div class="text-center p-4">
                    <div class="bg-white p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-3 shadow-md">
                        <i class="fas fa-wifi text-blue-500 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-blue-800">WiFi Gratis</h3>
                    <p class="text-sm text-gray-600">High-speed internet</p>
                </div>
                <div class="text-center p-4">
                    <div class="bg-white p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-3 shadow-md">
                        <i class="fas fa-first-aid text-blue-500 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-blue-800">P3K</h3>
                    <p class="text-sm text-gray-600">Tenaga medis stand-by</p>
                </div>
                <div class="text-center p-4">
                    <div class="bg-white p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-3 shadow-md">
                        <i class="fas fa-store text-blue-500 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-blue-800">Toko Perlengkapan</h3>
                    <p class="text-sm text-gray-600">Baju renang & aksesoris</p>
                </div>
            </div>
        </div>
    </div>


   @endsection