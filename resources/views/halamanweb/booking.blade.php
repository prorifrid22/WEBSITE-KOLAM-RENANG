@extends('halamanweb.layouts.app')

@section('content')
<br><br>
<div class="min-h-screen bg-blue-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-blue-800 mb-2">Booking Kolam Renang</h1>
            <div class="w-24 h-1 bg-yellow-400 mx-auto"></div>
            <p class="mt-4 text-gray-600">Reservasi waktu berenang Anda dengan mudah dan cepat</p>
        </div>

        <!-- Booking Form -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="md:flex">
                <!-- Form Section -->
                <div class="md:w-2/3 p-8">
                    <h2 class="text-2xl font-semibold text-blue-700 mb-6">Form Pemesanan</h2>
                    
                    <form id="bookingForm">
                        <!-- Personal Information -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-800 mb-4 border-b pb-2">Informasi Pribadi</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                    <input type="text" id="nama" name="nama" required 
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <input type="email" id="email" name="email" required 
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                                <div>
                                    <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                                    <input type="tel" id="telepon" name="telepon" required 
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                                <div>
                                    <label for="jumlah_orang" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Orang</label>
                                    <select id="jumlah_orang" name="jumlah_orang" required 
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="" disabled selected>Pilih jumlah</option>
                                        <option value="1">1 Orang</option>
                                        <option value="2">2 Orang</option>
                                        <option value="3">3 Orang</option>
                                        <option value="4">4 Orang</option>
                                        <option value="5">5+ Orang</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Booking Details -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-800 mb-4 border-b pb-2">Detail Booking</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                                    <input type="date" id="tanggal" name="tanggal" required 
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                                <div>
                                    <label for="waktu" class="block text-sm font-medium text-gray-700 mb-1">Waktu</label>
                                    <select id="waktu" name="waktu" required 
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="" disabled selected>Pilih waktu</option>
                                        <option value="08:00-10:00">08:00 - 10:00</option>
                                        <option value="10:00-12:00">10:00 - 12:00</option>
                                        <option value="13:00-15:00">13:00 - 15:00</option>
                                        <option value="15:00-17:00">15:00 - 17:00</option>
                                        <option value="17:00-19:00">17:00 - 19:00</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="tipe_kolam" class="block text-sm font-medium text-gray-700 mb-1">Tipe Kolam</label>
                                    <select id="tipe_kolam" name="tipe_kolam" required 
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="" disabled selected>Pilih kolam</option>
                                        <option value="kolam_standar">Kolam Standar</option>
                                        <option value="kolam_anak">Kolam Anak</option>
                                        <option value="kolam_olahraga">Kolam Olahraga</option>
                                        <option value="paket_keluarga">Paket Keluarga</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="metode_pembayaran" class="block text-sm font-medium text-gray-700 mb-1">Metode Pembayaran</label>
                                    <select id="metode_pembayaran" name="metode_pembayaran" required 
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="" disabled selected>Pilih metode</option>
                                        <option value="transfer_bank">Transfer Bank</option>
                                        <option value="kartu_kredit">Kartu Kredit/Debit</option>
                                        <option value="e_wallet">E-Wallet</option>
                                        <option value="tunai">Bayar di Tempat</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Information -->
                        <div class="mb-6">
                            <label for="catatan" class="block text-sm font-medium text-gray-700 mb-1">Catatan Tambahan (Opsional)</label>
                            <textarea id="catatan" name="catatan" rows="3" 
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>

                        <!-- Terms and Submit -->
                        <div class="flex items-center mb-6">
                            <input id="agree_terms" name="agree_terms" type="checkbox" required 
                                   class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="agree_terms" class="ml-2 block text-sm text-gray-700">
                                Saya menyetujui <a href="#" class="text-blue-600 hover:underline">syarat dan ketentuan</a> yang berlaku
                            </label>
                        </div>

                        <button type="submit" 
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300 shadow-md hover:shadow-lg">
                            Pesan Sekarang
                        </button>
                    </form>
                </div>

                <!-- Summary Section -->
                <div class="md:w-1/3 bg-blue-700 text-white p-8">
                    <h2 class="text-2xl font-semibold mb-6">Ringkasan Booking</h2>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-medium mb-3 border-b border-blue-500 pb-2">Detail Harga</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span>Kolam Standar (1 Orang)</span>
                                <span>Rp 50.000</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Tambahan Orang</span>
                                <span>Rp 0</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Pajak & Layanan</span>
                                <span>Rp 5.000</span>
                            </div>
                            <div class="flex justify-between font-bold text-lg mt-3 pt-3 border-t border-blue-500">
                                <span>Total</span>
                                <span>Rp 55.000</span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-lg font-medium mb-3 border-b border-blue-500 pb-2">Informasi Penting</h3>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-yellow-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Booking dapat dibatalkan maksimal 24 jam sebelumnya</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-yellow-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Harap datang 15 menit sebelum waktu booking</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-yellow-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Bawa bukti booking saat datang</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-blue-800 rounded-lg p-4">
                        <h3 class="font-medium mb-2">Butuh Bantuan?</h3>
                        <p class="text-sm mb-2">Hubungi kami untuk pertanyaan tentang booking:</p>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            <span>0812-3456-7890</span>
                        </div>
                        <div class="flex items-center mt-1">
                            <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <span>booking@kolamrenang.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi -->
<div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
        <div class="text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100 mb-4">
                <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Booking Berhasil!</h3>
            <p class="text-sm text-gray-500 mb-6">
                Terima kasih telah melakukan booking. Detail booking telah dikirim ke email Anda.
            </p>
            <div class="bg-gray-50 p-4 rounded-lg mb-6 text-left">
                <h4 class="font-medium text-gray-800 mb-2">Detail Booking:</h4>
                <p class="text-sm text-gray-600" id="bookingDetails"></p>
            </div>
            <button id="closeModal" type="button" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                Tutup
            </button>
        </div>
    </div>
</div>

@section('scripts')
<script>
    document.getElementById('bookingForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Simpan data form
        const formData = {
            nama: document.getElementById('nama').value,
            tanggal: document.getElementById('tanggal').value,
            waktu: document.getElementById('waktu').value,
            tipe_kolam: document.getElementById('tipe_kolam').value,
            jumlah_orang: document.getElementById('jumlah_orang').value
        };
        
        // Tampilkan detail booking di modal
        const bookingDetails = `
            Nama: ${formData.nama}<br>
            Tanggal: ${formData.tanggal}<br>
            Waktu: ${formData.waktu}<br>
            Tipe Kolam: ${document.getElementById('tipe_kolam').options[document.getElementById('tipe_kolam').selectedIndex].text}<br>
            Jumlah Orang: ${formData.jumlah_orang}
        `;
        
        document.getElementById('bookingDetails').innerHTML = bookingDetails;
        
        // Tampilkan modal
        document.getElementById('successModal').classList.remove('hidden');
        
        // Reset form
        this.reset();
    });
    
    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('successModal').classList.add('hidden');
    });
    
    // Update harga berdasarkan pilihan
    document.getElementById('tipe_kolam').addEventListener('change', function() {
        // Logika update harga bisa ditambahkan di sini
    });
    
    document.getElementById('jumlah_orang').addEventListener('change', function() {
        // Logika update harga untuk tambahan orang bisa ditambahkan di sini
    });
</script>
@endsection
@endsection