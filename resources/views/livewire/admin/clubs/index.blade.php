<div class="p-8 bg-white h-full overflow-y-auto">

    {{-- HEADER --}}
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <div>
            <h1 class="text-[20px] font-semibold text-slate-900 tracking-tight">
                Manajemen Klub
            </h1>
            <p class="text-sm text-slate-500 mt-1">
                Kelola dan pantau daftar klub yang terdaftar dalam sistem.
            </p>
        </div>

        <div class="flex items-center gap-3">
            {{-- IMPORT EXCEL --}}
            <a href="{{ route('admin.clubs.import') }}"
               class="inline-flex items-center px-4 py-2 bg-blue-50 text-blue-700 hover:bg-blue-100
                      border border-blue-100 rounded-lg text-sm font-semibold transition shadow-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 16v-8m0 0l-3 3m3-3l3 3M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2" />
                </svg>
                Import Excel
            </a>

            {{-- TAMBAH KLUB --}}
            <a href="{{ route('admin.clubs.create') }}"
               class="inline-flex items-center px-4 py-2 bg-rose-50 text-rose-700 hover:bg-rose-100
                      border border-rose-100 rounded-lg text-sm font-semibold transition shadow-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 4v16m8-8H4"></path>
                </svg>
                Tambah Klub
            </a>
        </div>
    </div>

    {{-- ALERT --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-700 text-sm rounded-xl flex items-center">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
            </svg>
            {{ session('success') }}
        </div>
    @endif

    {{-- TABLE --}}
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto max-h-[65vh] overflow-y-auto">

            <table class="w-full text-[14px] text-left border-collapse">
                <thead class="bg-slate-50/80 border-b border-slate-200 sticky top-0 z-10 backdrop-blur">
                    <tr>
                        <th class="px-6 py-4 text-xs font-semibold text-slate-500 uppercase">Logo</th>
                        <th class="px-6 py-4 text-xs font-semibold text-slate-500 uppercase">Nama Klub</th>
                        <th class="px-6 py-4 text-xs font-semibold text-slate-500 uppercase">Kota</th>
                        <th class="px-6 py-4 text-xs font-semibold text-slate-500 uppercase">Stadion</th>
                        <th class="px-6 py-4 text-xs font-semibold text-slate-500 uppercase text-right">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">
                    @forelse($clubs as $club)
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-6 py-4">
                                @if($club->logo)
                                    <img src="{{ $club->logo }}"
                                         class="w-10 h-10 rounded-full object-contain border border-slate-200 bg-white shadow-sm"
                                         loading="lazy">
                                @else
                                    <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center">
                                        <span class="text-slate-400 text-sm">—</span>
                                    </div>
                                @endif
                            </td>

                            <td class="px-6 py-4 font-semibold text-slate-900">
                                {{ $club->name }}
                            </td>

                            <td class="px-6 py-4 text-slate-600">
                                {{ $club->city ?? '-' }}
                            </td>

                            <td class="px-6 py-4 text-slate-600">
                                {{ $club->stadium ?? '-' }}
                            </td>

                            <td class="px-6 py-4 text-right">
                                <button wire:click="delete({{ $club->id }})"
                                        onclick="confirm('Hapus klub {{ $club->name }}?') || event.stopImmediatePropagation()"
                                        class="inline-flex items-center px-3 py-1.5 text-rose-600
                                               hover:bg-rose-50 rounded-lg font-semibold transition">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-16 text-center text-slate-500">
                                Belum ada klub terdaftar
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

    {{-- PAGINATION --}}
    <div class="mt-6 flex justify-end">
        <div class="px-4 py-2 bg-white border border-slate-200 rounded-xl shadow-sm">
            {{ $clubs->links() }}
        </div>
    </div>

</div>
