<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ isset($title) ? $title . ' - Sumsel United' : 'Sumsel United' }}</title>

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- AOS CSS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Vite --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @livewireStyles
</head>

<body class="bg-[#F1F3F5] antialiased">

    {{-- HEADER --}}
    @include('client.layouts.header')

    {{-- MAIN CONTENT --}}
    <main class="container mx-auto">
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    @include('client.layouts.footer')

    @livewireScripts

    {{-- AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    {{-- INIT AOS --}}
    <script>
        AOS.init({
            once: false,
            mirror: true,          
            duration: 900,       // durasi smooth
            easing: 'ease-out-cubic',
            offset: 120,
        });
    </script>

    {{-- COUNTDOWN (TETAP DIPERTAHANKAN) --}}
    <script>
        function countdown(target) {
            const targetDate = new Date(target).getTime();

            return {
                days: '00',
                hours: '00',
                minutes: '00',

                init() {
                    setInterval(() => {
                        const now = new Date().getTime();
                        let diff = targetDate - now;

                        if (diff < 0) diff = 0;

                        this.days = String(Math.floor(diff / (1000 * 60 * 60 * 24))).padStart(2, '0');
                        this.hours = String(Math.floor((diff / (1000 * 60 * 60)) % 24)).padStart(2, '0');
                        this.minutes = String(Math.floor((diff / (1000 * 60)) % 60)).padStart(2, '0');
                    }, 1000);
                }
            }
        }
    </script>

</body>

</html>