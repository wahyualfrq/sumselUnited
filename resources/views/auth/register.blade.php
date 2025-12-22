<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Sumsel United</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 via-white to-gray-100 text-gray-800">

    <div class="w-full max-w-md bg-white/80 backdrop-blur-xl border border-gray-200 rounded-2xl shadow-xl p-8">

        <div class="text-center mb-6">
               <img src="{{ asset('images/favicon.png') }}" alt="Logo Sumsel United"
                class="w-16 h-16 mx-auto mb-3 drop-shadow-md">
            <h1 class="text-2xl font-bold text-neutral-800">Buat Akun Baru</h1>
            <p class="text-sm text-gray-500">Gabung bersama komunitas Sumsel United!</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 text-sm text-red-600 bg-red-50 border border-red-200 px-4 py-3 rounded-lg">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('register.submit') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-rose-500 focus:border-rose-500"
                    placeholder="you@example.com">
            </div>

            <div>
                <label class="text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-rose-500 focus:border-rose-500"
                    placeholder="********">
            </div>

            <div>
                <label class="text-sm font-medium text-gray-700">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-rose-500 focus:border-rose-500"
                    placeholder="********">
            </div>

            <button type="submit"
                class="w-full py-3 bg-gradient-to-r from-rose-600 to-red-600 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition">
                Daftar Sekarang
            </button>
        </form>

        <p class="text-sm text-center mt-6 text-gray-600">
            Sudah punya akun?
            <a href="{{ route('login.page') }}" class="text-rose-600 font-semibold hover:text-rose-700">
                Masuk di sini
            </a>
        </p>

    </div>

</body>
</html>
