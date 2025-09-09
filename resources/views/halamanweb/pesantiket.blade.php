@extends('halamanweb.layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-blue-800 mb-3">Pesan Tiket Kolam Renang</h1>
            <div class="w-32 h-1.5 bg-yellow-400 mx-auto mb-4"></div>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Nikmati pengalaman berenang yang menyenangkan dengan memesan tiket Anda secara online
            </p>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Tiket Options -->
            <div class="lg:w-2/3">
                <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                    <h2 class="text-2xl font-semibold text-blue-700 mb-6">Pilih Jenis Tiket</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Tiket Dewasa -->
                        <div class="border-2 border-blue-100 rounded-lg p-6 hover:border-blue-300 transition duration-300">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold text-blue-800">Tiket Dewasa</h3>
                                <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">Rp 50.000</span>
                            </div>
                            <p class="text-gray-600 mb-4">Untuk pengunjung usia 13 tahun ke atas</p>
                            <div class="flex items-center">
                                <button class="decrement-btn bg-gray-200 text-gray-700 px-3 py-1 rounded-l-lg" data-ticket="dewasa">-</button>
                                <input type="number" id="dewasa-qty" value="0" min="0" class="w-16 text-center border-t border-b border-gray-300 py-1">
                                <button class="increment-btn bg-gray-200 text-gray-700 px-3 py-1 rounded-r-lg" data-ticket="dewasa">+</button>
                            </div>
                        </div>

                        <!-- Tiket Anak -->
                        <div class="border-2 border-blue-100 rounded-lg p-6 hover:border-blue-300 transition duration-300">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold text-blue-800">Tiket Anak</h3>
                                <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">Rp 30.000</span>
                            </div>
                            <p class="text-gray-600 mb-4">Untuk pengunjung usia 3-12 tahun</p>
                            <div class="flex items-center">
                                <button class="decrement-btn bg-gray-200 text-gray-700 px-3 py-1 rounded-l-lg" data-ticket="anak">-</button>
                                <input type="number" id="anak-qty" value="0" min="0" class="w-16 text-center border-t border-b border-gray-300 py-1">
                                <button class="increment-btn bg-gray-200 text-gray-700 px-3 py-1 rounded-r-lg" data-ticket="anak">+</button>
                            </div>
                        </div>

                        <!-- Paket Keluarga -->
                        <div class="border-2 border-blue-100 rounded-lg p-6 hover:border-blue-300 transition duration-300">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold text-blue-800">Paket Keluarga</h3>
                                <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">Rp 120.000</span>
                            </div>
                            <p class="text-gray-600 mb-4">2 Dewasa + 2 Anak (Hemat 20%)</p>
                            <div class="flex items-center">
                                <button class="decrement-btn bg-gray-200 text-gray-700 px-3 py-1 rounded-l-lg" data-ticket="keluarga">-</button>
                                <input type="number" id="keluarga-qty" value="0" min="0" class="w-16 text-center border-t border-b border-gray-300 py-1">
                                <button class="increment-btn bg-gray-200 text-gray-700 px-3 py-1 rounded-r-lg" data-ticket="keluarga">+</button>
                            </div>
                        </div>

                        <!-- Tiket Grup -->
                        <div class="border-2 border-blue-100 rounded-lg p-6 hover:border-blue-300 transition duration-300">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold text-blue-800">Tiket Grup</h3>
                                <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">Rp 35.000/orang</span>
                            </div>
                            <p class="text-gray-600 mb-4">Minimal 10 orang (Diskon 30%)</p>
                            <div class="flex items-center">
                                <button class="decrement-btn bg-gray-200 text-gray-700 px-3 py-1 rounded-l-lg" data-ticket="grup">-</button>
                                <input type="number" id="grup-qty" value="0" min="0" class="w-16 text-center border-t border-b border-gray-300 py-1">
                                <button class="increment-btn bg-gray-200 text-gray-700 px-3 py-1 rounded-r-lg" data-ticket="grup">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Date and Time Selection -->
                <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                    <h2 class="text-2xl font-semibold text-blue-700 mb-6">Pilih Tanggal & Waktu</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="visit-date" class="block text-sm font-medium text-gray-700 mb-2">Tanggal Kunjungan</label>
                            <input type="date" id="visit-date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <div>
                            <label for="visit-time" class="block text-sm font-medium text-gray-700 mb-2">Sesi Waktu</label>
                            <select id="visit-time" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="" disabled selected>Pilih sesi waktu</option>
                                <option value="08:00-10:00">Pagi: 08:00 - 10:00</option>
                                <option value="10:00-12:00">Siang: 10:00 - 12:00</option>
                                <option value="13:00-15:00">Sore: 13:00 - 15:00</option>
                                <option value="15:00-17:00">Sore: 15:00 - 17:00</option>
                                <option value="17:00-19:00">Malam: 17:00 - 19:00</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Customer Information -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-semibold text-blue-700 mb-6">Informasi Pelanggan</h2>
                    
                    <div class="space-y-4">
                        <div>
                            <label for="full-name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" id="full-name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                            <input type="tel" id="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <div>
                            <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Catatan Tambahan (Opsional)</label>
                            <textarea id="notes" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="lg:w-1/3">
                <div class="bg-white rounded-xl shadow-lg sticky top-8">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-2xl font-semibold text-blue-700">Ringkasan Pesanan</h2>
                    </div>
                    
                    <div class="p-6 border-b border-gray-200">
                        <div id="ticket-summary" class="space-y-4">
                            <p class="text-gray-500 text-center py-4">Belum ada tiket dipilih</p>
                        </div>
                        
                        <div class="mt-6 space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal</span>
                                <span id="subtotal" class="font-medium">Rp 0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Pajak (10%)</span>
                                <span id="tax" class="font-medium">Rp 0</span>
                            </div>
                            <div class="flex justify-between text-lg font-bold mt-3 pt-3 border-t border-gray-200">
                                <span>Total Pembayaran</span>
                                <span id="total" class="text-blue-600">Rp 0</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="mb-4">
                            <label for="payment-method" class="block text-sm font-medium text-gray-700 mb-2">Metode Pembayaran</label>
                            <select id="payment-method" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="transfer">Transfer Bank</option>
                                <option value="credit-card">Kartu Kredit/Debit</option>
                                <option value="e-wallet">E-Wallet (OVO/Gopay/Dana)</option>
                                <option value="cash">Bayar di Tempat</option>
                            </select>
                        </div>
                        
                        <div class="flex items-center mb-6">
                            <input id="terms" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="terms" class="ml-2 block text-sm text-gray-700">
                                Saya menyetujui <a href="#" class="text-blue-600 hover:underline">syarat & ketentuan</a>
                            </label>
                        </div>
                        
                        <button id="checkout-btn" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300 shadow-md hover:shadow-lg disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                            Lanjutkan Pembayaran
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-xl p-8 max-w-md w-full mx-4">
        <div class="text-center">
            <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-4">
                <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">Pembayaran Berhasil!</h3>
            <p class="text-gray-600 mb-6">
                Tiket Anda telah berhasil dipesan. Detail tiket telah dikirim ke email Anda.
            </p>
            <div class="bg-gray-50 p-4 rounded-lg mb-6 text-left">
                <h4 class="font-bold text-gray-800 mb-2">Detail Pesanan:</h4>
                <div id="order-details" class="text-sm text-gray-600 space-y-1"></div>
            </div>
            <button id="print-ticket" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 mb-3">
                Cetak Tiket
            </button>
            <button id="close-modal" class="w-full bg-white hover:bg-gray-100 text-gray-800 font-bold py-2 px-4 border border-gray-300 rounded-lg transition duration-300">
                Tutup
            </button>
        </div>
    </div>
</div>

@section('scripts')
<script>
    // Ticket Prices
    const ticketPrices = {
        dewasa: 50000,
        anak: 30000,
        keluarga: 120000,
        grup: 35000
    };

    // Ticket Details
    const ticketDetails = {
        dewasa: "Tiket Dewasa",
        anak: "Tiket Anak",
        keluarga: "Paket Keluarga",
        grup: "Tiket Grup"
    };

    // Initialize order data
    let order = {
        tickets: {},
        date: "",
        time: "",
        customer: {},
        subtotal: 0,
        tax: 0,
        total: 0
    };

    // Increment ticket quantity
    document.querySelectorAll('.increment-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const ticketType = this.getAttribute('data-ticket');
            const input = document.getElementById(`${ticketType}-qty`);
            input.value = parseInt(input.value) + 1;
            updateOrder();
        });
    });

    // Decrement ticket quantity
    document.querySelectorAll('.decrement-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const ticketType = this.getAttribute('data-ticket');
            const input = document.getElementById(`${ticketType}-qty`);
            if (parseInt(input.value) > 0) {
                input.value = parseInt(input.value) - 1;
                updateOrder();
            }
        });
    });

    // Manual quantity input
    document.querySelectorAll('input[type="number"]').forEach(input => {
        input.addEventListener('change', function() {
            if (parseInt(this.value) < 0) this.value = 0;
            updateOrder();
        });
    });

    // Date and time selection
    document.getElementById('visit-date').addEventListener('change', function() {
        order.date = this.value;
        updateCheckoutButton();
    });

    document.getElementById('visit-time').addEventListener('change', function() {
        order.time = this.value;
        updateCheckoutButton();
    });

    // Customer information
    document.getElementById('full-name').addEventListener('input', function() {
        order.customer.name = this.value;
        updateCheckoutButton();
    });

    document.getElementById('email').addEventListener('input', function() {
        order.customer.email = this.value;
        updateCheckoutButton();
    });

    document.getElementById('phone').addEventListener('input', function() {
        order.customer.phone = this.value;
        updateCheckoutButton();
    });

    // Terms checkbox
    document.getElementById('terms').addEventListener('change', function() {
        updateCheckoutButton();
    });

    // Update order summary
    function updateOrder() {
        order.tickets = {};
        order.subtotal = 0;
        
        // Get all ticket quantities
        Object.keys(ticketPrices).forEach(ticketType => {
            const qty = parseInt(document.getElementById(`${ticketType}-qty`).value);
            if (qty > 0) {
                order.tickets[ticketType] = qty;
                
                // Calculate subtotal
                if (ticketType === 'grup' && qty >= 10) {
                    order.subtotal += qty * (ticketPrices[ticketType] * 0.7); // 30% discount
                } else {
                    order.subtotal += qty * ticketPrices[ticketType];
                }
            }
        });
        
        // Calculate tax and total
        order.tax = order.subtotal * 0.1;
        order.total = order.subtotal + order.tax;
        
        // Update UI
        updateTicketSummary();
        updateTotals();
        updateCheckoutButton();
    }

    // Update ticket summary in the order panel
    function updateTicketSummary() {
        const ticketSummary = document.getElementById('ticket-summary');
        ticketSummary.innerHTML = '';
        
        if (Object.keys(order.tickets).length === 0) {
            ticketSummary.innerHTML = '<p class="text-gray-500 text-center py-4">Belum ada tiket dipilih</p>';
            return;
        }
        
        Object.keys(order.tickets).forEach(ticketType => {
            const qty = order.tickets[ticketType];
            let price = ticketPrices[ticketType];
            let total = qty * price;
            
            // Apply group discount if applicable
            if (ticketType === 'grup' && qty >= 10) {
                total = qty * (price * 0.7);
                price = price * 0.7;
            }
            
            const ticketDiv = document.createElement('div');
            ticketDiv.className = 'flex justify-between items-center';
            ticketDiv.innerHTML = `
                <div>
                    <p class="font-medium">${ticketDetails[ticketType]}</p>
                    <p class="text-sm text-gray-500">${qty} x Rp ${price.toLocaleString('id-ID')}</p>
                </div>
                <span class="font-medium">Rp ${total.toLocaleString('id-ID')}</span>
            `;
            ticketSummary.appendChild(ticketDiv);
        });
    }

    // Update totals in the order panel
    function updateTotals() {
        document.getElementById('subtotal').textContent = `Rp ${order.subtotal.toLocaleString('id-ID')}`;
        document.getElementById('tax').textContent = `Rp ${order.tax.toLocaleString('id-ID')}`;
        document.getElementById('total').textContent = `Rp ${order.total.toLocaleString('id-ID')}`;
    }

    // Enable/disable checkout button based on form completion
    function updateCheckoutButton() {
        const checkoutBtn = document.getElementById('checkout-btn');
        const hasTickets = Object.keys(order.tickets).length > 0;
        const hasDate = order.date !== "";
        const hasTime = order.time !== "";
        const hasName = order.customer.name && order.customer.name.length > 0;
        const hasEmail = order.customer.email && order.customer.email.length > 0;
        const hasPhone = order.customer.phone && order.customer.phone.length > 0;
        const termsChecked = document.getElementById('terms').checked;
        
        checkoutBtn.disabled = !(hasTickets && hasDate && hasTime && hasName && hasEmail && hasPhone && termsChecked);
    }

    // Checkout button click handler
    document.getElementById('checkout-btn').addEventListener('click', function() {
        // In a real app, you would process payment here
        // For demo, we'll just show the success modal
        
        // Prepare order details for modal
        const orderDetails = document.getElementById('order-details');
        orderDetails.innerHTML = '';
        
        // Add tickets to order details
        Object.keys(order.tickets).forEach(ticketType => {
            const qty = order.tickets[ticketType];
            const itemDiv = document.createElement('div');
            itemDiv.className = 'flex justify-between';
            itemDiv.innerHTML = `
                <span>${ticketDetails[ticketType]}</span>
                <span>${qty} x Rp ${ticketPrices[ticketType].toLocaleString('id-ID')}</span>
            `;
            orderDetails.appendChild(itemDiv);
        });
        
        // Add date and time
        const dateDiv = document.createElement('div');
        dateDiv.className = 'flex justify-between mt-2 pt-2 border-t border-gray-200';
        dateDiv.innerHTML = `
            <span class="font-medium">Tanggal</span>
            <span>${order.date}</span>
        `;
        orderDetails.appendChild(dateDiv);
        
        const timeDiv = document.createElement('div');
        timeDiv.className = 'flex justify-between';
        timeDiv.innerHTML = `
            <span class="font-medium">Waktu</span>
            <span>${order.time}</span>
        `;
        orderDetails.appendChild(timeDiv);
        
        // Add total
        const totalDiv = document.createElement('div');
        totalDiv.className = 'flex justify-between mt-2 pt-2 border-t border-gray-200 font-bold';
        totalDiv.innerHTML = `
            <span>Total</span>
            <span>Rp ${order.total.toLocaleString('id-ID')}</span>
        `;
        orderDetails.appendChild(totalDiv);
        
        // Show modal
        document.getElementById('success-modal').classList.remove('hidden');
    });

    // Close modal button
    document.getElementById('close-modal').addEventListener('click', function() {
        document.getElementById('success-modal').classList.add('hidden');
    });

    // Print ticket button (demo functionality)
    document.getElementById('print-ticket').addEventListener('click', function() {
        alert('Fungsi cetak tiket akan membuka halaman cetak atau mengunduh PDF di implementasi nyata.');
    });

    // Initialize with current date as minimum
    document.addEventListener('DOMContentLoaded', function() {
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('visit-date').min = today;
    });
</script>
@endsection
@endsection