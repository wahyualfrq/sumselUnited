<div class="p-8 bg-white min-h-screen">
    {{-- HEADER --}}
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <div>
            <h1 class="text-[20px] font-semibold text-slate-900 tracking-tight">
                Import Data Klub
            </h1>
            <p class="text-sm text-slate-500 mt-1">
                Upload file Excel untuk menambahkan atau memperbarui data klub secara massal.
            </p>
        </div>

        <a href="{{ route('admin.clubs.index') }}"
           class="inline-flex items-center px-4 py-2 bg-slate-100 text-slate-700 hover:bg-slate-200 border border-slate-200 rounded-lg text-sm font-semibold transition-all duration-200 shadow-sm">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 19l-7-7 7-7" />
            </svg>
            Kembali
        </a>
    </div>

    {{-- ALERT SUCCESS --}}
    @if (session()->has('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-700 text-sm rounded-xl flex items-center">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
            </svg>
            {{ session('success') }}
        </div>
    @endif

    {{-- CARD IMPORT --}}
    <div class="max-w-2xl bg-white rounded-2xl border border-slate-200 shadow-sm">
        <form wire:submit.prevent="import" class="p-8">
            <div class="mb-6">
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    File Excel
                </label>

                {{-- DROPZONE --}}
                <label
                    class="flex flex-col items-center justify-center w-full h-44 border-2 border-dashed rounded-xl cursor-pointer
                           bg-slate-50 hover:bg-slate-100 border-slate-300 transition-all duration-200">

                    <input type="file" wire:model="file" class="hidden" accept=".xlsx,.xls">

                    <div class="flex flex-col items-center justify-center text-center px-4">
                        <svg class="w-10 h-10 text-slate-400 mb-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>

                        <p class="text-sm font-medium text-slate-600">
                            Drag & Drop file Excel di sini
                        </p>
                        <p class="text-xs text-slate-400 mt-1">
                            atau klik untuk memilih file (.xlsx / .xls)
                        </p>
                    </div>
                </label>

                {{-- ERROR --}}
                @error('file')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- INFO FORMAT --}}
            <div class="mb-6 p-4 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-600">
                <p class="font-semibold mb-1">Format kolom Excel:</p>
                <ul class="list-disc list-inside space-y-1">
                    <li><code class="font-mono">nama_klub</code></li>
                    <li><code class="font-mono">kota</code></li>
                    <li><code class="font-mono">stadion</code></li>
                    <li><code class="font-mono">link_logo_klub</code></li>
                </ul>
            </div>

            {{-- BUTTON ACTION --}}
            <div class="flex justify-end gap-3">
                <a href="{{ route('admin.clubs.index') }}"
                   class="px-4 py-2 bg-slate-100 text-slate-700 hover:bg-slate-200 rounded-lg text-sm font-semibold transition">
                    Batal
                </a>

                <button type="submit"
                    class="px-6 py-2 bg-blue-600 text-white hover:bg-blue-700 rounded-lg text-sm font-semibold transition shadow-sm">
                    Import Sekarang
                </button>
            </div>

            {{-- LOADING --}}
            <div wire:loading wire:target="import" class="mt-4 text-sm text-slate-500">
                Mengimpor data, mohon tunggu...
            </div>
        </form>
    </div>
</div>
