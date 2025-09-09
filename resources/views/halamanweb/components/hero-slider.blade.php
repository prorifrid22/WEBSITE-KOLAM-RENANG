@php
    $slides = [
        [
            'image' => asset('images/slide1.png'),
            'title' => 'Kolam Renang Premium',
            'subtitle' => 'Untuk Keluarga Anda',
            'description' => 'Nikmati pengalaman berenang terbaik dengan fasilitas lengkap dan air yang selalu jernih. Tempat yang sempurna untuk bersantai dan berolahraga.'
        ],
        [
            'image' => asset('images/slide2.png'),
            'title' => 'Fasilitas Lengkap',
            'subtitle' => 'Untuk Semua Usia',
            'description' => 'Dari kolam anak yang aman hingga kolam olimpiade untuk profesional, kami memiliki semua yang Anda butuhkan.'
        ],
        [
            'image' => asset('images/slide3.png'),
            'title' => 'Jacuzzi & Sauna',
            'subtitle' => 'Rileksasi Maksimal',
            'description' => 'Nikmati fasilitas Jacuzzi hangat dan ruang sauna yang nyaman setelah berenang.'
        ]
    ];
@endphp

<div class="relative h-screen pt-16 text-white overflow-hidden"
     x-data="{
         currentSlide: 0,
         slides: {{ json_encode($slides) }},
         next() {
             this.currentSlide = (this.currentSlide + 1) % this.slides.length;
         },
         prev() {
             this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
         }
     }"
     x-init="setInterval(() => next(), 5000)">
    
    <!-- Navigation Arrows -->
    <button @click="prev()" class="absolute left-4 top-1/2 z-20 -translate-y-1/2 bg-white/30 hover:bg-white/50 text-white rounded-full w-12 h-12 flex items-center justify-center transition-all">
        <i class="fas fa-chevron-left text-2xl"></i>
    </button>
    
    <button @click="next()" class="absolute right-4 top-1/2 z-20 -translate-y-1/2 bg-white/30 hover:bg-white/50 text-white rounded-full w-12 h-12 flex items-center justify-center transition-all">
        <i class="fas fa-chevron-right text-2xl"></i>
    </button>
    
    <!-- Full-width background slides -->
    <div class="absolute inset-0 z-0">
        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="currentSlide === index"
                 x-transition:enter="transition ease-out duration-1000"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-1000"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="absolute inset-0 bg-cover bg-center"
                 :style="'background-image: url(' + slide.image + ')'">
                <div class="absolute inset-0 bg-blue-900/70"></div>
            </div>
        </template>
    </div>
    
    <!-- Content overlay -->
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                <div class="mb-12 lg:mb-0">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-extrabold mb-6">
                            <span class="block text-yellow-300" x-text="slides[currentSlide].title"></span>
                            <span class="block" x-text="slides[currentSlide].subtitle"></span>
                        </h1>
                        <p class="text-lg mb-8 text-blue-100" x-text="slides[currentSlide].description"></p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-bold py-3 px-6 rounded-lg text-center transition duration-300">
                                <i class="fas fa-ticket-alt mr-2"></i> Pesan Tiket
                            </a>
                            <a href="#" class="border-2 border-white hover:bg-white/20 text-white font-bold py-3 px-6 rounded-lg text-center transition duration-300">
                                <i class="fas fa-images mr-2"></i> Lihat Galeri
                            </a>
                        </div>
                    </div>
                    
                    <!-- Dot indicators (optional) -->
                    <div class="flex mt-8 space-x-2 justify-center lg:justify-start">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="currentSlide = index"
                                    class="w-3 h-3 rounded-full transition-colors"
                                    :class="{'bg-yellow-400': currentSlide === index, 'bg-white/50': currentSlide !== index}">
                            </button>
                        </template>
                    </div>
                </div>
                
                <!-- Empty div to maintain grid layout -->
                <div class="relative"></div>
            </div>
        </div>
    </div>
</div>