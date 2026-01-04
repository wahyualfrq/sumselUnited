<aside id="sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-full bg-white border-r border-gray-100 shadow-sm flex flex-col transition-transform transform -translate-x-full lg:translate-x-0">

    <div class="flex items-center gap-3 px-6 h-20 border-b border-gray-100 bg-white sticky top-0 z-10">
        <div class="p-2 bg-rose-100 text-rose-600 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM8.547 4.505a8.25 8.25 0 0 1 6.906 0l-1.028 3.167a1.688 1.688 0 0 0-1.099 0l-1.028-3.167ZM4.505 8.547a8.264 8.264 0 0 1 1.615-3.08l2.67 1.819a1.687 1.687 0 0 0 0 1.157l-2.67 1.82a8.245 8.245 0 0 1-1.615-1.716ZM12 11.625a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM13.88 16.29a1.688 1.688 0 0 0 1.099 0l2.67 1.82a8.25 8.25 0 0 1-6.906 0l2.67-1.82a1.688 1.688 0 0 0 .467-.356ZM19.495 11.953a8.256 8.256 0 0 1-1.615 3.08l-2.67-1.82a1.686 1.686 0 0 0 0-1.156l2.67-1.82c.74.887 1.284 1.895 1.615 1.716Z" clip-rule="evenodd" />
            </svg>
        </div>
        <div>
            <h2 class="text-base font-bold text-gray-800 tracking-wide">Admin Panel</h2>
            <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Sumsel United</p>
        </div>
    </div>

    <nav class="flex-1 overflow-y-auto py-6 px-3 space-y-1 scrollbar-hide">

        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all duration-200 group
           {{ request()->routeIs('admin.dashboard')
               ? 'bg-rose-50 text-rose-600 shadow-sm ring-1 ring-rose-100'
               : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                 class="w-5 h-5 transition-colors {{ request()->routeIs('admin.dashboard') ? 'text-rose-600' : 'text-gray-400 group-hover:text-gray-600' }}">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
            </svg>
            Dashboard
        </a>

        <details class="group" {{ (request()->routeIs('admin.clubs.*') || request()->routeIs('admin.team')) ? 'open' : '' }}>
            <summary class="flex items-center justify-between px-3 py-2.5 rounded-lg text-sm font-medium cursor-pointer list-none transition-colors
                {{ (request()->routeIs('admin.clubs.*') || request()->routeIs('admin.team'))
                    ? 'text-gray-900 bg-gray-50'
                    : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                         class="w-5 h-5 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                    </svg>
                    <span>Master Data</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                     class="w-3 h-3 transition-transform duration-200 group-open:rotate-180 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </summary>

            <div class="mt-1 ml-3 pl-3 border-l border-gray-100 space-y-1">
                <a href="{{ route('admin.clubs.index') }}"
                   class="flex items-center gap-2 px-3 py-2 rounded-md text-sm transition
                   {{ request()->routeIs('admin.clubs.*') ? 'text-rose-600 bg-rose-50 font-medium' : 'text-gray-500 hover:text-gray-900' }}">
                    <span>Manajemen Klub</span>
                </a>

                <a href="{{ route('admin.players.index') }}"
                   class="flex items-center gap-2 px-3 py-2 rounded-md text-sm transition
                   {{ request()->routeIs('admin.team') ? 'text-rose-600 bg-rose-50 font-medium' : 'text-gray-500 hover:text-gray-900' }}">
                    <span>Manajemen Pemain</span>
                </a>
            </div>
        </details>

        <details class="group" {{ (request()->routeIs('admin.matches.*') || request()->routeIs('admin.tickets.*')) ? 'open' : '' }}>
            <summary class="flex items-center justify-between px-3 py-2.5 rounded-lg text-sm font-medium cursor-pointer list-none transition-colors
                {{ (request()->routeIs('admin.matches.*') || request()->routeIs('admin.tickets.*'))
                     ? 'text-gray-900 bg-gray-50'
                     : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                         class="w-5 h-5 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                    </svg>
                    <span>Pertandingan</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                     class="w-3 h-3 transition-transform duration-200 group-open:rotate-180 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </summary>

            <div class="mt-1 ml-3 pl-3 border-l border-gray-100 space-y-1">
                <a href="{{ route('admin.matches.live.active') }}"
                   class="flex items-center gap-2 px-3 py-2 rounded-md text-sm transition
                   {{ request()->routeIs('admin.matches.live*') ? 'text-rose-600 bg-rose-50 font-medium' : 'text-gray-500 hover:text-gray-900' }}">
                   <span class="relative flex h-2 w-2 mr-1">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-rose-500"></span>
                    </span>
                    <span>Live Match</span>
                </a>

                <a href="{{ route('admin.matches.index') }}"
                   class="flex items-center gap-2 px-3 py-2 rounded-md text-sm transition
                   {{ request()->routeIs('admin.matches.index') ? 'text-rose-600 bg-rose-50 font-medium' : 'text-gray-500 hover:text-gray-900' }}">
                    <span>Jadwal</span>
                </a>

                <a href="{{ route('admin.tickets.index') }}"
                   class="flex items-center gap-2 px-3 py-2 rounded-md text-sm transition
                   {{ request()->routeIs('admin.tickets.*') ? 'text-rose-600 bg-rose-50 font-medium' : 'text-gray-500 hover:text-gray-900' }}">
                    <span>Manajemen Tiket</span>
                </a>
            </div>
        </details>

        <details class="group" {{ (request()->routeIs('admin.gallery.*') || request()->routeIs('admin.news.*') || request()->routeIs('admin.videos.*')) ? 'open' : '' }}>
            <summary class="flex items-center justify-between px-3 py-2.5 rounded-lg text-sm font-medium cursor-pointer list-none transition-colors
                {{ (request()->routeIs('admin.gallery.*') || request()->routeIs('admin.news.*') || request()->routeIs('admin.videos.*'))
                     ? 'text-gray-900 bg-gray-50'
                     : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                         class="w-5 h-5 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <span>Media & Berita</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                     class="w-3 h-3 transition-transform duration-200 group-open:rotate-180 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </summary>

            <div class="mt-1 ml-3 pl-3 border-l border-gray-100 space-y-1">
                <a href="{{ route('admin.gallery.index') }}"
                   class="flex items-center gap-2 px-3 py-2 rounded-md text-sm transition
                   {{ request()->routeIs('admin.gallery.*') ? 'text-rose-600 bg-rose-50 font-medium' : 'text-gray-500 hover:text-gray-900' }}">
                    <span>Galeri Foto</span>
                </a>

                <a href="{{ route('admin.news.index') }}"
                   class="flex items-center gap-2 px-3 py-2 rounded-md text-sm transition
                   {{ request()->routeIs('admin.news.index') ? 'text-rose-600 bg-rose-50 font-medium' : 'text-gray-500 hover:text-gray-900' }}">
                    <span>Artikel Berita</span>
                </a>

                <a href="{{ route('admin.videos.sync') }}"
                   class="flex items-center gap-2 px-3 py-2 rounded-md text-sm transition
                   {{ request()->routeIs('admin.videos.*') ? 'text-rose-600 bg-rose-50 font-medium' : 'text-gray-500 hover:text-gray-900' }}">
                    <span>YouTube Sync</span>
                </a>
            </div>
        </details>

    </nav>

    <div class="border-t border-gray-100 p-4 bg-gray-50">
        <div class="text-center">
            <p class="text-[10px] text-gray-400 font-medium">© {{ date('Y') }} Sumsel United</p>
            <p class="text-[9px] text-gray-300 mt-0.5">Admin Management System</p>
        </div>
    </div>
</aside>