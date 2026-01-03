<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Pembelian Tiket' }}</title>

    {{-- PENTING: Style Tailwind (Gunakan Vite atau CDN untuk testing) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- PENTING: Style Livewire --}}
    @livewireStyles
</head>

<body class="bg-gray-50">

    {{-- Ini tempat komponen kamu dirender --}}
    {{ $slot }}

    {{-- PENTING: Script Livewire (WAJIB ADA) --}}
    @livewireScripts
</body>

</html>