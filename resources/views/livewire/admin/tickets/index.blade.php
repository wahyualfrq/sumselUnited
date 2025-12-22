<div class="p-6">
    <div class="flex items-center justify-between mb-5">
        <div>
            <h1 class="text-2xl font-bold">Manajemen Tiket</h1>
            <p class="text-sm text-gray-500">Tambah, edit, aktif/nonaktif, dan hapus tiket.</p>
        </div>
        <a href="{{ route('admin.tickets.create') }}"
            class="px-4 py-2 rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-700">
            + Tambah Tiket
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 rounded-lg bg-green-50 text-green-700 border border-green-200">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow p-4 mb-4 flex flex-col md:flex-row gap-3 items-center justify-between">
        <div class="w-full md:w-1/2">
            <input wire:model.live="search" type="text" placeholder="Cari match / stadion..."
                class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 outline-none">
        </div>

        <div class="w-full md:w-56">
            <select wire:model.live="status"
                class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 outline-none">
                <option value="all">Semua</option>
                <option value="active">Aktif</option>
                <option value="inactive">Nonaktif</option>
            </select>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th class="text-left p-3 cursor-pointer" wire:click="sortBy('match_date')">Tanggal</th>
                    <th class="text-left p-3 cursor-pointer" wire:click="sortBy('match_name')">Pertandingan</th>
                    <th class="text-left p-3">Stadion</th>
                    <th class="text-right p-3 cursor-pointer" wire:click="sortBy('price')">Harga</th>
                    <th class="text-right p-3 cursor-pointer" wire:click="sortBy('stock')">Stok</th>
                    <th class="text-center p-3">Status</th>
                    <th class="text-right p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tickets as $t)
                    <tr class="border-t">
                        <td class="p-3">
                            {{ $t->match_date?->format('d M Y H:i') }}
                        </td>
                        <td class="p-3 font-semibold">
                            {{ $t->match_name }}
                        </td>
                        <td class="p-3 text-gray-600">
                            {{ $t->stadium }}
                        </td>
                        <td class="p-3 text-right">
                            Rp {{ number_format($t->price, 0, ',', '.') }}
                        </td>
                        <td class="p-3 text-right">
                            {{ $t->stock }}
                        </td>
                        <td class="p-3 text-center">
                            <button wire:click="toggleActive({{ $t->id }})" class="px-3 py-1 rounded-full text-xs font-bold
                                    {{ $t->is_active ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' }}">
                                {{ $t->is_active ? 'Aktif' : 'Nonaktif' }}
                            </button>
                        </td>
                        <td class="p-3 text-right space-x-2">
                            <a href="{{ route('admin.tickets.edit', $t->id) }}"
                                class="px-3 py-1 rounded-lg bg-indigo-50 text-indigo-700 font-semibold hover:bg-indigo-100">
                                Edit
                            </a>

                            <button onclick="confirm('Hapus tiket ini?') || event.stopImmediatePropagation()"
                                wire:click="delete({{ $t->id }})"
                                class="px-3 py-1 rounded-lg bg-red-50 text-red-700 font-semibold hover:bg-red-100">
                                Hapus
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr class="border-t">
                        <td colspan="7" class="p-8 text-center text-gray-500">
                            Belum ada data tiket.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $tickets->links() }}
    </div>
</div>