<div>
    <section class="relative py-20 bg-gradient-to-br from-rose-600 via-red-600 to-rose-800 overflow-hidden text-white">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'60\' height=\'60\' viewBox=\'0 0 60 60\'><circle cx=\'30\' cy=\'30\' r=\'4\' fill=\'white\' fill-opacity=\'0.15\'/></svg>')] bg-repeat"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="mb-8">
                <div
                    class="inline-flex items-center bg-white/20 backdrop-blur-md rounded-full px-6 py-3 border border-white/30">
                    <svg class="w-5 h-5 text-rose-200 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-white font-semibold tracking-wide">TIM PROFESIONAL</span>
                </div>
            </div>

            <!-- Title & Description -->
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6 drop-shadow-lg">
                Skuad <span class="text-rose-200">Sumsel United</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-100 max-w-3xl mx-auto mb-12 leading-relaxed">
                Kenali para pejuang yang membawa nama klub dengan bangga di setiap pertandingan.
                Dari pemain berpengalaman hingga talenta muda berbakat, setiap individu berkontribusi
                dalam mencapai prestasi terbaik.
            </p>

            <!-- Team Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl font-extrabold text-rose-200 font-oswald mb-2">28</div>
                    <div class="text-sm text-gray-200">Pemain Aktif</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-extrabold text-rose-200 font-oswald mb-2">8</div>
                    <div class="text-sm text-gray-200">Staf Pelatih</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-extrabold text-rose-200 font-oswald mb-2">12</div>
                    <div class="text-sm text-gray-200">Kebangsaan</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-extrabold text-rose-200 font-oswald mb-2">24.5</div>
                    <div class="text-sm text-gray-200">Rata-rata Usia</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Navigation Tabs -->
    <section class="bg-white/90 backdrop-blur-md border-b border-gray-200 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex space-x-6 overflow-x-auto scrollbar-hide">
                <button id="tab-main-squad" onclick="showSection('main-squad')"
                    class="team-tab active relative py-4 px-2 text-rose-600 font-semibold whitespace-nowrap transition-all duration-300">
                    Skuad Utama
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-rose-600 to-red-600 rounded-full transition-all duration-300"></span>
                </button>

                <button id="tab-coaching-staff" onclick="showSection('coaching-staff')"
                    class="team-tab py-4 px-2 text-gray-500 hover:text-rose-600 font-semibold whitespace-nowrap transition-all duration-300">
                    Staf Pelatih
                </button>

                <button id="tab-youth-academy" onclick="showSection('youth-academy')"
                    class="team-tab py-4 px-2 text-gray-500 hover:text-rose-600 font-semibold whitespace-nowrap transition-all duration-300">
                    Akademi
                </button>

                <button id="tab-womens-team" onclick="showSection('womens-team')"
                    class="team-tab py-4 px-2 text-gray-500 hover:text-rose-600 font-semibold whitespace-nowrap transition-all duration-300">
                    Tim Putri
                </button>

                <button id="tab-club-legends" onclick="showSection('club-legends')"
                    class="team-tab py-4 px-2 text-gray-500 hover:text-rose-600 font-semibold whitespace-nowrap transition-all duration-300">
                    Legenda Klub
                </button>
            </div>
        </div>
    </section>

    <!-- Main Squad Section -->
    <section id="main-squad" class="team-section py-20 bg-gradient-to-b from-white via-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Formasi -->
            <div class="mb-16">
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-rose-700 mb-3 drop-shadow-sm">Formasi 4-3-3</h2>
                    <p class="text-gray-600 text-lg">Susunan pemain dalam formasi taktis utama</p>
                </div>

                <!-- Lapangan -->
                <div class="relative bg-gradient-to-b from-emerald-600 via-green-600 to-emerald-700 rounded-2xl p-8 mx-auto max-w-4xl shadow-xl border border-green-800/30"
                    style="aspect-ratio:3/4;">
                    <!-- Garis Lapangan -->
                    <div class="absolute inset-6 border-2 border-white/60 rounded-xl">
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-24 h-16 border-2 border-white/60 border-t-0"></div>
                        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-24 h-16 border-2 border-white/60 border-b-0"></div>
                        <div class="absolute top-1/2 left-0 right-0 h-0.5 bg-white/50"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-20 h-20 border-2 border-white/60 rounded-full"></div>
                    </div>

                    <!-- GK -->
                    <div class="absolute bottom-8 left-1/2 -translate-x-1/2">
                        <div
                            class="player-card bg-white/90 backdrop-blur-sm border border-gray-200 rounded-xl p-3 shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300 cursor-pointer"
                            onclick="showPlayerModal('dedi-kurniawan')">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80"
                                alt="Dedi Kurniawan"
                                class="w-16 h-16 rounded-full object-cover mx-auto mb-2 border-2 border-rose-600 shadow-sm" />
                            <div class="text-center">
                                <div class="text-xs font-bold text-rose-600">1</div>
                                <div class="text-xs font-semibold text-gray-800">D. Kurniawan</div>
                                <div class="text-xs text-gray-500">GK</div>
                            </div>
                        </div>
                    </div>

                    <!-- DEF -->
                    <div class="absolute bottom-28 left-0 right-0 flex justify-between px-8">
                        @foreach ([
                        ['id' => 'andi-setiawan', 'no'=>2, 'name'=>'A. Setiawan', 'pos'=>'RB', 'img'=>'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80'],
                        ['id' => 'carlos-silva', 'no'=>4, 'name'=>'C. Silva', 'pos'=>'CB', 'img'=>'https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?q=80'],
                        ['id' => 'reza-pratama', 'no'=>5, 'name'=>'R. Pratama', 'pos'=>'CB', 'img'=>'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80'],
                        ['id' => 'fajar-nugraha', 'no'=>3, 'name'=>'F. Nugraha', 'pos'=>'LB', 'img'=>'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80']
                        ] as $def)
                        <div onclick="showPlayerModal('{{ $def['id'] }}')"
                            class="player-card bg-white/90 backdrop-blur-sm border border-gray-200 rounded-xl p-3 shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300 cursor-pointer">
                            <img src="{{ $def['img'] }}" alt="{{ $def['name'] }}"
                                class="w-16 h-16 rounded-full object-cover mx-auto mb-2 border-2 border-rose-600 shadow-sm">
                            <div class="text-center">
                                <div class="text-xs font-bold text-rose-600">{{ $def['no'] }}</div>
                                <div class="text-xs font-semibold text-gray-800">{{ $def['name'] }}</div>
                                <div class="text-xs text-gray-500">{{ $def['pos'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- MID -->
                    <div class="absolute top-1/2 left-0 right-0 -translate-y-1/2 flex justify-center space-x-16">
                        @foreach ([
                        ['id'=>'budi-santoso','no'=>7,'name'=>'B. Santoso','pos'=>'CM','img'=>'https://images.unsplash.com/photo-1594736797933-d0401ba2fe65?q=80'],
                        ['id'=>'diego-martinez','no'=>6,'name'=>'D. Martinez','pos'=>'CDM','img'=>'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80'],
                        ['id'=>'irfan-hakim','no'=>8,'name'=>'I. Hakim','pos'=>'CAM','img'=>'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80']
                        ] as $mid)
                        <div onclick="showPlayerModal('{{ $mid['id'] }}')"
                            class="player-card bg-white/90 backdrop-blur-sm border border-gray-200 rounded-xl p-3 shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300 cursor-pointer">
                            <img src="{{ $mid['img'] }}" alt="{{ $mid['name'] }}"
                                class="w-16 h-16 rounded-full object-cover mx-auto mb-2 border-2 border-rose-600 shadow-sm">
                            <div class="text-center">
                                <div class="text-xs font-bold text-rose-600">{{ $mid['no'] }}</div>
                                <div class="text-xs font-semibold text-gray-800">{{ $mid['name'] }}</div>
                                <div class="text-xs text-gray-500">{{ $mid['pos'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- FWD -->
                    <div class="absolute top-16 left-0 right-0 flex justify-center space-x-20">
                        @foreach ([
                        ['id'=>'kevin-tanaka','no'=>11,'name'=>'K. Tanaka','pos'=>'LW','img'=>'https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?q=80'],
                        ['id'=>'ahmad-rizki','no'=>10,'name'=>'A. Rizki','pos'=>'ST','img'=>'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80'],
                        ['id'=>'marco-rossi','no'=>9,'name'=>'M. Rossi','pos'=>'RW','img'=>'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80']
                        ] as $fwd)
                        <div onclick="showPlayerModal('{{ $fwd['id'] }}')"
                            class="player-card bg-white/90 backdrop-blur-sm border border-gray-200 rounded-xl p-3 shadow-md hover:shadow-lg hover:scale-105 transition-all duration-300 cursor-pointer">
                            <img src="{{ $fwd['img'] }}" alt="{{ $fwd['name'] }}"
                                class="w-16 h-16 rounded-full object-cover mx-auto mb-2 border-2 border-rose-600 shadow-sm">
                            <div class="text-center">
                                <div class="text-xs font-bold text-rose-600">{{ $fwd['no'] }}</div>
                                <div class="text-xs font-semibold text-gray-800">{{ $fwd['name'] }}</div>
                                <div class="text-xs text-gray-500">{{ $fwd['pos'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Bandingkan Pemain -->
            <div class="bg-white/90 backdrop-blur-sm border border-gray-200 rounded-2xl shadow-md p-8 mb-12">
                <h3 class="text-2xl font-bold text-rose-700 mb-6">Bandingkan Pemain</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Pemain 1</label>
                        <select class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-600 outline-none">
                            <option>Pilih Pemain</option>
                            <option value="ahmad-rizki">Ahmad Rizki (ST)</option>
                            <option value="budi-santoso">Budi Santoso (CM)</option>
                            <option value="carlos-silva">Carlos Silva (CB)</option>
                            <option value="dedi-kurniawan">Dedi Kurniawan (GK)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Pemain 2</label>
                        <select class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-600 outline-none">
                            <option>Pilih Pemain</option>
                            <option value="marco-rossi">Marco Rossi (RW)</option>
                            <option value="kevin-tanaka">Kevin Tanaka (LW)</option>
                            <option value="irfan-hakim">Irfan Hakim (CAM)</option>
                            <option value="diego-martinez">Diego Martinez (CDM)</option>
                        </select>
                    </div>
                </div>
                <button
                    class="mt-6 bg-gradient-to-r from-rose-600 to-red-600 hover:from-rose-700 hover:to-red-700 text-white px-8 py-3 rounded-lg font-semibold shadow-md hover:shadow-lg transition-all duration-300">
                    Bandingkan Statistik
                </button>
            </div>

            <!-- Daftar Lengkap -->
            <div class="bg-white/90 backdrop-blur-sm border border-gray-200 rounded-2xl shadow-md p-8">
                <div class="flex flex-wrap items-center justify-between gap-3 mb-6">
                    <h3 class="text-2xl font-bold text-rose-700">Daftar Lengkap Pemain</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ([
                        ['key'=>'all','label'=>'Semua'],
                        ['key'=>'GK','label'=>'Kiper'],
                        ['key'=>'DEF','label'=>'Bek'],
                        ['key'=>'MID','label'=>'Gelandang'],
                        ['key'=>'FWD','label'=>'Penyerang']
                        ] as $pos)
                        <button onclick="filterByPosition('{{ $pos['key'] }}')"
                            class="position-filter px-4 py-2 rounded-lg font-semibold text-sm transition-all duration-300 {{ $loop->first ? 'bg-gradient-to-r from-rose-600 to-red-600 text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-700' }}">
                            {{ $pos['label'] }}
                        </button>
                        @endforeach
                    </div>
                </div>

                <div id="players-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Cards populated dynamically -->
                </div>
            </div>
        </div>
    </section>

    <!-- Coaching Staff Section -->
    <section id="coaching-staff" class="team-section hidden py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-display font-bold text-primary mb-4">Staf Pelatih</h2>
                <p class="text-body-lg text-text-secondary max-w-2xl mx-auto">
                    Tim pelatih berpengalaman yang memimpin dengan filosofi taktis modern dan pengembangan pemain
                    berkelanjutan
                </p>
            </div>

            <!-- Head Coach -->
            <div class="bg-surface rounded-xl p-8 mb-8">
                <div class="flex flex-col lg:flex-row items-center lg:items-start space-y-6 lg:space-y-0 lg:space-x-8">
                    <div class="flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Roberto Silva" class="w-32 h-32 rounded-full object-cover border-4 border-secondary"
                            onerror="this.src='https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                    </div>
                    <div class="flex-1 text-center lg:text-left">
                        <div class="mb-4">
                            <h3 class="text-2xl font-bold text-primary mb-2">Roberto Silva</h3>
                            <p class="text-lg text-secondary font-semibold mb-2">Pelatih Kepala</p>
                            <div class="flex flex-wrap justify-center lg:justify-start gap-2 mb-4">
                                <span
                                    class="bg-accent-100 text-accent-700 px-3 py-1 rounded-full text-sm font-semibold">UEFA
                                    Pro License</span>
                                <span
                                    class="bg-success-100 text-success-700 px-3 py-1 rounded-full text-sm font-semibold">15
                                    Tahun Pengalaman</span>
                                <span
                                    class="bg-primary-100 text-primary-700 px-3 py-1 rounded-full text-sm font-semibold">Spanyol</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold font-oswald text-primary">68%</div>
                                <div class="text-sm text-text-secondary">Win Rate</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold font-oswald text-primary">3</div>
                                <div class="text-sm text-text-secondary">Trofi Liga</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold font-oswald text-primary">2019</div>
                                <div class="text-sm text-text-secondary">Bergabung</div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h4 class="text-lg font-bold text-primary mb-3">Filosofi Taktis</h4>
                            <p class="text-text-secondary leading-relaxed">
                                "Sepak bola modern membutuhkan keseimbangan antara serangan yang mematikan dan
                                pertahanan yang solid.
                                Kami mengembangkan sistem permainan yang fleksibel, di mana setiap pemain memahami
                                perannya dalam
                                berbagai situasi pertandingan. Pressing tinggi, transisi cepat, dan penguasaan bola
                                menjadi kunci
                                filosofi kami."
                            </p>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-primary mb-3">Prestasi Terbaru</h4>
                            <ul class="text-text-secondary space-y-2">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-accent mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Juara Liga 1 Indonesia 2024
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-accent mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Pelatih Terbaik Liga 1 2024
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-accent mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Semifinal AFC Champions League 2023
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Assistant Coaches -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Assistant Coach 1 -->
                <div class="bg-white rounded-xl shadow-subtle p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Bambang Wijaya"
                            class="w-24 h-24 rounded-full object-cover mx-auto mb-4 border-4 border-primary"
                            onerror="this.src='https://images.pixabay.com/photo-2016/11/29/13/14/attractive-1869761_1280.jpg'; this.onerror=null;" />
                        <h3 class="text-lg font-bold text-primary mb-1">Bambang Wijaya</h3>
                        <p class="text-secondary font-semibold mb-2">Asisten Pelatih</p>
                        <div class="flex justify-center space-x-2 mb-4">
                            <span
                                class="bg-primary-100 text-primary-700 px-2 py-1 rounded text-xs font-semibold">Indonesia</span>
                            <span class="bg-success-100 text-success-700 px-2 py-1 rounded text-xs font-semibold">12
                                Tahun</span>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Spesialisasi:</span>
                            <span class="font-semibold text-primary">Taktik Bertahan</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Lisensi:</span>
                            <span class="font-semibold text-primary">AFC A License</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Bergabung:</span>
                            <span class="font-semibold text-primary">2020</span>
                        </div>
                    </div>
                </div>

                <!-- Fitness Coach -->
                <div class="bg-white rounded-xl shadow-subtle p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Michael Johnson"
                            class="w-24 h-24 rounded-full object-cover mx-auto mb-4 border-4 border-primary"
                            onerror="this.src='https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        <h3 class="text-lg font-bold text-primary mb-1">Michael Johnson</h3>
                        <p class="text-secondary font-semibold mb-2">Pelatih Fisik</p>
                        <div class="flex justify-center space-x-2 mb-4">
                            <span
                                class="bg-primary-100 text-primary-700 px-2 py-1 rounded text-xs font-semibold">Australia</span>
                            <span class="bg-success-100 text-success-700 px-2 py-1 rounded text-xs font-semibold">8
                                Tahun</span>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Spesialisasi:</span>
                            <span class="font-semibold text-primary">Kondisi Fisik</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Sertifikasi:</span>
                            <span class="font-semibold text-primary">Sports Science</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Bergabung:</span>
                            <span class="font-semibold text-primary">2021</span>
                        </div>
                    </div>
                </div>

                <!-- Goalkeeper Coach -->
                <div class="bg-white rounded-xl shadow-subtle p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-6">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Agus Salim"
                            class="w-24 h-24 rounded-full object-cover mx-auto mb-4 border-4 border-primary"
                            onerror="this.src='https://images.pixabay.com/photo-2016/11/29/13/14/attractive-1869761_1280.jpg'; this.onerror=null;" />
                        <h3 class="text-lg font-bold text-primary mb-1">Agus Salim</h3>
                        <p class="text-secondary font-semibold mb-2">Pelatih Kiper</p>
                        <div class="flex justify-center space-x-2 mb-4">
                            <span
                                class="bg-primary-100 text-primary-700 px-2 py-1 rounded text-xs font-semibold">Indonesia</span>
                            <span class="bg-success-100 text-success-700 px-2 py-1 rounded text-xs font-semibold">10
                                Tahun</span>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Spesialisasi:</span>
                            <span class="font-semibold text-primary">Teknik Kiper</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Ex-Player:</span>
                            <span class="font-semibold text-primary">Timnas Indonesia</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Bergabung:</span>
                            <span class="font-semibold text-primary">2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Youth Academy Section -->
    <section id="youth-academy" class="team-section hidden py-16 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-display font-bold text-primary mb-4">Akademi Muda</h2>
                <p class="text-body-lg text-text-secondary max-w-2xl mx-auto">
                    Mengembangkan talenta muda Indonesia menjadi pemain profesional dengan program pelatihan
                    komprehensif dan fasilitas terbaik
                </p>
            </div>

            <!-- Academy Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
                <div class="bg-white rounded-xl p-6 text-center shadow-subtle">
                    <div class="text-3xl font-bold font-oswald text-primary mb-2">156</div>
                    <div class="text-sm text-text-secondary">Pemain Akademi</div>
                </div>
                <div class="bg-white rounded-xl p-6 text-center shadow-subtle">
                    <div class="text-3xl font-bold font-oswald text-primary mb-2">23</div>
                    <div class="text-sm text-text-secondary">Promosi ke Tim Senior</div>
                </div>
                <div class="bg-white rounded-xl p-6 text-center shadow-subtle">
                    <div class="text-3xl font-bold font-oswald text-primary mb-2">8</div>
                    <div class="text-sm text-text-secondary">Kelompok Usia</div>
                </div>
                <div class="bg-white rounded-xl p-6 text-center shadow-subtle">
                    <div class="text-3xl font-bold font-oswald text-primary mb-2">15</div>
                    <div class="text-sm text-text-secondary">Pelatih Bersertifikat</div>
                </div>
            </div>

            <!-- Age Groups -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <div class="bg-white rounded-xl p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-4">
                        <div
                            class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">U-12</h3>
                        <p class="text-text-secondary text-sm mb-4">Dasar-dasar teknik dan fun football</p>
                    </div>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Pemain:</span>
                            <span class="font-semibold">24</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Pelatih:</span>
                            <span class="font-semibold">2</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Latihan:</span>
                            <span class="font-semibold">3x/minggu</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-4">
                        <div
                            class="w-16 h-16 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-8 h-8 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">U-15</h3>
                        <p class="text-text-secondary text-sm mb-4">Pengembangan taktik dan kompetisi</p>
                    </div>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Pemain:</span>
                            <span class="font-semibold">22</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Pelatih:</span>
                            <span class="font-semibold">2</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Latihan:</span>
                            <span class="font-semibold">4x/minggu</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-4">
                        <div
                            class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-8 h-8 text-accent-700" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">U-18</h3>
                        <p class="text-text-secondary text-sm mb-4">Persiapan level profesional</p>
                    </div>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Pemain:</span>
                            <span class="font-semibold">20</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Pelatih:</span>
                            <span class="font-semibold">3</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Latihan:</span>
                            <span class="font-semibold">5x/minggu</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-4">
                        <div
                            class="w-16 h-16 bg-success-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-8 h-8 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">U-21</h3>
                        <p class="text-text-secondary text-sm mb-4">Transisi ke tim senior</p>
                    </div>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Pemain:</span>
                            <span class="font-semibold">18</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Pelatih:</span>
                            <span class="font-semibold">2</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-text-secondary">Latihan:</span>
                            <span class="font-semibold">6x/minggu</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Stories -->
            <div class="bg-white rounded-xl shadow-subtle p-8">
                <h3 class="text-xl font-bold text-primary mb-6 text-center">Kisah Sukses Alumni</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1594736797933-d0401ba2fe65?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Ahmad Rizki"
                            class="w-20 h-20 rounded-full object-cover mx-auto mb-4 border-4 border-accent"
                            onerror="this.src='https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        <h4 class="text-lg font-bold text-primary mb-2">Ahmad Rizki</h4>
                        <p class="text-secondary font-semibold mb-2">Tim Senior (2022)</p>
                        <p class="text-text-secondary text-sm">
                            Bergabung akademi usia 14 tahun, kini menjadi striker andalan tim senior dengan 15 gol musim
                            ini.
                        </p>
                    </div>
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Budi Santoso"
                            class="w-20 h-20 rounded-full object-cover mx-auto mb-4 border-4 border-accent"
                            onerror="this.src='https://images.pixabay.com/photo-2016/11/29/13/14/attractive-1869761_1280.jpg'; this.onerror=null;" />
                        <h4 class="text-lg font-bold text-primary mb-2">Budi Santoso</h4>
                        <p class="text-secondary font-semibold mb-2">Tim Senior (2020)</p>
                        <p class="text-text-secondary text-sm">
                            Alumni akademi yang kini menjadi kapten tim dan pemain kunci di lini tengah.
                        </p>
                    </div>
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Reza Pratama"
                            class="w-20 h-20 rounded-full object-cover mx-auto mb-4 border-4 border-accent"
                            onerror="this.src='https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        <h4 class="text-lg font-bold text-primary mb-2">Reza Pratama</h4>
                        <p class="text-secondary font-semibold mb-2">Timnas U-23 (2023)</p>
                        <p class="text-text-secondary text-sm">
                            Bek tengah yang dipanggil ke timnas setelah menunjukkan performa konsisten.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Women's Team Section -->
    <section id="womens-team" class="team-section hidden py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-display font-bold text-primary mb-4">Tim Putri Football Club Pro</h2>
                <p class="text-body-lg text-text-secondary max-w-2xl mx-auto">
                    Membanggakan prestasi sepak bola putri Indonesia dengan dedikasi, skill, dan semangat juang yang
                    luar biasa
                </p>
            </div>

            <!-- Women's Team Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
                <div class="bg-surface rounded-xl p-6 text-center">
                    <div class="text-3xl font-bold font-oswald text-primary mb-2">22</div>
                    <div class="text-sm text-text-secondary">Pemain Aktif</div>
                </div>
                <div class="bg-surface rounded-xl p-6 text-center">
                    <div class="text-3xl font-bold font-oswald text-primary mb-2">2</div>
                    <div class="text-sm text-text-secondary">Trofi Liga</div>
                </div>
                <div class="bg-surface rounded-xl p-6 text-center">
                    <div class="text-3xl font-bold font-oswald text-primary mb-2">5</div>
                    <div class="text-sm text-text-secondary">Pemain Timnas</div>
                </div>
                <div class="bg-surface rounded-xl p-6 text-center">
                    <div class="text-3xl font-bold font-oswald text-primary mb-2">2021</div>
                    <div class="text-sm text-text-secondary">Didirikan</div>
                </div>
            </div>

            <!-- Key Players -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <div class="bg-surface rounded-xl p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Sari Dewi"
                            class="w-24 h-24 rounded-full object-cover mx-auto mb-4 border-4 border-secondary"
                            onerror="this.src='https://images.pixabay.com/photo-2016/11/29/13/14/attractive-1869761_1280.jpg'; this.onerror=null;" />
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-secondary text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm">
                            10
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold text-primary mb-1">Sari Dewi</h3>
                        <p class="text-secondary font-semibold mb-2">Kapten & Striker</p>
                        <div class="flex justify-center space-x-2 mb-4">
                            <span
                                class="bg-primary-100 text-primary-700 px-2 py-1 rounded text-xs font-semibold">Indonesia</span>
                            <span
                                class="bg-accent-100 text-accent-700 px-2 py-1 rounded text-xs font-semibold">Timnas</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-center">
                            <div>
                                <div class="text-xl font-bold font-oswald text-primary">18</div>
                                <div class="text-xs text-text-secondary">Gol</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold font-oswald text-primary">12</div>
                                <div class="text-xs text-text-secondary">Assist</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-surface rounded-xl p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-6">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Maya Putri"
                            class="w-24 h-24 rounded-full object-cover mx-auto mb-4 border-4 border-secondary"
                            onerror="this.src='https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-secondary text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm">
                            8
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold text-primary mb-1">Maya Putri</h3>
                        <p class="text-secondary font-semibold mb-2">Gelandang</p>
                        <div class="flex justify-center space-x-2 mb-4">
                            <span
                                class="bg-primary-100 text-primary-700 px-2 py-1 rounded text-xs font-semibold">Indonesia</span>
                            <span
                                class="bg-success-100 text-success-700 px-2 py-1 rounded text-xs font-semibold">U-23</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-center">
                            <div>
                                <div class="text-xl font-bold font-oswald text-primary">8</div>
                                <div class="text-xs text-text-secondary">Gol</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold font-oswald text-primary">15</div>
                                <div class="text-xs text-text-secondary">Assist</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-surface rounded-xl p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-6">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Rina Sari"
                            class="w-24 h-24 rounded-full object-cover mx-auto mb-4 border-4 border-secondary"
                            onerror="this.src='https://images.pixabay.com/photo-2016/11/29/13/14/attractive-1869761_1280.jpg'; this.onerror=null;" />
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-secondary text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm">
                            1
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold text-primary mb-1">Rina Sari</h3>
                        <p class="text-secondary font-semibold mb-2">Kiper</p>
                        <div class="flex justify-center space-x-2 mb-4">
                            <span
                                class="bg-primary-100 text-primary-700 px-2 py-1 rounded text-xs font-semibold">Indonesia</span>
                            <span
                                class="bg-accent-100 text-accent-700 px-2 py-1 rounded text-xs font-semibold">Timnas</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-center">
                            <div>
                                <div class="text-xl font-bold font-oswald text-primary">8</div>
                                <div class="text-xs text-text-secondary">Clean Sheet</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold font-oswald text-primary">45</div>
                                <div class="text-xs text-text-secondary">Saves</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Achievements -->
            <div class="bg-surface rounded-xl p-8">
                <h3 class="text-xl font-bold text-primary mb-6 text-center">Prestasi Terbaru</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <h4 class="text-lg font-bold text-primary">2025</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-accent mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-text-secondary">Juara Liga 1 Putri Indonesia</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-accent mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-text-secondary">Runner-up Piala Indonesia Putri</span>
                            </li>
                        </ul>
                    </div>
                    <div class="space-y-4">
                        <h4 class="text-lg font-bold text-primary">2024</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-accent mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-text-secondary">Semifinal AFC Women's Club Championship</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-accent mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-text-secondary">Top Scorer Liga 1 Putri (Sari Dewi)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Club Legends Section -->
    <section id="club-legends" class="team-section hidden py-16 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-display font-bold text-primary mb-4">Legenda Klub</h2>
                <p class="text-body-lg text-text-secondary max-w-2xl mx-auto">
                    Menghormati para pemain legendaris yang telah mengukir sejarah emas Football Club Pro dengan
                    dedikasi dan prestasi luar biasa
                </p>
            </div>

            <!-- Hall of Fame -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Legend 1 -->
                <div class="bg-white rounded-xl shadow-subtle p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-6">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Bambang Pamungkas"
                            class="w-24 h-24 rounded-full object-cover mx-auto mb-4 border-4 border-accent"
                            onerror="this.src='https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-accent text-primary rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm">
                            9
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold text-primary mb-1">Bambang Pamungkas</h3>
                        <p class="text-secondary font-semibold mb-2">Striker Legendaris</p>
                        <div class="flex justify-center space-x-2 mb-4">
                            <span
                                class="bg-primary-100 text-primary-700 px-2 py-1 rounded text-xs font-semibold">2010-2018</span>
                            <span class="bg-accent-100 text-accent-700 px-2 py-1 rounded text-xs font-semibold">Hall of
                                Fame</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-center mb-4">
                            <div>
                                <div class="text-xl font-bold font-oswald text-primary">127</div>
                                <div class="text-xs text-text-secondary">Gol</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold font-oswald text-primary">8</div>
                                <div class="text-xs text-text-secondary">Musim</div>
                            </div>
                        </div>
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-text-secondary">3x Liga Champion</span>
                            </div>
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-text-secondary">Top Scorer All-Time</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Legend 2 -->
                <div class="bg-white rounded-xl shadow-subtle p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Kurnia Meiga"
                            class="w-24 h-24 rounded-full object-cover mx-auto mb-4 border-4 border-accent"
                            onerror="this.src='https://images.pixabay.com/photo-2016/11/29/13/14/attractive-1869761_1280.jpg'; this.onerror=null;" />
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-accent text-primary rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm">
                            1
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold text-primary mb-1">Kurnia Meiga</h3>
                        <p class="text-secondary font-semibold mb-2">Kiper Legendaris</p>
                        <div class="flex justify-center space-x-2 mb-4">
                            <span
                                class="bg-primary-100 text-primary-700 px-2 py-1 rounded text-xs font-semibold">2008-2020</span>
                            <span class="bg-accent-100 text-accent-700 px-2 py-1 rounded text-xs font-semibold">Hall of
                                Fame</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-center mb-4">
                            <div>
                                <div class="text-xl font-bold font-oswald text-primary">89</div>
                                <div class="text-xs text-text-secondary">Clean Sheets</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold font-oswald text-primary">12</div>
                                <div class="text-xs text-text-secondary">Musim</div>
                            </div>
                        </div>
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-text-secondary">Kapten 8 Tahun</span>
                            </div>
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-text-secondary">Best Goalkeeper 4x</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Legend 3 -->
                <div class="bg-white rounded-xl shadow-subtle p-6 hover:shadow-elevation transition-smooth">
                    <div class="text-center mb-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Firman Utina"
                            class="w-24 h-24 rounded-full object-cover mx-auto mb-4 border-4 border-accent"
                            onerror="this.src='https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-accent text-primary rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm">
                            6
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold text-primary mb-1">Firman Utina</h3>
                        <p class="text-secondary font-semibold mb-2">Gelandang Maestro</p>
                        <div class="flex justify-center space-x-2 mb-4">
                            <span
                                class="bg-primary-100 text-primary-700 px-2 py-1 rounded text-xs font-semibold">2012-2022</span>
                            <span class="bg-accent-100 text-accent-700 px-2 py-1 rounded text-xs font-semibold">Hall of
                                Fame</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-center mb-4">
                            <div>
                                <div class="text-xl font-bold font-oswald text-primary">156</div>
                                <div class="text-xs text-text-secondary">Assist</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold font-oswald text-primary">10</div>
                                <div class="text-xs text-text-secondary">Musim</div>
                            </div>
                        </div>
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-text-secondary">Playmaker Terbaik 5x</span>
                            </div>
                            <div class="flex items-center justify-center">
                                <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-text-secondary">Most Assists Record</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Retired Numbers -->
            <div class="mt-12 bg-white rounded-xl shadow-subtle p-8">
                <h3 class="text-xl font-bold text-primary mb-6 text-center">Nomor Punggung yang Dipensiunkan</h3>
                <div class="flex justify-center space-x-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-2">
                            <span class="text-2xl font-bold text-primary">9</span>
                        </div>
                        <div class="text-sm font-semibold text-primary">Bambang Pamungkas</div>
                        <div class="text-xs text-text-secondary">2010-2018</div>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-2">
                            <span class="text-2xl font-bold text-primary">1</span>
                        </div>
                        <div class="text-sm font-semibold text-primary">Kurnia Meiga</div>
                        <div class="text-xs text-text-secondary">2008-2020</div>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-2">
                            <span class="text-2xl font-bold text-primary">6</span>
                        </div>
                        <div class="text-sm font-semibold text-primary">Firman Utina</div>
                        <div class="text-xs text-text-secondary">2012-2022</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Player Modal -->
    <div id="player-modal"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-start mb-6">
                    <h2 id="modal-player-name" class="text-2xl font-bold text-primary">Player Name</h2>
                    <button onclick="closePlayerModal()" class="text-text-secondary hover:text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div id="modal-content">
                    <!-- Modal content will be populated by JavaScript -->
                </div>
            </div>
        </div>
    </div>
</div>