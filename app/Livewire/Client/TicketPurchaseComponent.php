<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\TicketOrder;
use Illuminate\Support\Facades\DB;

class TicketPurchaseComponent extends Component
{
    public $confirmingTicketId = null;
    public $search = '';
    public $ticket = null;

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    /**
     * ===========================
     * MOUNT (DETAIL TIKET)
     * ===========================
     */
    public function mount($ticket = null)
    {
        if ($ticket) {
            $this->ticket = Ticket::query()
                ->join('matches', 'tickets.match_id', '=', 'matches.id')
                ->where('tickets.id', $ticket)
                ->select(
                    'tickets.*',
                    'matches.match_date',
                    'matches.stadium',
                    DB::raw("CONCAT(matches.home_team,' vs ',matches.away_team) AS match_name")
                )
                ->firstOrFail();
        }
    }

    public function confirmBuy(int $ticketId)
    {
        $this->confirmingTicketId = $ticketId;
    }

    /**
     * ===========================
     * PROSES PEMBELIAN
     * ===========================
     */
    public function buyConfirmed()
    {
        $ticket = Ticket::findOrFail($this->confirmingTicketId);

        if ($ticket->stock < 1) {
            session()->flash('error', 'Tiket sudah habis');
            $this->confirmingTicketId = null;
            return;
        }

        TicketOrder::create([
            'user_id' => auth()->id(),
            'ticket_id' => $ticket->id,
            'quantity' => 1,
            'total_price' => $ticket->price,
            'status' => 'paid',
        ]);

        // kurangi stok
        $ticket->decrement('stock');

        session()->flash('success', 'Tiket berhasil dibeli!');
        $this->confirmingTicketId = null;
    }

    /**
     * ===========================
     * RENDER
     * ===========================
     */
    public function render()
    {
        /**
         * DETAIL PAGE
         */
        if ($this->ticket) {
            return view('livewire.client.tickets.detail', [
                'ticket' => $this->ticket
            ])
                ->layout('client.layouts.app')
                ->title('Detail Tiket');
        }

        /**
         * LIST TIKET
         */
        $search = trim($this->search);

        $tickets = Ticket::query()
            ->join('matches', 'tickets.match_id', '=', 'matches.id')
            ->where('tickets.is_active', true)
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('matches.home_team', 'LIKE', "%{$search}%")
                        ->orWhere('matches.away_team', 'LIKE', "%{$search}%")
                        ->orWhere('matches.stadium', 'LIKE', "%{$search}%");
                });
            })
            ->orderByRaw("CASE tickets.sales_status WHEN 'available' THEN 0 ELSE 1 END")
            ->orderBy('matches.match_date', 'asc')
            ->select(
                'tickets.*',
                'matches.match_date',
                'matches.stadium',
                DB::raw("CONCAT(matches.home_team,' vs ',matches.away_team) AS match_name")
            )
            ->get();

        return view('livewire.client.tickets.purchase', compact('tickets'))
            ->layout('client.layouts.app')
            ->title('Beli Tiket');
    }
}
