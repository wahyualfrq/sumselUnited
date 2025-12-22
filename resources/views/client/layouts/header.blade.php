<style>
    header {
        transition:
            backdrop-filter 0.4s ease,
            background-color 0.4s ease,
            box-shadow 0.4s ease;
    }

    header.scrolled {
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.85);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
    }

    header.not-scrolled {
        backdrop-filter: none;
        background-color: rgba(255, 255, 255, 0.95);
        box-shadow: none;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-6px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slideDown {
        animation: slideDown 0.25s ease forwards;
    }
</style>

<header class="fixed top-0 left-0 w-full z-50 not-scrolled border-b border-gray-200/60">

    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- LOGO -->
            <a href="{{ route('home') }}" class="flex items-center group">
                <img src="{{ asset('images/favicon.png') }}"
                    class="h-9 w-9 transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                <span class="ml-3 text-xl font-extrabold text-gray-800 group-hover:text-rose-600 transition">
                    Sumsel United
                </span>
            </a>

            <!-- DESKTOP MENU -->
            <div class="hidden md:flex items-center space-x-6">
                @foreach ($menu['client'] as $item)
                            <a href="{{ route($item['url']) }}" class="{{ request()->routeIs($item['url'])
                    ? 'text-rose-600 font-semibold border-b-2 border-rose-600 pb-1'
                    : 'text-gray-600 hover:text-rose-600 transition' }}">
                                {{ $item['label'] }}
                            </a>
                @endforeach
            </div>

            <!-- RIGHT ACTION -->
            <div class="hidden md:flex items-center gap-4">

                @auth
                    <!-- PROFILE DROPDOWN -->
                    <div class="relative">
                        <button onclick="toggleProfile()"
                            class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-gray-100 transition">
                            <div
                                class="w-8 h-8 rounded-full bg-rose-600 text-white flex items-center justify-center font-bold">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </div>
                            <span class="text-sm font-semibold text-gray-700">
                                {{ auth()->user()->name }}
                            </span>
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div id="profile-menu"
                            class="absolute right-0 mt-2 w-44 bg-white rounded-xl shadow-lg border hidden animate-slideDown">
                            @if(auth()->user()->role === 'user')
                                <a href="{{ route('tickets.purchase') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">
                                    🎟️ Tiket Saya
                                </a>
                            @endif

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- LOGIN / TICKET -->
                    <a href="{{ route('login.page') }}"
                        class="px-5 py-2 rounded-lg bg-gradient-to-r from-rose-600 to-red-600 text-white font-semibold shadow hover:shadow-lg transition">
                        Masuk
                    </a>
                @endauth

            </div>

            <!-- MOBILE BUTTON -->
            <button onclick="toggleMobileMenu()" class="md:hidden text-gray-700">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobile-menu"
            class="md:hidden hidden mt-3 bg-white rounded-2xl shadow-lg border p-4 space-y-2 animate-slideDown">

            @foreach ($menu['client'] as $item)
                <a href="{{ route($item['url']) }}" class="block px-3 py-2 rounded-lg hover:bg-gray-100">
                    {{ $item['label'] }}
                </a>
            @endforeach

            <hr>

            @auth
                <a href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('tickets.purchase') }}"
                    class="block px-3 py-2 font-semibold">
                    Dashboard
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="w-full text-left px-3 py-2 text-red-600">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login.page') }}"
                    class="block text-center bg-rose-600 text-white py-2 rounded-lg font-semibold">
                    Login / Beli Tiket
                </a>
            @endauth
        </div>
    </nav>
</header>

<script>
    const header = document.querySelector("header");

    function handleScroll() {
        if (window.scrollY > 20) {
            header.classList.add("scrolled");
            header.classList.remove("not-scrolled");
        } else {
            header.classList.remove("scrolled");
            header.classList.add("not-scrolled");
        }
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll();

    function toggleMobileMenu() {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    }

    function toggleProfile() {
        document.getElementById("profile-menu").classList.toggle("hidden");
    }
</script>