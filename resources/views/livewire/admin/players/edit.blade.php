<div class="p-6 max-w-4xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold">Edit Pemain</h1>
        <p class="text-sm text-gray-500">Perbarui data pemain tim</p>
    </div>

    {{-- FORM WAJIB --}}
    <form wire:submit.prevent="update"
          class="bg-white rounded-xl shadow-sm border p-6 space-y-5">

        {{-- NAMA --}}
        <div>
            <label class="text-sm font-semibold">Nama Pemain</label>
            <input
                type="text"
                wire:model.defer="name"
                class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-200
                       focus:ring-2 focus:ring-rose-200 focus:border-rose-500 outline-none">
            @error('name')
                <div class="text-xs text-red-600 mt-1">{{ $message }}</div>
            @enderror
        </div>

        {{-- POSISI --}}
        <div>
            <label class="text-sm font-semibold">Posisi</label>
            <select
                wire:model.defer="position"
                class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-200
                       focus:ring-2 focus:ring-rose-200 focus:border-rose-500 outline-none">
                <option value="">-- Pilih Posisi --</option>
                <option value="GK">Goalkeeper</option>
                <option value="DF">Defender</option>
                <option value="MF">Midfielder</option>
                <option value="FW">Forward</option>
            </select>
            @error('position')
                <div class="text-xs text-red-600 mt-1">{{ $message }}</div>
            @enderror
        </div>

        {{-- KATEGORI --}}
        <div>
            <label class="text-sm font-semibold">Kategori</label>
            <input
                type="text"
                wire:model.defer="category"
                placeholder="Utama / Cadangan / U-23"
                class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-200
                       focus:ring-2 focus:ring-rose-200 focus:border-rose-500 outline-none">
        </div>

        {{-- NOMOR & USIA --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="text-sm font-semibold">Nomor</label>
                <input
                    type="number"
                    wire:model.defer="number"
                    class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-200">
            </div>

            <div>
                <label class="text-sm font-semibold">Usia</label>
                <input
                    type="number"
                    wire:model.defer="age"
                    class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-200">
            </div>
        </div>

        {{-- NEGARA --}}
        <div>
            <label class="text-sm font-semibold">Negara</label>
            <input
                type="text"
                wire:model.defer="country"
                class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-200">
        </div>

        {{-- FOTO PEMAIN --}}
        <div>
            <label class="text-sm font-semibold">Foto Pemain</label>

            {{-- FOTO LAMA --}}
            @if ($player && $player->photo_url)
                <div class="mt-2">
                    <img
                        src="{{ str_starts_with($player->photo_url, 'http')
                            ? $player->photo_url
                            : asset('storage/' . $player->photo_url) }}"
                        class="w-24 h-24 rounded-full object-cover border"
                        onerror="this.src='{{ asset('images/default-player.png') }}'">
                </div>
            @endif

            {{-- UPLOAD FOTO BARU --}}
            <input
                type="file"
                wire:model="photo"
                accept="image/*"
                class="mt-3 block w-full text-sm">

            {{-- PREVIEW FOTO BARU --}}
            @if ($photo)
                <div class="mt-2">
                    <img
                        src="{{ $photo->temporaryUrl() }}"
                        class="w-24 h-24 rounded-full object-cover border">
                </div>
            @endif
        </div>

        {{-- ACTION --}}
        <div class="flex justify-between pt-4">
            <a href="{{ route('admin.players.index') }}"
               class="px-4 py-2 rounded-lg border hover:bg-gray-50 font-semibold">
                Kembali
            </a>

            <button
                type="submit"
                class="px-6 py-2 rounded-lg bg-rose-600 text-white font-semibold hover:bg-rose-700">
                Update Pemain
            </button>
        </div>

    </form>
</div>
