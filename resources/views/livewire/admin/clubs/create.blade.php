<div class="p-6 max-w-xl mx-auto min-h-screen">

    {{-- PAGE HEADER --}}
    <div class="mb-6">
        <h1 class="text-[20px] font-semibold text-slate-900 tracking-tight">
            Tambah Klub
        </h1>
        <p class="text-sm text-slate-500">
            Lengkapi informasi detail untuk mendaftarkan klub baru ke sistem.
        </p>
    </div>

    {{-- FORM --}}
    <form wire:submit.prevent="save"
          class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 space-y-5">

        {{-- NAMA KLUB --}}
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                Nama Klub
            </label>
            <input type="text"
                   wire:model.defer="name"
                   placeholder="Masukkan nama resmi klub"
                   class="w-full text-sm rounded-lg border border-slate-300 px-4 py-2.5
                          focus:outline-none focus:ring-4 focus:ring-red-500/10 focus:border-red-600">
            @error('name')
                <span class="block text-sm text-red-600 mt-1.5 font-medium">
                    {{ $message }}
                </span>
            @enderror
        </div>

        {{-- KOTA --}}
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                Kota
            </label>
            <input type="text"
                   wire:model.defer="city"
                   placeholder="Contoh: Palembang"
                   class="w-full text-sm rounded-lg border border-slate-300 px-4 py-2.5
                          focus:outline-none focus:ring-4 focus:ring-red-500/10 focus:border-red-600">
            @error('city')
                <span class="block text-sm text-red-600 mt-1.5 font-medium">
                    {{ $message }}
                </span>
            @enderror
        </div>

        {{-- STADION --}}
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                Stadion Kandang
            </label>
            <input type="text"
                   wire:model.defer="stadium"
                   placeholder="Contoh: Stadion Gelora Sriwijaya Jakabaring"
                   class="w-full text-sm rounded-lg border border-slate-300 px-4 py-2.5
                          focus:outline-none focus:ring-4 focus:ring-red-500/10 focus:border-red-600">
            @error('stadium')
                <span class="block text-sm text-red-600 mt-1.5 font-medium">
                    {{ $message }}
                </span>
            @enderror
        </div>

        {{-- LOGO --}}
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Logo Klub
            </label>

            <div class="flex items-center gap-4">
                {{-- PREVIEW --}}
                @if ($logo)
                    <img src="{{ $logo->temporaryUrl() }}"
                         class="w-16 h-16 rounded-xl object-cover border border-slate-200 shadow-sm">
                @else
                    <div class="w-16 h-16 rounded-xl border-2 border-dashed border-slate-200
                                bg-slate-50 flex items-center justify-center">
                        <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2
                                     l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01" />
                        </svg>
                    </div>
                @endif

                {{-- INPUT --}}
                <div>
                    <input type="file" wire:model="logo" id="logo-upload" class="hidden">
                    <label for="logo-upload"
                           class="inline-flex items-center px-4 py-2 border border-slate-300
                                  rounded-lg text-sm font-medium text-slate-700
                                  bg-white hover:bg-slate-50 cursor-pointer shadow-sm">
                        Pilih Gambar
                    </label>
                    <p class="text-xs text-slate-500 mt-1">
                        PNG / JPG maksimal 2MB
                    </p>
                </div>
            </div>

            {{-- LOADING --}}
            <div wire:loading wire:target="logo"
                 class="mt-2 text-xs text-red-600 font-medium italic">
                Mengunggah logo...
            </div>

            @error('logo')
                <span class="block text-sm text-red-600 mt-1.5 font-medium">
                    {{ $message }}
                </span>
            @enderror
        </div>

        {{-- ACTION --}}
        <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
            <a href="{{ route('admin.clubs.index') }}"
               class="px-4 py-2.5 text-sm font-medium text-slate-700
                      border border-slate-300 rounded-lg hover:bg-slate-50">
                Batal
            </a>

            <button type="submit"
                    wire:loading.attr="disabled"
                    class="px-5 py-2.5 text-sm font-semibold text-white
                           bg-red-600 hover:bg-red-700 rounded-lg
                           shadow-sm disabled:opacity-70">

                <span wire:loading.remove wire:target="save">
                    Simpan Klub
                </span>

                <span wire:loading wire:target="save" class="flex items-center gap-2">
                    <svg class="animate-spin h-4 w-4 text-white" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                stroke="currentColor" stroke-width="4"/>
                        <path class="opacity-75" fill="currentColor"
                              d="M4 12a8 8 0 018-8V0C5.37 0 0 5.37 0 12h4z"/>
                    </svg>
                    Menyimpan...
                </span>
            </button>
        </div>

    </form>
</div>
