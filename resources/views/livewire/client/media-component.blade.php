<!-- Marquee Animation -->
<style>
    @keyframes marquee {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .animate-marquee {
        display: inline-block;
        animation: marquee 25s linear infinite;
    }
</style>
<div>
    <!-- Media Center Hero -->
    <section id="media" class="relative py-20 bg-gradient-to-br from-rose-800 via-red-700 to-rose-900 overflow-hidden">
        <!-- Background Overlay -->
        <div class="absolute inset-0 opacity-20">
            <img
                src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80"
                alt="Stadium background"
                class="w-full h-full object-cover"
                loading="lazy"
                onerror="this.src='https://images.pexels.com/photos/274506/pexels-photo-274506.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Badge -->
            <div class="mb-8">
                <div class="inline-flex items-center bg-white/20 backdrop-blur-md rounded-full px-6 py-3 border border-white/30 shadow-sm">
                    <svg class="w-5 h-5 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    <span class="text-white font-semibold tracking-wide">PUSAT MEDIA RESMI</span>
                </div>
            </div>

            <!-- Heading -->
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">
                Media Center <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-rose-200">Football Club Pro</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 max-w-3xl mx-auto mb-10">
                Dapatkan berita eksklusif, video highlights, foto-foto terbaik, dan konten behind-the-scenes
                langsung dari dunia <span class="font-semibold text-white">Football Club Pro</span>.
            </p>

            <!-- Quick Stats -->
            <div class="flex flex-wrap justify-center gap-8 md:gap-16 text-white">
                <div class="text-center">
                    <div class="text-4xl font-extrabold font-oswald text-white drop-shadow-sm">250+</div>
                    <div class="text-sm text-gray-300">Artikel Berita</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-extrabold font-oswald text-white drop-shadow-sm">150+</div>
                    <div class="text-sm text-gray-300">Video Highlights</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-extrabold font-oswald text-white drop-shadow-sm">500+</div>
                    <div class="text-sm text-gray-300">Foto Galeri</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breaking News Banner -->
    <section class="relative bg-gradient-to-r from-rose-700 via-red-700 to-rose-800 py-3 overflow-hidden shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center text-white space-x-6">

                <!-- Live Indicator -->
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-white rounded-full animate-ping"></div>
                    <span class="font-semibold tracking-wide">BREAKING NEWS</span>
                </div>

                <!-- Separator -->
                <div class="w-px h-5 bg-white/50"></div>

                <!-- News Marquee -->
                <div class="overflow-hidden relative w-full">
                    <div
                        class="animate-marquee whitespace-nowrap text-sm flex items-center space-x-8">
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 16h-1v-4h-1m2 0V9a1 1 0 00-2 0v3m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Ahmad Rizki Dipanggil ke Timnas Indonesia untuk Kualifikasi Piala Dunia 2026</span>
                            <a href="javascript:void(0)" class="underline hover:no-underline text-xs text-yellow-200">Baca Selengkapnya</a>
                        </div>

                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 16h-1v-4h-1m2 0V9a1 1 0 00-2 0v3m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Pelatih Utama Resmi Umumkan Skuad untuk Laga Derbi Akbar Melawan Persija</span>
                            <a href="javascript:void(0)" class="underline hover:no-underline text-xs text-yellow-200">Baca Selengkapnya</a>
                        </div>

                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-300" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 16h-1v-4h-1m2 0V9a1 1 0 00-2 0v3m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Football Club Pro Luncurkan Jersey Edisi Spesial Ulang Tahun ke-50</span>
                            <a href="javascript:void(0)" class="underline hover:no-underline text-xs text-yellow-200">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Filter Navigation -->
    <section class="py-8 bg-white/90 backdrop-blur-md border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4">
                <!-- Active Button -->
                <button
                    class="filter-btn bg-gradient-to-r from-rose-700 to-red-700 text-white px-6 py-3 rounded-lg font-semibold shadow-md hover:shadow-lg scale-105 transition-all duration-300"
                    onclick="filterContent('all')">
                    Semua Konten
                </button>

                <!-- Other Buttons -->
                <button
                    class="filter-btn bg-gray-100 hover:bg-gradient-to-r hover:from-rose-600 hover:to-red-600 hover:text-white text-gray-700 px-6 py-3 rounded-lg font-semibold border border-gray-200 transition-all duration-300"
                    onclick="filterContent('news')">
                    Berita
                </button>
                <button
                    class="filter-btn bg-gray-100 hover:bg-gradient-to-r hover:from-rose-600 hover:to-red-600 hover:text-white text-gray-700 px-6 py-3 rounded-lg font-semibold border border-gray-200 transition-all duration-300"
                    onclick="filterContent('videos')">
                    Video
                </button>
                <button
                    class="filter-btn bg-gray-100 hover:bg-gradient-to-r hover:from-rose-600 hover:to-red-600 hover:text-white text-gray-700 px-6 py-3 rounded-lg font-semibold border border-gray-200 transition-all duration-300"
                    onclick="filterContent('photos')">
                    Foto
                </button>
                <button
                    class="filter-btn bg-gray-100 hover:bg-gradient-to-r hover:from-rose-600 hover:to-red-600 hover:text-white text-gray-700 px-6 py-3 rounded-lg font-semibold border border-gray-200 transition-all duration-300"
                    onclick="filterContent('interviews')">
                    Wawancara
                </button>
                <button
                    class="filter-btn bg-gray-100 hover:bg-gradient-to-r hover:from-rose-600 hover:to-red-600 hover:text-white text-gray-700 px-6 py-3 rounded-lg font-semibold border border-gray-200 transition-all duration-300"
                    onclick="filterContent('press')">
                    Press Release
                </button>
            </div>
        </div>
    </section>

    <!-- Main Content Grid -->
    <section class="py-16 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Featured Content -->
                <div class="lg:col-span-2">
                    <!-- Featured Article -->
                    <article class="bg-white rounded-xl shadow-subtle overflow-hidden mb-8">
                        <div class="aspect-video overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1579952363873-27d3bfad9c0d?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Featured news" class="w-full h-full object-cover hover:scale-105 transition-smooth"
                                onerror="this.src='https://images.pexels.com/photos/114296/pexels-photo-114296.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        </div>
                        <div class="p-8">
                            <div class="flex items-center mb-4">
                                <span
                                    class="bg-secondary text-white px-3 py-1 rounded-full text-sm font-semibold">BERITA
                                    UTAMA</span>
                                <span class="text-text-secondary text-sm ml-4">2 September 2025 • 09:30 WIB</span>
                            </div>
                            <h2
                                class="text-2xl font-bold text-primary mb-4 hover:text-secondary transition-smooth cursor-pointer">
                                Persiapan Intensif Jelang Laga Besar Melawan Persija Jakarta
                            </h2>
                            <p class="text-text-secondary mb-6 leading-relaxed">
                                Tim Football Club Pro menjalani sesi latihan intensif di fasilitas training center untuk
                                mempersiapkan diri menghadapi laga krusial melawan Persija Jakarta. Pelatih kepala
                                memberikan fokus khusus pada strategi menyerang dan pertahanan yang solid untuk
                                mengamankan tiga poin penuh di kandang sendiri.
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="Author" class="w-10 h-10 rounded-full object-cover"
                                        onerror="this.src='https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                                    <div class="ml-3">
                                        <div class="text-sm font-semibold text-primary">Andi Setiawan</div>
                                        <div class="text-xs text-text-secondary">Sports Journalist</div>
                                    </div>
                                </div>
                                <a href="javascript:void(0)"
                                    class="text-secondary hover:text-secondary-700 font-semibold text-sm">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Latest News Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- News Item 1 -->
                        <article
                            class="bg-white rounded-xl shadow-subtle overflow-hidden hover:shadow-elevation transition-smooth">
                            <div class="aspect-video overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="News thumbnail"
                                    class="w-full h-full object-cover hover:scale-105 transition-smooth"
                                    onerror="this.src='https://images.pixabay.com/photo-2016/11/29/13/14/attractive-1869761_1280.jpg'; this.onerror=null;" />
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <span
                                        class="bg-success text-white px-2 py-1 rounded text-xs font-semibold">TRANSFER</span>
                                    <span class="text-text-secondary text-xs ml-3">1 September 2025</span>
                                </div>
                                <h3
                                    class="text-lg font-bold text-primary mb-3 line-clamp-2 hover:text-secondary transition-smooth cursor-pointer">
                                    Kontrak Baru Carlos Silva Diperpanjang Hingga 2027
                                </h3>
                                <p class="text-text-secondary text-sm line-clamp-3 mb-4">
                                    Bek andalan Football Club Pro, Carlos Silva, resmi memperpanjang kontraknya dengan
                                    klub hingga tahun 2027. Keputusan ini menunjukkan komitmen jangka panjang...
                                </p>
                                <a href="javascript:void(0)"
                                    class="text-secondary hover:text-secondary-700 font-semibold text-sm">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </article>

                        <!-- News Item 2 -->
                        <article
                            class="bg-white rounded-xl shadow-subtle overflow-hidden hover:shadow-elevation transition-smooth">
                            <div class="aspect-video overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1522778119026-d647f0596c20?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="News thumbnail"
                                    class="w-full h-full object-cover hover:scale-105 transition-smooth"
                                    onerror="this.src='https://images.pexels.com/photos/274506/pexels-photo-274506.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <span
                                        class="bg-accent text-primary px-2 py-1 rounded text-xs font-semibold">PRESTASI</span>
                                    <span class="text-text-secondary text-xs ml-3">31 Agustus 2025</span>
                                </div>
                                <h3
                                    class="text-lg font-bold text-primary mb-3 line-clamp-2 hover:text-secondary transition-smooth cursor-pointer">
                                    Akademi Muda Raih Juara Turnamen U-17 Regional
                                </h3>
                                <p class="text-text-secondary text-sm line-clamp-3 mb-4">
                                    Tim akademi U-17 Football Club Pro berhasil meraih gelar juara dalam turnamen
                                    regional dengan mengalahkan tim-tim terbaik se-Jawa...
                                </p>
                                <a href="javascript:void(0)"
                                    class="text-secondary hover:text-secondary-700 font-semibold text-sm">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </article>
                    </div>

                    <!-- Video Highlights Section -->
                    <div class="bg-white rounded-xl shadow-subtle p-8 mb-8">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-2xl font-bold text-primary">Video Highlights Terbaru</h2>
                            <a href="javascript:void(0)"
                                class="text-secondary hover:text-secondary-700 font-semibold text-sm">Lihat Semua
                                Video</a>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Video 1 -->
                            <div class="relative group cursor-pointer">
                                <div class="aspect-video overflow-hidden rounded-lg">
                                    <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="Video thumbnail"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-smooth"
                                        onerror="this.src='https://images.pexels.com/photos/274506/pexels-photo-274506.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                                    <div
                                        class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-smooth">
                                    </div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div
                                            class="bg-white/90 rounded-full p-4 group-hover:bg-white transition-smooth">
                                            <svg class="w-8 h-8 text-primary" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div
                                        class="absolute bottom-4 right-4 bg-black/70 text-white px-2 py-1 rounded text-sm">
                                        05:32
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h3
                                        class="font-bold text-primary mb-2 group-hover:text-secondary transition-smooth">
                                        Highlights: Football Club Pro vs Bali United (3-1)
                                    </h3>
                                    <p class="text-text-secondary text-sm">29 Agustus 2025 • 156K views</p>
                                </div>
                            </div>

                            <!-- Video 2 -->
                            <div class="relative group cursor-pointer">
                                <div class="aspect-video overflow-hidden rounded-lg">
                                    <img src="https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="Video thumbnail"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-smooth"
                                        onerror="this.src='https://images.pixabay.com/photo-2016/11/29/13/14/attractive-1869761_1280.jpg'; this.onerror=null;" />
                                    <div
                                        class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-smooth">
                                    </div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div
                                            class="bg-white/90 rounded-full p-4 group-hover:bg-white transition-smooth">
                                            <svg class="w-8 h-8 text-primary" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div
                                        class="absolute bottom-4 right-4 bg-black/70 text-white px-2 py-1 rounded text-sm">
                                        12:45
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h3
                                        class="font-bold text-primary mb-2 group-hover:text-secondary transition-smooth">
                                        Behind The Scenes: Persiapan Tim Jelang Derby
                                    </h3>
                                    <p class="text-text-secondary text-sm">1 September 2025 • 89K views</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-8">
                    <!-- Newsletter Signup -->
                    <div class="bg-gradient-championship rounded-xl p-6 text-white">
                        <div class="text-center mb-6">
                            <svg class="w-12 h-12 text-white mx-auto mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <h3 class="text-xl font-bold mb-2">Newsletter Eksklusif</h3>
                            <p class="text-gray-200 text-sm">
                                Dapatkan berita terbaru, konten eksklusif, dan update langsung ke email Anda
                            </p>
                        </div>
                        <form class="space-y-4">
                            <input type="email" placeholder="Alamat email Anda"
                                class="w-full px-4 py-3 rounded-lg text-primary placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white" />
                            <button type="submit"
                                class="w-full bg-white text-primary font-semibold py-3 rounded-lg hover:bg-gray-100 transition-smooth">
                                Berlangganan Sekarang
                            </button>
                        </form>
                        <p class="text-xs text-gray-300 mt-4 text-center">
                            Dengan berlangganan, Anda menyetujui kebijakan privasi kami
                        </p>
                    </div>

                    <!-- Latest News Sidebar -->
                    <div class="bg-white rounded-xl shadow-subtle p-6">
                        <h3 class="text-xl font-bold text-primary mb-6">Berita Terpopuler</h3>
                        <div class="space-y-6">
                            <!-- Popular News 1 -->
                            <article class="flex space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1594736797933-d0401ba2fe65?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="News thumbnail" class="w-20 h-16 rounded-lg object-cover"
                                        onerror="this.src='https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4
                                        class="text-sm font-semibold text-primary line-clamp-2 mb-1 hover:text-secondary transition-smooth cursor-pointer">
                                        Ahmad Rizki Cetak Hat-trick dalam Laga Uji Coba
                                    </h4>
                                    <p class="text-xs text-text-secondary mb-2">30 Agustus 2025</p>
                                    <div class="flex items-center text-xs text-text-secondary">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>12.5K views</span>
                                    </div>
                                </div>
                            </article>

                            <!-- Popular News 2 -->
                            <article class="flex space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="News thumbnail" class="w-20 h-16 rounded-lg object-cover"
                                        onerror="this.src='https://images.pixabay.com/photo-2016/11/29/13/14/attractive-1869761_1280.jpg'; this.onerror=null;" />
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4
                                        class="text-sm font-semibold text-primary line-clamp-2 mb-1 hover:text-secondary transition-smooth cursor-pointer">
                                        Renovasi Stadion Capai Progress 85%
                                    </h4>
                                    <p class="text-xs text-text-secondary mb-2">29 Agustus 2025</p>
                                    <div class="flex items-center text-xs text-text-secondary">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>8.9K views</span>
                                    </div>
                                </div>
                            </article>

                            <!-- Popular News 3 -->
                            <article class="flex space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="News thumbnail" class="w-20 h-16 rounded-lg object-cover"
                                        onerror="this.src='https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4
                                        class="text-sm font-semibold text-primary line-clamp-2 mb-1 hover:text-secondary transition-smooth cursor-pointer">
                                        Program CSR Bangun Lapangan Mini di 5 Desa
                                    </h4>
                                    <p class="text-xs text-text-secondary mb-2">28 Agustus 2025</p>
                                    <div class="flex items-center text-xs text-text-secondary">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>15.2K views</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Social Media Feed -->
                    <div class="bg-white rounded-xl shadow-subtle p-6">
                        <h3 class="text-xl font-bold text-primary mb-6">Media Sosial</h3>
                        <div class="space-y-4">
                            <!-- Social Post 1 -->
                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center mb-3">
                                    <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <div class="font-semibold text-primary text-sm">@footballclubpro</div>
                                        <div class="text-xs text-text-secondary">2 jam yang lalu</div>
                                    </div>
                                </div>
                                <p class="text-sm text-text-primary mb-3">
                                    Latihan pagi yang produktif! Tim siap 100% untuk pertandingan besok 💪⚽
                                    #FootballClubPro #ReadyToFight
                                </p>
                                <div class="flex items-center space-x-4 text-xs text-text-secondary">
                                    <span>❤️ 245</span>
                                    <span>💬 18</span>
                                    <span>🔄 32</span>
                                </div>
                            </div>

                            <!-- Social Post 2 -->
                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center mb-3">
                                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <div class="font-semibold text-primary text-sm">@FCProOfficial</div>
                                        <div class="text-xs text-text-secondary">4 jam yang lalu</div>
                                    </div>
                                </div>
                                <p class="text-sm text-text-primary mb-3">
                                    Selamat kepada Ahmad Rizki yang dipanggil ke Timnas Indonesia! Kebanggaan Football
                                    Club Pro 🇮🇩⚽
                                </p>
                                <div class="flex items-center space-x-4 text-xs text-text-secondary">
                                    <span>❤️ 892</span>
                                    <span>💬 67</span>
                                    <span>🔄 156</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 text-center">
                            <a href="javascript:void(0)"
                                class="text-secondary hover:text-secondary-700 font-semibold text-sm">
                                Lihat Semua Post →
                            </a>
                        </div>
                    </div>

                    <!-- Podcast Section -->
                    <div class="bg-white rounded-xl shadow-subtle p-6">
                        <h3 class="text-xl font-bold text-primary mb-6">Podcast Terbaru</h3>
                        <div class="space-y-4">
                            <!-- Podcast Episode 1 -->
                            <div
                                class="flex items-center space-x-4 p-4 bg-surface rounded-lg hover:bg-gray-100 transition-smooth cursor-pointer">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.617.814L4.414 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.414l3.969-3.814a1 1 0 011.617.814zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-primary text-sm mb-1">
                                        Episode 15: Analisis Taktik vs Persija
                                    </h4>
                                    <p class="text-xs text-text-secondary mb-1">
                                        Diskusi mendalam tentang strategi tim
                                    </p>
                                    <div class="flex items-center text-xs text-text-secondary">
                                        <span>45 menit</span>
                                        <span class="mx-2">•</span>
                                        <span>1 September 2025</span>
                                    </div>
                                </div>
                                <button class="text-primary hover:text-secondary transition-smooth">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Podcast Episode 2 -->
                            <div
                                class="flex items-center space-x-4 p-4 bg-surface rounded-lg hover:bg-gray-100 transition-smooth cursor-pointer">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-secondary rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.617.814L4.414 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.414l3.969-3.814a1 1 0 011.617.814zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-primary text-sm mb-1">
                                        Episode 14: Wawancara Eksklusif Ahmad Rizki
                                    </h4>
                                    <p class="text-xs text-text-secondary mb-1">
                                        Perjalanan karir dan target musim ini
                                    </p>
                                    <div class="flex items-center text-xs text-text-secondary">
                                        <span>32 menit</span>
                                        <span class="mx-2">•</span>
                                        <span>28 Agustus 2025</span>
                                    </div>
                                </div>
                                <button class="text-primary hover:text-secondary transition-smooth">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Highlights Section -->
    <section class="py-16 bg-gradient-to-br from-gray-50 via-white to-gray-100 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-5xl font-bold text-black mb-4">Video Highlights & Arsip Media</h2>
                <div class="w-24 h-1 mx-auto bg-gradient-to-r from-rose-600 to-red-600 rounded-full mb-4"></div>
                <p class="text-body-lg text-text-secondary max-w-2xl mx-auto">
                    Saksikan momen terbaik Football Club Pro, mulai dari gol spektakuler hingga wawancara eksklusif dengan pemain.
                </p>
            </div>

            <!-- Video Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <div class="relative group cursor-pointer bg-white rounded-xl shadow-subtle overflow-hidden">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1508780709619-79562169bc64?q=80&w=2940&auto=format&fit=crop"
                            alt="Video 1"
                            class="w-full h-full object-cover group-hover:scale-110 transition-smooth"
                            onerror="this.src='https://images.pexels.com/photos/274506/pexels-photo-274506.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-smooth"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="bg-white/90 rounded-full p-4 group-hover:bg-white transition-smooth">
                                <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black/70 text-white px-2 py-1 rounded text-sm">05:47</div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-primary mb-2 group-hover:text-secondary transition-smooth">
                            Highlights: FC Pro vs Arema United (2-1)
                        </h3>
                        <p class="text-text-secondary text-sm">2 September 2025 • 142K views</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="relative group cursor-pointer bg-white rounded-xl shadow-subtle overflow-hidden">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504215680853-026ed2a45def?q=80&w=2940&auto=format&fit=crop"
                            alt="Video 2"
                            class="w-full h-full object-cover group-hover:scale-110 transition-smooth"
                            onerror="this.src='https://images.pexels.com/photos/274506/pexels-photo-274506.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-smooth"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="bg-white/90 rounded-full p-4 group-hover:bg-white transition-smooth">
                                <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black/70 text-white px-2 py-1 rounded text-sm">07:22</div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-primary mb-2 group-hover:text-secondary transition-smooth">
                            Behind The Scenes: Persiapan Latihan di Training Camp
                        </h3>
                        <p class="text-text-secondary text-sm">29 Agustus 2025 • 87K views</p>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="relative group cursor-pointer bg-white rounded-xl shadow-subtle overflow-hidden">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=2940&auto=format&fit=crop"
                            alt="Video 3"
                            class="w-full h-full object-cover group-hover:scale-110 transition-smooth"
                            onerror="this.src='https://images.pexels.com/photos/274506/pexels-photo-274506.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-smooth"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="bg-white/90 rounded-full p-4 group-hover:bg-white transition-smooth">
                                <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black/70 text-white px-2 py-1 rounded text-sm">09:15</div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-primary mb-2 group-hover:text-secondary transition-smooth">
                            Wawancara Eksklusif: Pelatih Bicara Taktik Baru
                        </h3>
                        <p class="text-text-secondary text-sm">25 Agustus 2025 • 63K views</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="javascript:void(0)"
                    class="bg-primary hover:bg-primary-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-smooth inline-flex items-center">
                    Lihat Semua Video
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Press Section -->
    <section class="py-16 bg-surface relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-5xl font-bold text-black mb-4">Press Center</h2>
                <div class="w-24 h-1 mx-auto bg-gradient-to-r from-rose-600 to-red-600 rounded-full mb-4"></div>
                <p class="text-body-lg text-text-secondary max-w-2xl mx-auto">
                    Akses lengkap untuk media dan jurnalis dengan press release, media kit, dan kontak resmi
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Press Release -->
                <div
                    class="bg-gradient-to-br from-white via-white to-rose-50 border border-rose-200 rounded-xl shadow-md p-8 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-rose-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-rose-700 mb-2">Press Release</h3>
                        <p class="text-gray-600 text-sm">
                            Siaran pers resmi dan pengumuman penting dari Football Club Pro
                        </p>
                    </div>
                    <div class="space-y-3 mb-6">
                        <div class="text-sm">
                            <div class="font-semibold text-rose-600">Terbaru:</div>
                            <div class="text-gray-700">Ahmad Rizki Dipanggil Timnas Indonesia</div>
                            <div class="text-xs text-gray-500">2 September 2025</div>
                        </div>
                    </div>
                    <a href="#"
                        class="w-full bg-rose-600 hover:bg-rose-700 text-white py-3 px-4 rounded-lg font-semibold transition-all duration-300 block text-center">
                        Akses Press Release
                    </a>
                </div>

                <!-- Media Kit -->
                <div
                    class="bg-gradient-to-br from-white via-white to-rose-50 border border-rose-200 rounded-xl shadow-md p-8 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-rose-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-rose-700 mb-2">Media Kit</h3>
                        <p class="text-gray-600 text-sm">
                            Logo, foto resmi, dan aset visual untuk keperluan media
                        </p>
                    </div>
                    <ul class="space-y-2 mb-6 text-sm text-gray-600">
                        <li>• Logo dalam berbagai format</li>
                        <li>• Foto pemain dan staf</li>
                        <li>• Template press release</li>
                        <li>• Brand guidelines</li>
                    </ul>
                    <a href="#"
                        class="w-full bg-rose-600 hover:bg-rose-700 text-white py-3 px-4 rounded-lg font-semibold transition-all duration-300 block text-center">
                        Download Media Kit
                    </a>
                </div>

                <!-- Media Contact -->
                <div
                    class="bg-gradient-to-br from-white via-white to-rose-50 border border-rose-200 rounded-xl shadow-md p-8 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-rose-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-rose-700 mb-2">Kontak Media</h3>
                        <p class="text-gray-600 text-sm">
                            Hubungi tim media relations untuk wawancara dan liputan
                        </p>
                    </div>
                    <div class="space-y-3 mb-6 text-sm">
                        <div>
                            <div class="font-semibold text-rose-600">Media Relations Manager</div>
                            <div class="text-gray-700">Sari Dewi</div>
                        </div>
                        <div>
                            <div class="font-semibold text-rose-600">Email</div>
                            <div class="text-gray-700">media@footballclubpro.id</div>
                        </div>
                        <div>
                            <div class="font-semibold text-rose-600">Telepon</div>
                            <div class="text-gray-700">+62 21 1234 5679</div>
                        </div>
                    </div>
                    <a href="contact.html"
                        class="w-full bg-rose-600 hover:bg-rose-700 text-white py-3 px-4 rounded-lg font-semibold transition-all duration-300 block text-center">
                        Hubungi Media Team
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Active State Script -->
<script>
    function filterContent(type) {
        document.querySelectorAll(".filter-btn").forEach((btn) => {
            btn.classList.remove(
                "bg-gradient-to-r",
                "from-rose-700",
                "to-red-700",
                "text-white",
                "scale-105",
                "shadow-md"
            );
            btn.classList.add("bg-gray-100", "text-gray-700");
        });

        const activeBtn = event.currentTarget;
        activeBtn.classList.remove("bg-gray-100", "text-gray-700");
        activeBtn.classList.add(
            "bg-gradient-to-r",
            "from-rose-700",
            "to-red-700",
            "text-white",
            "scale-105",
            "shadow-md"
        );

        // TODO: Tambahkan logika filter konten (show/hide grid item sesuai kategori)
        console.log("Menampilkan konten kategori:", type);
    }
</script>