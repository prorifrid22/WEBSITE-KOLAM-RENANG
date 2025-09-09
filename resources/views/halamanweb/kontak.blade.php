@extends('halamanweb.layouts.app')

@section('content')
<br><br>

    <!-- Section Kontak -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Form Kontak -->
                <div class="bg-blue-50 p-8 rounded-xl shadow-inner">
                    <h2 class="text-2xl font-bold text-blue-800 mb-6">Kirim Pesan</h2>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" name="email" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                            <select id="subject" name="subject" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Pilih subjek...</option>
                                <option value="info">Informasi Umum</option>
                                <option value="booking">Pertanyaan Booking</option>
                                <option value="event">Penyewaan Acara</option>
                                <option value="complaint">Keluhan/Saran</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                            <textarea id="message" name="message" rows="4" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-6 rounded-md transition duration-300 flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
                        </button>
                    </form>
                </div>

                <!-- Info Kontak -->
                <div>
                    <h2 class="text-2xl font-bold text-blue-800 mb-6">Informasi Kontak</h2>
                    <div class="space-y-6">
                        <!-- Card Alamat -->
                        <div class="contact-card bg-white p-6 rounded-xl shadow-md border-l-4 border-yellow-400">
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-blue-800 mb-2">Alamat</h3>
                                    <p class="text-gray-600">Jl. Tirta Raya No. 123, Jakarta Selatan</p>
                                    <p class="text-gray-600">DKI Jakarta 12520, Indonesia</p>
                                    <a href="https://maps.google.com/?q=Tirta+Kolam+Renang" target="_blank" class="inline-block mt-3 text-blue-600 hover:text-yellow-500 text-sm font-medium">
                                        <i class="fas fa-map-marked-alt mr-1"></i> Lihat di Peta
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Card Telepon -->
                        <div class="contact-card bg-white p-6 rounded-xl shadow-md border-l-4 border-yellow-400">
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-phone-alt text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-blue-800 mb-2">Telepon</h3>
                                    <p class="text-gray-600">(021) 1234-5678</p>
                                    <p class="text-gray-600">+62 812-3456-7890 (WhatsApp)</p>
                                    <div class="flex space-x-3 mt-3">
                                        <a href="tel:+622112345678" class="bg-blue-100 hover:bg-blue-200 text-blue-800 px-3 py-1 rounded-full text-sm flex items-center transition duration-300">
                                            <i class="fas fa-phone mr-1"></i> Telepon
                                        </a>
                                        <a href="https://wa.me/6281234567890" target="_blank" class="bg-green-100 hover:bg-green-200 text-green-800 px-3 py-1 rounded-full text-sm flex items-center transition duration-300">
                                            <i class="fab fa-whatsapp mr-1"></i> WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Email & Jam Operasional -->
                        <div class="contact-card bg-white p-6 rounded-xl shadow-md border-l-4 border-yellow-400">
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-envelope text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-blue-800 mb-2">Email & Jam Operasional</h3>
                                    <p class="text-gray-600 mb-2">
                                        <i class="fas fa-envelope mr-2 text-blue-500"></i> info@tirta.com
                                    </p>
                                    <p class="text-gray-600 mb-1">
                                        <i class="fas fa-clock mr-2 text-blue-500"></i> Senin-Jumat: 06.00 - 21.00 WIB
                                    </p>
                                    <p class="text-gray-600">
                                        <i class="fas fa-clock mr-2 text-blue-500"></i> Sabtu-Minggu: 07.00 - 22.00 WIB
                                    </p>
                                    <a href="mailto:info@tirta.com" class="inline-block mt-3 bg-blue-100 hover:bg-blue-200 text-blue-800 px-3 py-1 rounded-full text-sm flex items-center transition duration-300">
                                        <i class="fas fa-paper-plane mr-1"></i> Kirim Email
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sosial Media -->
                    <div class="mt-8">
                        <h3 class="text-lg font-bold text-blue-800 mb-4">Ikuti Kami</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-pink-600 hover:bg-pink-700 text-white w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-blue-400 hover:bg-blue-500 text-white w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-red-600 hover:bg-red-700 text-white w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="bg-gray-800 hover:bg-black text-white w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Peta Lokasi -->
    <div class="py-16 bg-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-blue-800 mb-4">Lokasi Kami</h2>
                <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Kunjungi kolam renang Tirta di lokasi strategis dengan fasilitas parkir yang luas</p>
            </div>
            
            <div class="rounded-xl overflow-hidden shadow-xl border border-gray-200">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613506394!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x9bf7e8a6ab2a753c!2sTirta%20Kolam%20Renang!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        class="rounded-xl"
                        title="Lokasi Tirta Kolam Renang">
                </iframe>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="relative py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl font-extrabold mb-6">Punya Pertanyaan?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Tim customer service kami siap membantu Anda 7 hari seminggu</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="tel:+622112345678" class="inline-block bg-white hover:bg-gray-100 text-blue-800 font-bold py-3 px-8 rounded-lg text-lg transition duration-300 shadow-lg transform hover:scale-105">
                    <i class="fas fa-phone-alt mr-2"></i> Hubungi Kami
                </a>
                <a href="tickets.html" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-bold py-3 px-8 rounded-lg text-lg transition duration-300 shadow-lg transform hover:scale-105">
                    <i class="fas fa-ticket-alt mr-2"></i> Pesan Tiket
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-20 bg-yellow-300 opacity-10"></div>
    </div>
    @endsection