<div class="bg-white rounded-xl border border-slate-200 shadow-sm">

    {{-- HEADER --}}
    <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">
        <h2 class="text-lg font-semibold text-slate-900">
            Video YouTube
        </h2>

        <button
            wire:click="sync"
            class="inline-flex items-center gap-2 px-4 py-2
                   bg-red-600 text-white rounded-lg text-sm font-semibold
                   hover:bg-red-700 transition">
            🔄 Sync YouTube
        </button>
    </div>

    {{-- TABLE WRAPPER (SCROLL DI SINI) --}}
    <div class="max-h-[80vh] overflow-y-auto overflow-x-auto">

        <table class="w-full text-sm text-left">
            <thead class="sticky top-0 bg-slate-50 border-b border-slate-200 z-10">
                <tr class="text-slate-600">
                    <th class="px-6 py-3 font-semibold">Thumbnail</th>
                    <th class="px-6 py-3 font-semibold">Judul</th>
                    <th class="px-6 py-3 font-semibold">Tanggal</th>
                    <th class="px-6 py-3 font-semibold text-center">Tampil</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                @forelse($videos as $video)
                    <tr class="hover:bg-slate-50 transition">
                        {{-- THUMBNAIL --}}
                        <td class="px-6 py-4">
                            <img
                                src="{{ $video->thumbnail }}"
                                alt="{{ $video->title }}"
                                class="w-32 rounded-lg border border-slate-200 shadow-sm">
                        </td>

                        {{-- TITLE --}}
                        <td class="px-6 py-4 font-medium text-slate-900">
                            {{ $video->title }}
                        </td>

                        {{-- DATE --}}
                        <td class="px-6 py-4 text-slate-600">
                            {{ $video->published_at?->format('d M Y') }}
                        </td>

                        {{-- TOGGLE --}}
                        <td class="px-6 py-4 text-center">
                            <button
                                wire:click="toggle({{ $video->id }})"
                                class="px-4 py-1.5 rounded-full text-xs font-bold text-white
                                {{ $video->is_visible ? 'bg-emerald-500 hover:bg-emerald-600' : 'bg-slate-400 hover:bg-slate-500' }}
                                transition">
                                {{ $video->is_visible ? 'ON' : 'OFF' }}
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center text-slate-500">
                            Belum ada video.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>
