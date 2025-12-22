<div>
    <section class="relative py-20 bg-gradient-to-br from-rose-700 via-red-700 to-rose-900 overflow-hidden text-white">
        <!-- Grid Pattern Background -->
        <div class="absolute inset-0 opacity-15">
            <svg class="w-full h-full" viewBox="0 0 100 100" fill="none">
                <pattern id="gridPattern" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.4" />
                </pattern>
                <rect width="100" height="100" fill="url(#gridPattern)" />
            </svg>
        </div>

        <!-- Light Overlay Gradient -->
        <div class="absolute inset-0 bg-gradient-to-b from-white/10 via-transparent to-rose-900/30"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight drop-shadow-lg">
                Jadwal <span class="text-rose-200">Pertandingan</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-100 max-w-3xl mx-auto mb-12 leading-relaxed">
                Ikuti setiap pertandingan <span class="font-semibold text-white">Sumsel United</span> dan rasakan
                pengalaman menonton yang tak terlupakan — baik di stadion maupun dari rumah.
            </p>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                <div
                    class="bg-white/10 hover:bg-white/20 backdrop-blur-md rounded-2xl p-6 border border-white/20 shadow-lg transition-all duration-300 hover:scale-105">
                    <div class="text-4xl font-extrabold font-oswald text-rose-100 mb-1">15</div>
                    <div class="text-sm text-gray-200 tracking-wide uppercase">Pertandingan Tersisa</div>
                </div>

                <div
                    class="bg-white/10 hover:bg-white/20 backdrop-blur-md rounded-2xl p-6 border border-white/20 shadow-lg transition-all duration-300 hover:scale-105">
                    <div class="text-4xl font-extrabold font-oswald text-rose-100 mb-1">8</div>
                    <div class="text-sm text-gray-200 tracking-wide uppercase">Pertandingan Kandang</div>
                </div>

                <div
                    class="bg-white/10 hover:bg-white/20 backdrop-blur-md rounded-2xl p-6 border border-white/20 shadow-lg transition-all duration-300 hover:scale-105">
                    <div class="text-4xl font-extrabold font-oswald text-rose-100 mb-1">7</div>
                    <div class="text-sm text-gray-200 tracking-wide uppercase">Pertandingan Tandang</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-8 bg-white/90 backdrop-blur-md border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

                <!-- Filter Buttons -->
                <div class="flex flex-wrap gap-3">
                    <button onclick="filterMatches('all')"
                        class="filter-btn active bg-gradient-to-r from-rose-600 to-red-600 text-white px-5 py-2 rounded-lg font-semibold text-sm shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300">
                        Semua
                    </button>
                    <button onclick="filterMatches('upcoming')"
                        class="filter-btn bg-gray-100 hover:bg-rose-100 text-gray-700 px-5 py-2 rounded-lg font-semibold text-sm transition-all duration-300 border border-transparent hover:border-rose-300">
                        Akan Datang
                    </button>
                    <button onclick="filterMatches('live')"
                        class="filter-btn bg-gray-100 hover:bg-rose-100 text-gray-700 px-5 py-2 rounded-lg font-semibold text-sm transition-all duration-300 border border-transparent hover:border-rose-300">
                        Live
                    </button>
                    <button onclick="filterMatches('completed')"
                        class="filter-btn bg-gray-100 hover:bg-rose-100 text-gray-700 px-5 py-2 rounded-lg font-semibold text-sm transition-all duration-300 border border-transparent hover:border-rose-300">
                        Selesai
                    </button>
                    <button onclick="filterMatches('home')"
                        class="filter-btn bg-gray-100 hover:bg-rose-100 text-gray-700 px-5 py-2 rounded-lg font-semibold text-sm transition-all duration-300 border border-transparent hover:border-rose-300">
                        Kandang
                    </button>
                    <button onclick="filterMatches('away')"
                        class="filter-btn bg-gray-100 hover:bg-rose-100 text-gray-700 px-5 py-2 rounded-lg font-semibold text-sm transition-all duration-300 border border-transparent hover:border-rose-300">
                        Tandang
                    </button>
                </div>

                <!-- Search & Calendar -->
                <div class="flex flex-col sm:flex-row gap-3">
                    <div class="relative">
                        <input type="text" placeholder="Cari lawan..."
                            class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-600 focus:border-transparent placeholder-gray-400 text-gray-800 w-full transition-all duration-300" />
                        <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <button
                        class="flex items-center px-4 py-2 border border-gray-300 rounded-lg bg-white hover:bg-rose-50 hover:border-rose-300 hover:text-rose-700 text-gray-700 font-medium transition-all duration-300 shadow-sm">
                        <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Kalender
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Live Match Section -->
    <section id="live-matches" class="py-16 bg-gradient-to-b from-white via-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-10">
                <h2 class="text-3xl md:text-4xl font-extrabold text-rose-700 drop-shadow-sm">Pertandingan Live</h2>
                <div class="flex items-center mt-3 sm:mt-0 text-emerald-600">
                    <div class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse mr-2"></div>
                    <span class="font-semibold tracking-wide">SEDANG BERLANGSUNG</span>
                </div>
            </div>

            <!-- Live Match Card -->
            <div class="bg-white/90 backdrop-blur-md border-l-4 border-emerald-500 rounded-2xl shadow-lg p-8 transition-all duration-300 hover:shadow-xl">

                <!-- Top Info -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8">
                    <div class="flex items-center space-x-3 mb-3 sm:mb-0">
                        <span class="bg-gradient-to-r from-rose-600 to-red-600 text-white px-4 py-1.5 rounded-full text-sm font-bold shadow-md">LIVE</span>
                        <span class="text-gray-600 font-medium">Liga 1 Indonesia</span>
                    </div>
                    <div class="text-sm text-gray-500 text-right">
                        <div>Stadion Utama Jakarta</div>
                        <div>2 September 2025 • 19:30 WIB</div>
                    </div>
                </div>

                <!-- Scoreboard -->
                <div class="grid grid-cols-3 gap-6 items-center mb-10">
                    <!-- Home -->
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1614632537190-23e4b2e69c88?q=80"
                            alt="Football Club Pro"
                            class="w-20 h-20 rounded-full object-cover mx-auto mb-3 border-4 border-rose-600 shadow-md">
                        <h3 class="text-lg font-bold text-gray-900">Football Club Pro</h3>
                        <span class="text-xs text-gray-500">(Kandang)</span>
                    </div>

                    <!-- Score -->
                    <div class="text-center">
                        <div class="text-6xl font-extrabold font-oswald text-rose-700 mb-3">2 - 1</div>
                        <div class="inline-block bg-emerald-600 text-white px-5 py-2 rounded-lg text-sm font-semibold shadow-sm">
                            Menit ke-67'
                        </div>
                    </div>

                    <!-- Away -->
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?q=80"
                            alt="Persija Jakarta"
                            class="w-20 h-20 rounded-full object-cover mx-auto mb-3 border-4 border-gray-300 shadow-md">
                        <h3 class="text-lg font-bold text-gray-900">Persija Jakarta</h3>
                        <span class="text-xs text-gray-500">(Tandang)</span>
                    </div>
                </div>

                <!-- Goal Scorers -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                    <div>
                        <h4 class="font-semibold text-rose-700 mb-4 border-l-4 border-rose-600 pl-3">Pencetak Gol - Football Club Pro</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center bg-emerald-50 px-4 py-3 rounded-lg border border-emerald-100">
                                <span class="font-semibold text-gray-800">Ahmad Rizki</span>
                                <span class="text-emerald-700 font-bold">15'</span>
                            </div>
                            <div class="flex justify-between items-center bg-emerald-50 px-4 py-3 rounded-lg border border-emerald-100">
                                <span class="font-semibold text-gray-800">Budi Santoso</span>
                                <span class="text-emerald-700 font-bold">45+2'</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold text-rose-700 mb-4 border-l-4 border-yellow-400 pl-3">Pencetak Gol - Persija Jakarta</h4>
                        <div class="flex justify-between items-center bg-yellow-50 px-4 py-3 rounded-lg border border-yellow-100">
                            <span class="font-semibold text-gray-800">Marko Simic</span>
                            <span class="text-yellow-600 font-bold">38'</span>
                        </div>
                    </div>
                </div>

                <!-- Live Commentary -->
                <div class="bg-gray-50 border border-gray-200 rounded-xl p-6">
                    <h4 class="font-semibold text-rose-700 mb-4">Komentar Langsung</h4>
                    <div class="space-y-3 max-h-56 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300 pr-2">
                        <div class="flex items-start space-x-3">
                            <span class="bg-rose-600 text-white px-2 py-1 rounded text-xs font-bold">67'</span>
                            <p class="text-sm text-gray-700">
                                Peluang emas! Ahmad Rizki melepaskan tembakan keras dari dalam kotak penalti, namun melebar tipis!
                            </p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-rose-600 text-white px-2 py-1 rounded text-xs font-bold">65'</span>
                            <p class="text-sm text-gray-700">
                                Pergantian pemain: Carlos Silva keluar, digantikan oleh Eko Prasetyo.
                            </p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-rose-600 text-white px-2 py-1 rounded text-xs font-bold">62'</span>
                            <p class="text-sm text-gray-700">
                                Kartu kuning untuk Marko Simic setelah pelanggaran keras terhadap Budi Santoso.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Upcoming Matches -->
    <section id="upcoming-matches" class="py-16 bg-gradient-to-b from-white via-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-3xl md:text-4xl font-extrabold text-rose-700 drop-shadow-sm">Pertandingan Akan Datang</h2>
                <button
                    class="text-rose-600 hover:text-rose-700 font-semibold text-sm border-b-2 border-transparent hover:border-rose-500 transition-all duration-300">
                    Lihat Semua
                </button>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                <!-- Match 1 -->
                <div
                    class="bg-white/90 backdrop-blur-md border border-gray-200 rounded-2xl p-8 shadow-md hover:shadow-xl hover:scale-[1.02] transition-all duration-300">
                    <div class="flex items-center justify-between mb-5">
                        <span class="bg-rose-100 text-rose-700 px-3 py-1 rounded-full text-sm font-semibold shadow-sm">
                            Liga 1 Indonesia
                        </span>
                        <span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-sm font-semibold shadow-sm">
                            TIKET TERSEDIA
                        </span>
                    </div>

                    <div class="text-center mb-8">
                        <div class="text-sm text-gray-500 mb-1">Sabtu, 7 September 2025</div>
                        <div class="text-2xl font-bold text-rose-700 mb-1">19:30 WIB</div>
                        <div class="text-sm text-gray-500">Stadion Utama Jakarta</div>
                    </div>

                    <!-- Teams -->
                    <div class="grid grid-cols-3 gap-4 items-center mb-8">
                        <div class="text-center">
                            <img
                                src="https://images.unsplash.com/photo-1614632537190-23e4b2e69c88?q=80"
                                alt="Football Club Pro"
                                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 border-4 border-rose-600 shadow-md">
                            <div class="text-sm font-semibold text-gray-800">Football Club Pro</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-extrabold text-gray-600 tracking-wide">VS</div>
                        </div>
                        <div class="text-center">
                            <img
                                src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?q=80"
                                alt="Bali United"
                                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 border-4 border-gray-300 shadow-md">
                            <div class="text-sm font-semibold text-gray-800">Bali United</div>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4 mb-8 text-center text-sm">
                        <div>
                            <div class="font-bold text-rose-700">5-2-1</div>
                            <div class="text-gray-500">Head to Head</div>
                        </div>
                        <div>
                            <div class="font-bold text-rose-700">8</div>
                            <div class="text-gray-500">Pertemuan</div>
                        </div>
                        <div>
                            <div class="font-bold text-rose-700">3-1</div>
                            <div class="text-gray-500">Terakhir</div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex space-x-3">
                        <button
                            class="flex-1 bg-gradient-to-r from-rose-600 to-red-600 hover:from-rose-700 hover:to-red-700 text-white py-3 rounded-lg font-semibold shadow-md hover:shadow-lg transition-all duration-300">
                            Beli Tiket
                        </button>
                        <button
                            class="flex-1 bg-gray-100 hover:bg-rose-100 text-rose-700 py-3 rounded-lg font-semibold border border-rose-200 hover:border-rose-400 transition-all duration-300">
                            Prediksi
                        </button>
                    </div>
                </div>

                <!-- Match 2 -->
                <div
                    class="bg-white/90 backdrop-blur-md border border-gray-200 rounded-2xl p-8 shadow-md hover:shadow-xl hover:scale-[1.02] transition-all duration-300">
                    <div class="flex items-center justify-between mb-5">
                        <span class="bg-rose-100 text-rose-700 px-3 py-1 rounded-full text-sm font-semibold shadow-sm">
                            Liga 1 Indonesia
                        </span>
                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-sm font-semibold shadow-sm">
                            SEGERA TERSEDIA
                        </span>
                    </div>

                    <div class="text-center mb-8">
                        <div class="text-sm text-gray-500 mb-1">Minggu, 15 September 2025</div>
                        <div class="text-2xl font-bold text-rose-700 mb-1">15:30 WIB</div>
                        <div class="text-sm text-gray-500">Stadion Kanjuruhan, Malang</div>
                    </div>

                    <!-- Teams -->
                    <div class="grid grid-cols-3 gap-4 items-center mb-8">
                        <div class="text-center">
                            <img
                                src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?q=80"
                                alt="Arema FC"
                                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 border-4 border-gray-300 shadow-md">
                            <div class="text-sm font-semibold text-gray-800">Arema FC</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-extrabold text-gray-600 tracking-wide">VS</div>
                        </div>
                        <div class="text-center">
                            <img
                                src="https://images.unsplash.com/photo-1614632537190-23e4b2e69c88?q=80"
                                alt="Football Club Pro"
                                class="w-20 h-20 rounded-full object-cover mx-auto mb-3 border-4 border-rose-600 shadow-md">
                            <div class="text-sm font-semibold text-gray-800">Football Club Pro</div>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4 mb-8 text-center text-sm">
                        <div>
                            <div class="font-bold text-rose-700">3-3-2</div>
                            <div class="text-gray-500">Head to Head</div>
                        </div>
                        <div>
                            <div class="font-bold text-rose-700">8</div>
                            <div class="text-gray-500">Pertemuan</div>
                        </div>
                        <div>
                            <div class="font-bold text-rose-700">2-2</div>
                            <div class="text-gray-500">Terakhir</div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex space-x-3">
                        <button
                            class="flex-1 bg-gray-200 text-gray-500 py-3 rounded-lg font-semibold cursor-not-allowed shadow-inner">
                            Tiket Segera
                        </button>
                        <button
                            class="flex-1 bg-gray-100 hover:bg-rose-100 text-rose-700 py-3 rounded-lg font-semibold border border-rose-200 hover:border-rose-400 transition-all duration-300">
                            Prediksi
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Recent Results -->
    <section id="recent-results" class="py-16 bg-gradient-to-b from-gray-50 via-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-3xl md:text-4xl font-extrabold text-rose-700 drop-shadow-sm">Hasil Pertandingan Terbaru</h2>
                <button
                    class="text-rose-600 hover:text-rose-700 font-semibold text-sm border-b-2 border-transparent hover:border-rose-500 transition-all duration-300">
                    Lihat Semua
                </button>
            </div>

            <!-- List of Results -->
            <div class="space-y-8">

                <!-- Result Card -->
                <div
                    class="bg-white/90 backdrop-blur-md border border-gray-200 rounded-2xl p-8 shadow-md hover:shadow-lg hover:scale-[1.01] transition-all duration-300">

                    <!-- Top Info -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center space-x-3">
                            <span class="bg-emerald-600 text-white px-4 py-1.5 rounded-full text-xs font-bold shadow-sm">MENANG</span>
                            <span class="text-gray-500 font-medium">Liga 1 Indonesia</span>
                        </div>
                        <div class="text-sm text-gray-500 text-right">
                            <div>29 Agustus 2025</div>
                            <div>Stadion Utama Jakarta</div>
                        </div>
                    </div>

                    <!-- Score -->
                    <div class="grid grid-cols-3 gap-6 items-center">
                        <!-- Home -->
                        <div class="flex items-center space-x-4">
                            <img src="https://images.unsplash.com/photo-1614632537190-23e4b2e69c88?q=80"
                                alt="Football Club Pro"
                                class="w-14 h-14 rounded-full object-cover border-4 border-rose-600 shadow-md">
                            <div>
                                <div class="font-bold text-gray-900">Football Club Pro</div>
                                <div class="text-xs text-gray-500">(Kandang)</div>
                            </div>
                        </div>

                        <!-- Score -->
                        <div class="text-center">
                            <div class="text-5xl font-extrabold font-oswald text-rose-700">3 - 1</div>
                        </div>

                        <!-- Away -->
                        <div class="flex items-center justify-end space-x-4">
                            <div class="text-right">
                                <div class="font-bold text-gray-900">Bali United</div>
                                <div class="text-xs text-gray-500">(Tandang)</div>
                            </div>
                            <img src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?q=80"
                                alt="Bali United"
                                class="w-14 h-14 rounded-full object-cover border-4 border-gray-300 shadow-md">
                        </div>
                    </div>

                    <!-- Goal Info -->
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold text-rose-700 mb-3 border-l-4 border-rose-600 pl-3">Pencetak Gol</h4>
                                <ul class="space-y-1 text-sm text-gray-700">
                                    <li>Ahmad Rizki <span class="text-rose-600 font-semibold">(15', 78')</span></li>
                                    <li>Budi Santoso <span class="text-rose-600 font-semibold">(34')</span></li>
                                    <li class="text-gray-500">Kadek Agung (52') – Bali United</li>
                                </ul>
                            </div>
                            <div class="flex space-x-4 items-start md:justify-end">
                                <button
                                    class="bg-gradient-to-r from-rose-600 to-red-600 hover:from-rose-700 hover:to-red-700 text-white px-5 py-2.5 rounded-lg font-semibold text-sm shadow-md hover:shadow-lg transition-all duration-300">
                                    🎥 Lihat Highlight
                                </button>
                                <button
                                    class="bg-gray-100 hover:bg-rose-100 text-rose-700 px-5 py-2.5 rounded-lg font-semibold text-sm border border-rose-200 hover:border-rose-400 transition-all duration-300">
                                    📊 Statistik
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Result 2 -->
                <div
                    class="bg-white/90 backdrop-blur-md border border-gray-200 rounded-2xl p-8 shadow-md hover:shadow-lg hover:scale-[1.01] transition-all duration-300">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center space-x-3">
                            <span class="bg-amber-500 text-white px-4 py-1.5 rounded-full text-xs font-bold shadow-sm">SERI</span>
                            <span class="text-gray-500 font-medium">Liga 1 Indonesia</span>
                        </div>
                        <div class="text-sm text-gray-500 text-right">
                            <div>22 Agustus 2025</div>
                            <div>Stadion Kanjuruhan, Malang</div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-6 items-center">
                        <div class="flex items-center space-x-4">
                            <img src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?q=80"
                                alt="Arema FC"
                                class="w-14 h-14 rounded-full object-cover border-4 border-gray-300 shadow-md">
                            <div>
                                <div class="font-bold text-gray-900">Arema FC</div>
                                <div class="text-xs text-gray-500">(Kandang)</div>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="text-5xl font-extrabold font-oswald text-rose-700">2 - 2</div>
                        </div>

                        <div class="flex items-center justify-end space-x-4">
                            <div class="text-right">
                                <div class="font-bold text-gray-900">Football Club Pro</div>
                                <div class="text-xs text-gray-500">(Tandang)</div>
                            </div>
                            <img src="https://images.unsplash.com/photo-1614632537190-23e4b2e69c88?q=80"
                                alt="Football Club Pro"
                                class="w-14 h-14 rounded-full object-cover border-4 border-rose-600 shadow-md">
                        </div>
                    </div>

                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold text-rose-700 mb-3 border-l-4 border-rose-600 pl-3">Pencetak Gol</h4>
                                <ul class="space-y-1 text-sm text-gray-700">
                                    <li class="text-gray-500">Dedik Setiawan (23'), Hanif Sjahbandi (67') – Arema FC</li>
                                    <li>Carlos Silva (45+1'), Ahmad Rizki (89')</li>
                                </ul>
                            </div>
                            <div class="flex space-x-4 items-start md:justify-end">
                                <button
                                    class="bg-gradient-to-r from-rose-600 to-red-600 hover:from-rose-700 hover:to-red-700 text-white px-5 py-2.5 rounded-lg font-semibold text-sm shadow-md hover:shadow-lg transition-all duration-300">
                                    🎥 Lihat Highlight
                                </button>
                                <button
                                    class="bg-gray-100 hover:bg-rose-100 text-rose-700 px-5 py-2.5 rounded-lg font-semibold text-sm border border-rose-200 hover:border-rose-400 transition-all duration-300">
                                    📊 Statistik
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Ticket Section -->
    <section id="tickets" class="py-20 bg-gradient-to-b from-gray-50 via-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-extrabold text-rose-700 drop-shadow-sm mb-3">
                    Beli Tiket Pertandingan
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-base md:text-lg">
                    Rasakan atmosfer stadion dengan berbagai pilihan tempat duduk dan layanan eksklusif untuk pengalaman terbaik
                </p>
            </div>

            <!-- Ticket Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <!-- Tribune Utara -->
                <div
                    class="bg-white/90 backdrop-blur-md rounded-2xl border border-gray-200 p-8 text-center shadow-md hover:shadow-xl hover:scale-[1.02] transition-all duration-300">
                    <img
                        src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80"
                        alt="Tribune Utara"
                        class="w-full h-48 rounded-xl object-cover mb-6 shadow-sm">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Tribune Utara</h3>
                    <p class="text-gray-500 mb-4">Tempat duduk standar dengan view lapangan terbaik</p>
                    <div class="text-3xl font-bold text-rose-700 mb-6">Rp 75.000</div>

                    <ul class="text-sm text-gray-600 mb-6 space-y-1">
                        <li>✓ Akses ke stadion</li>
                        <li>✓ Program pertandingan</li>
                        <li>✓ Fasilitas toilet umum</li>
                    </ul>

                    <button
                        class="w-full bg-gradient-to-r from-rose-600 to-red-600 hover:from-rose-700 hover:to-red-700 text-white py-3 rounded-lg font-semibold shadow-md hover:shadow-lg transition-all duration-300">
                        Beli Sekarang
                    </button>
                </div>

                <!-- VIP Selatan -->
                <div
                    class="bg-white border-2 border-rose-600 backdrop-blur-md rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl hover:scale-[1.03] transition-all duration-300 relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span
                            class="bg-gradient-to-r from-rose-600 to-red-600 text-white text-xs font-bold px-4 py-1 rounded-full shadow-md">
                            POPULER
                        </span>
                    </div>
                    <img
                        src="https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?q=80"
                        alt="VIP Selatan"
                        class="w-full h-48 rounded-xl object-cover mb-6 shadow-sm">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">VIP Selatan</h3>
                    <p class="text-gray-500 mb-4">Tempat duduk premium dengan fasilitas eksklusif</p>
                    <div class="text-3xl font-bold text-rose-700 mb-6">Rp 150.000</div>

                    <ul class="text-sm text-gray-600 mb-6 space-y-1">
                        <li>✓ Tempat duduk premium</li>
                        <li>✓ Akses lounge VIP</li>
                        <li>✓ Makanan & minuman gratis</li>
                        <li>✓ Parkir eksklusif</li>
                    </ul>

                    <button
                        class="w-full bg-gradient-to-r from-rose-600 to-red-600 hover:from-rose-700 hover:to-red-700 text-white py-3 rounded-lg font-semibold shadow-md hover:shadow-lg transition-all duration-300">
                        Beli Sekarang
                    </button>
                </div>

                <!-- VVIP Executive -->
                <div
                    class="bg-white/90 backdrop-blur-md rounded-2xl border border-gray-200 p-8 text-center shadow-md hover:shadow-xl hover:scale-[1.02] transition-all duration-300">
                    <img
                        src="https://images.unsplash.com/photo-1522778119026-d647f0596c20?q=80"
                        alt="VVIP Executive"
                        class="w-full h-48 rounded-xl object-cover mb-6 shadow-sm">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">VVIP Executive</h3>
                    <p class="text-gray-500 mb-4">Pengalaman menonton terbaik dengan layanan personal</p>
                    <div class="text-3xl font-bold text-rose-700 mb-6">Rp 300.000</div>

                    <ul class="text-sm text-gray-600 mb-6 space-y-1">
                        <li>✓ Skybox pribadi</li>
                        <li>✓ Butler pribadi</li>
                        <li>✓ Premium catering</li>
                        <li>✓ Meet & greet pemain</li>
                    </ul>

                    <button
                        class="w-full bg-gradient-to-r from-rose-600 to-red-600 hover:from-rose-700 hover:to-red-700 text-white py-3 rounded-lg font-semibold shadow-md hover:shadow-lg transition-all duration-300">
                        Beli Sekarang
                    </button>
                </div>
            </div>

            <!-- Season Pass -->
            <div
                class="mt-20 bg-gradient-to-r from-rose-700 via-red-700 to-rose-700 rounded-3xl text-white text-center py-14 px-6 shadow-xl relative overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
                <h3 class="text-2xl md:text-3xl font-extrabold mb-3 relative z-10">Season Pass 2025</h3>
                <p class="text-gray-200 max-w-2xl mx-auto mb-8 relative z-10">
                    Nikmati seluruh pertandingan kandang sepanjang musim dengan harga hemat dan benefit eksklusif member.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto mb-10 relative z-10">
                    <div class="bg-white/20 backdrop-blur-md rounded-xl p-6">
                        <div class="text-2xl font-bold mb-1">15</div>
                        <div class="text-sm text-gray-200">Pertandingan Kandang</div>
                    </div>
                    <div class="bg-white/20 backdrop-blur-md rounded-xl p-6">
                        <div class="text-2xl font-bold mb-1">30%</div>
                        <div class="text-sm text-gray-200">Hemat Lebih Banyak</div>
                    </div>
                    <div class="bg-white/20 backdrop-blur-md rounded-xl p-6">
                        <div class="text-2xl font-bold mb-1">VIP</div>
                        <div class="text-sm text-gray-200">Akses Eksklusif</div>
                    </div>
                </div>

                <button
                    class="bg-white text-rose-700 hover:bg-gray-100 px-10 py-4 rounded-xl font-semibold text-lg shadow-md hover:shadow-lg transition-all duration-300 relative z-10">
                    🎟️ Beli Season Pass - Rp 1.500.000
                </button>
            </div>
        </div>
    </section>
</div>