<div class="bg-[#F5F7FB] h-full flex flex-col overflow-hidden text-slate-700">

    {{-- PAGE HEADER --}}
    <div class="px-8 py-6 bg-white/80 backdrop-blur border-b border-slate-200 shrink-0">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-slate-900 flex items-center gap-2">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3" />
                    </svg>
                    Dashboard Admin
                </h1>
                <p class="text-sm text-slate-500 mt-1">
                    Sistem kontrol & aktivitas Sumsel United
                </p>
            </div>

            <div class="flex items-center gap-3 text-sm">
                <span class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-100 text-slate-600 font-medium">
                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 7V3m8 4V3M5 11h14M5 19h14" />
                    </svg>
                    {{ now()->format('d M Y') }}
                </span>
            </div>
        </div>
    </div>

    {{-- CONTENT --}}
    <div class="flex-1 p-8 overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 h-full">

            {{-- LEFT AREA --}}
            <div class="lg:col-span-8 flex flex-col gap-8 h-full overflow-y-auto pr-1">

                {{-- STAT CARDS --}}
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                        $stat = "bg-white rounded-2xl p-5 shadow-sm hover:shadow-lg transition
                                 flex flex-col gap-2 relative overflow-hidden";
                    @endphp

                    {{-- TOTAL MATCH --}}
                    <div class="{{ $stat }}">
                        <div class="absolute top-4 right-4 text-indigo-100">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6 3h12v2H6zM4 7h16v14H4z"/>
                            </svg>
                        </div>
                        <p class="text-xs font-semibold text-slate-400 uppercase">Total Laga</p>
                        <p class="text-3xl font-bold text-slate-900">{{ $totalMatches }}</p>
                        <span class="text-xs text-slate-400">Sepanjang musim</span>
                    </div>

                    {{-- TICKET --}}
                    <div class="{{ $stat }}">
                        <div class="absolute top-4 right-4 text-emerald-100">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M5 5h14v14H5z"/>
                            </svg>
                        </div>
                        <p class="text-xs font-semibold text-slate-400 uppercase">Tiket Aktif</p>
                        <p class="text-3xl font-bold text-emerald-600">{{ $activeTickets }}</p>
                        <span class="text-xs text-slate-400">Sedang dijual</span>
                    </div>

                    {{-- MEDIA --}}
                    <div class="{{ $stat }}">
                        <div class="absolute top-4 right-4 text-blue-100">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4 6h16v12H4z"/>
                            </svg>
                        </div>
                        <p class="text-xs font-semibold text-slate-400 uppercase">Konten Media</p>
                        <p class="text-3xl font-bold text-blue-600">{{ $totalMedia }}</p>
                        <span class="text-xs text-slate-400">Berita & video</span>
                    </div>

                    {{-- LIVE --}}
                    <div class="{{ $stat }}">
                        <div class="absolute top-4 right-4 text-rose-100">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8a4 4 0 100 8 4 4 0 000-8z"/>
                            </svg>
                        </div>
                        <p class="text-xs font-semibold text-slate-400 uppercase">Live Match</p>
                        <p class="text-2xl font-bold {{ $liveMatch ? 'text-rose-600' : 'text-slate-400' }}">
                            {{ $liveMatch ? 'ONLINE' : 'OFFLINE' }}
                        </p>
                        <span class="text-xs text-slate-400">
                            {{ $liveMatch ? 'Sedang berlangsung' : 'Tidak ada live' }}
                        </span>
                    </div>
                </div>

                {{-- 📊 CHART --}}
                <div class="bg-white rounded-3xl p-6 shadow-sm">
                    <h3 class="text-sm font-bold text-slate-800 mb-1 flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M11 3v18m4-10v10m4-6v6M7 13v8" />
                        </svg>
                        Jumlah Pertandingan per Bulan
                    </h3>
                    <p class="text-xs text-slate-500 mb-4">
                        Aktivitas pertandingan Sumsel United
                    </p>

                    <div class="h-[260px]">
                        <canvas id="matchesChart"></canvas>
                    </div>
                </div>

                {{-- QUICK ACTION --}}
                <div class="bg-white rounded-3xl p-6 shadow-sm">
                    <h3 class="text-sm font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Quick Actions
                    </h3>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        @php
                            $qa = "group bg-slate-50 hover:bg-white border border-transparent
                                   hover:border-slate-200 rounded-2xl p-5
                                   flex flex-col items-center gap-2
                                   transition shadow-sm hover:shadow-md";
                        @endphp

                        <a href="{{ route('admin.matches.create') }}" class="{{ $qa }}">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v16m8-8H4"/>
                            </svg>
                            <span class="text-sm font-semibold">Tambah Jadwal</span>
                        </a>

                        <a href="{{ route('admin.tickets.create') }}" class="{{ $qa }}">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 5v2m0 4v2m0 4v2M5 5h14v14H5z"/>
                            </svg>
                            <span class="text-sm font-semibold">Tambah Tiket</span>
                        </a>

                        <a href="{{ route('admin.news.create') }}" class="{{ $qa }}">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 20H5V4h10l4 4v12z"/>
                            </svg>
                            <span class="text-sm font-semibold">Tambah Berita</span>
                        </a>

                        <a href="{{ route('admin.videos.sync') }}" class="{{ $qa }}">
                            <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M14.75 11.17l-3.2-2.13A1 1 0 0010 9.87v4.26a1 1 0 001.55.83l3.2-2.13a1 1 0 000-1.66z"/>
                            </svg>
                            <span class="text-sm font-semibold">Sync YouTube</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- RIGHT PANEL --}}
            <div class="lg:col-span-4 h-full">
                @if($liveMatch)
                    <div class="h-full rounded-3xl bg-gradient-to-br from-slate-900 to-slate-800 p-8 text-white shadow-xl flex flex-col justify-between">
                        <div>
                            <span class="inline-flex items-center gap-2 text-xs font-semibold text-rose-400 mb-4">
                                <span class="w-2 h-2 bg-rose-500 rounded-full animate-pulse"></span>
                                LIVE MATCH
                            </span>

                            <div class="text-center space-y-4">
                                <h3 class="text-xl font-bold">{{ $liveMatch->homeClub->name }}</h3>

                                <div class="text-5xl font-extrabold tracking-tight">
                                    {{ $liveMatch->home_score }} : {{ $liveMatch->away_score }}
                                </div>

                                <h3 class="text-xl font-bold text-slate-300">{{ $liveMatch->awayClub->name }}</h3>

                                <p class="text-sm text-slate-400">Menit {{ $liveMatch->minute }}’</p>
                            </div>
                        </div>

                        <a href="{{ route('admin.matches.live', $liveMatch->id) }}"
                           class="mt-6 w-full bg-white text-slate-900 py-3 rounded-xl font-semibold text-center hover:bg-slate-100 transition">
                            Masuk Live Control
                        </a>
                    </div>
                @else
                    <div class="h-full bg-white rounded-3xl shadow-sm flex flex-col items-center justify-center text-center p-8">
                        <p class="text-sm text-slate-500 mb-6">
                            Tidak ada pertandingan live saat ini
                        </p>
                        <a href="{{ route('admin.matches.create') }}"
                           class="px-6 py-2.5 bg-slate-900 text-white rounded-xl text-sm font-semibold hover:bg-slate-800 transition">
                            Buat Jadwal
                        </a>
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>

{{-- CHART JS --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('matchesChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($chartLabels),
            datasets: [{
                label: 'Pertandingan',
                data: @json($chartData),
                backgroundColor: '#2563EB',
                borderRadius: 10,
                maxBarThickness: 40
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                x: {
                    grid: { display: false }
                },
                y: {
                    beginAtZero: true,
                    grid: { color: '#E5E7EB' },
                    ticks: {
                        precision: 0
                    }
                }
            }
        }
    });
</script>

