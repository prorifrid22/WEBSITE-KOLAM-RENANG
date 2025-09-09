@extends('halamanweb.layouts.app')

@section('content')
<br><br>

<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-blue-800 mb-4">Galeri Kolam Renang</h2>
            <div class="w-20 h-1 bg-yellow-400 mx-auto"></div>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                Lihat berbagai momen seru dan fasilitas menarik di kolam renang kami.
            </p>
        </div>

        <!-- Filter Kategori -->
        <div class="flex justify-center mb-8">
            <div class="inline-flex rounded-md shadow-sm">
                <button type="button" class="px-4 py-2 text-sm font-medium text-blue-700 bg-blue-100 rounded-l-lg hover:bg-blue-200 focus:z-10 focus:ring-2 focus:ring-blue-700">
                    Semua
                </button>
                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700">
                    Kolam
                </button>
                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700">
                    Fasilitas
                </button>
                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-r-md focus:z-10 focus:ring-2 focus:ring-blue-700">
                    Event
                </button>
            </div>
        </div>

        <!-- Grid Galeri dengan Lightbox -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @php
                $galeri = [
                    [
                        'file' => 'olympic-pool.jpg',
                        'title' => 'Kolam Olimpiade',
                        'category' => 'kolam'
                    ],
                    [
                        'file' => 'kids-pool.jpg',
                        'title' => 'Kolam Anak',
                        'category' => 'kolam'
                    ],
                    [
                        'file' => 'jacuzzi.jpg',
                        'title' => 'Jacuzzi',
                        'category' => 'fasilitas'
                    ],
                    [
                        'file' => 'lazy-river.jpg',
                        'title' => 'Lazy River',
                        'category' => 'kolam'
                    ],
                    [
                        'file' => 'locker-room.jpg',
                        'title' => 'Ruang Ganti',
                        'category' => 'fasilitas'
                    ],
                    [
                        'file' => 'cafe.jpg',
                        'title' => 'Poolside Cafe',
                        'category' => 'fasilitas'
                    ],
                    [
                        'file' => 'family-fun.jpg',
                        'title' => 'Family Fun Day',
                        'category' => 'event'
                    ],
                    [
                        'file' => 'sunset-pool.jpg',
                        'title' => 'Sunset View',
                        'category' => 'kolam'
                    ]
                ];
            @endphp

            @foreach($galeri as $item)
            <div class="gallery-item rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 group relative" data-category="{{ $item['category'] }}">
                <img src="{{ asset('images/' . $item['file']) }}" alt="{{ $item['title'] }}" class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                    <h3 class="text-white font-semibold text-lg">{{ $item['title'] }}</h3>
                </div>
                <a href="{{ asset('images/' . $item['file']) }}" class="absolute inset-0" data-lightbox="gallery" data-title="{{ $item['title'] }}"></a>
            </div>
            @endforeach
        </div>

        <!-- Tombol Lihat Lebih Banyak -->
        <div class="text-center mt-12">
            <button class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300 shadow-md hover:shadow-lg">
                Lihat Lebih Banyak
                <i class="fas fa-arrow-down ml-2"></i>
            </button>
        </div>
    </div>
</div>

<!-- Lightbox Script -->
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script>
    // Filter galeri
    document.querySelectorAll('.filter-button').forEach(button => {
        button.addEventListener('click', function() {
            const category = this.dataset.category;
            document.querySelectorAll('.gallery-item').forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>
@endsection

<!-- Lightbox CSS -->
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
@endsection
@endsection