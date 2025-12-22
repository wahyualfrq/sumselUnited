<div class="p-6 max-w-3xl">
    <div class="mb-5">
        <h1 class="text-2xl font-bold">Edit Tiket</h1>
        <p class="text-sm text-gray-500">Update data pertandingan, harga, dan stok.</p>
    </div>

    <div class="bg-white rounded-xl shadow p-5 space-y-4">
        <div>
            <label class="text-sm font-semibold">Nama Pertandingan</label>
            <input wire:model="match_name" type="text"
                class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 outline-none">
            @error('match_name') <div class="text-xs text-red-600 mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="text-sm font-semibold">Stadion</label>
            <input wire:model="stadium" type="text"
                class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 outline-none">
            @error('stadium') <div class="text-xs text-red-600 mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="text-sm font-semibold">Tanggal & Jam</label>
            <input wire:model="match_date" type="datetime-local"
                class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 outline-none">
            @error('match_date') <div class="text-xs text-red-600 mt-1">{{ $message }}</div> @enderror
        </div>
        <div>
            <label class="block text-sm font-semibold mb-1">Status Penjualan</label>
            <select wire:model="sales_status" class="w-full border border-gray-300 rounded-lg px-3 py-2">
                <option value="upcoming">Segera Tersedia</option>
                <option value="available">Tiket Tersedia</option>
            </select>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="text-sm font-semibold">Harga</label>
                <input wire:model="price" type="number" min="0"
                    class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 outline-none">
                @error('price') <div class="text-xs text-red-600 mt-1">{{ $message }}</div> @enderror
            </div>

            <div>
                <label class="text-sm font-semibold">Stok</label>
                <input wire:model="stock" type="number" min="0"
                    class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 outline-none">
                @error('stock') <div class="text-xs text-red-600 mt-1">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="flex items-center gap-2">
            <input wire:model="is_active" type="checkbox" class="rounded">
            <span class="text-sm">Aktifkan tiket (tampil di halaman user)</span>
        </div>

        <div class="flex gap-2">
            <a href="{{ route('admin.tickets.index') }}"
                class="px-4 py-2 rounded-lg border border-gray-200 hover:bg-gray-50 font-semibold">
                Kembali
            </a>
            <button wire:click="update"
                class="px-4 py-2 rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-700">
                Update
            </button>
        </div>
    </div>
</div>