<div class="max-w-4xl mx-auto px-6 py-14">
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">

        {{-- HEADER --}}
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-900 leading-tight">
                {{ $ticket->match_name }}
            </h1>

            <p class="mt-2 text-sm text-gray-500 flex items-center gap-2">
                <span>{{ $ticket->stadium }}</span>
                <span class="text-gray-300">•</span>
                <span>{{ $ticket->match_date->format('d F Y • H:i') }} WIB</span>
            </p>
        </div>

        {{-- INFO GRID --}}
        <div class="grid grid-cols-2 gap-6 bg-gray-50 rounded-xl p-5 mb-6">
            <div>
                <p class="text-xs uppercase tracking-wide text-gray-500">
                    Harga Tiket
                </p>
                <p class="mt-1 text-2xl font-bold text-indigo-600">
                    Rp {{ number_format($ticket->price,0,',','.') }}
                </p>
            </div>

            <div>
                <p class="text-xs uppercase tracking-wide text-gray-500">
                    Sisa Tiket
                </p>
                <p class="mt-1 text-2xl font-bold text-gray-900">
                    {{ $ticket->stock }}
                </p>
            </div>
        </div>

        {{-- STATUS --}}
        <div class="mb-8">
            @if($ticket->status === 'available')
                <span class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-4 py-1.5 rounded-full text-sm font-medium">
                    ● Tiket Tersedia
                </span>
            @elseif($ticket->status === 'upcoming')
                <span class="inline-flex items-center gap-2 bg-yellow-100 text-yellow-700 px-4 py-1.5 rounded-full text-sm font-medium">
                    ● Segera Tersedia
                </span>
            @else
                <span class="inline-flex items-center gap-2 bg-gray-200 text-gray-600 px-4 py-1.5 rounded-full text-sm font-medium">
                    ● Tiket Habis
                </span>
            @endif
        </div>

        {{-- CTA --}}
        <div class="flex flex-col sm:flex-row gap-4">
            @if($ticket->status === 'available')
                <button
                    class="flex-1 bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 transition
                           text-white py-3 rounded-xl font-semibold shadow-md">
                    Beli Tiket
                </button>
            @endif

            <a href="{{ route('tickets.purchase') }}"
               class="flex-1 border border-gray-300 hover:border-gray-400 hover:bg-gray-50
                      transition text-center py-3 rounded-xl font-semibold text-gray-700">
                Lihat Tiket Lainnya
            </a>
        </div>

    </div>

    {{-- MODAL KONFIRMASI --}}
    @if($confirmingTicketId)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">
            <div class="bg-white rounded-2xl shadow-xl w-full max-w-md p-6 animate-slideDown">

                <h3 class="text-lg font-bold text-gray-900 mb-1">
                    Konfirmasi Pembelian
                </h3>

                <p class="text-sm text-gray-600 mb-6">
                    Apakah kamu yakin ingin membeli tiket pertandingan ini?
                </p>

                <div class="flex justify-end gap-3">
                    {{-- BATAL --}}
                    <button
                        type="button"
                        wire:click="$set('confirmingTicketId', null)"
                        class="px-4 py-2 rounded-lg text-sm font-medium
                               bg-gray-100 hover:bg-gray-200 transition">
                        Batal
                    </button>

                    {{-- KONFIRMASI --}}
                    <button
                        type="button"
                        wire:click="buyConfirmed"
                        wire:loading.attr="disabled"
                        wire:target="buyConfirmed"
                        class="px-5 py-2 rounded-lg text-sm font-semibold
                               bg-indigo-600 hover:bg-indigo-700 transition
                               text-white">

                        <span wire:loading.remove wire:target="buyConfirmed">
                            Konfirmasi Beli
                        </span>

                        <span wire:loading wire:target="buyConfirmed">
                            Memproses...
                        </span>
                    </button>
                </div>

            </div>
        </div>
    @endif
</div>
