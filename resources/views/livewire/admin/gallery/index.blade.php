<div class="p-6 space-y-6">

    {{-- HEADER --}}
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold">Galeri Foto</h1>
        <a href="{{ route('admin.gallery.create') }}"
           class="bg-rose-600 text-white px-4 py-2 rounded-lg font-semibold">
            + Tambah Galeri
        </a>
    </div>

    {{-- TABLE --}}
    <div class="bg-white rounded-xl shadow overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="p-4">Cover</th>
                    <th>Judul</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th class="text-right p-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($galleries as $gallery)
                    <tr class="border-t">
                        <td class="p-4">
                            <img src="{{ asset('storage/'.$gallery->cover_image) }}"
                                 class="w-20 h-14 rounded object-cover"
                                 onerror="this.src='https://via.placeholder.com/150'">
                        </td>
                        <td class="font-semibold">
                            {{ $gallery->title }}
                        </td>
                        <td>
                            {{ $gallery->photos_count }} Foto
                        </td>
                        <td>
                            @if($gallery->is_visible)
                                <span class="text-green-600 font-semibold">Aktif</span>
                            @else
                                <span class="text-gray-400">Draft</span>
                            @endif
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <a href="{{ route('admin.gallery.edit', $gallery->id) }}"
                               class="text-blue-600 font-semibold">
                                Edit
                            </a>
                            <button class="text-red-600 font-semibold">
                                Hapus
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center p-6 text-gray-400">
                            Belum ada galeri
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
