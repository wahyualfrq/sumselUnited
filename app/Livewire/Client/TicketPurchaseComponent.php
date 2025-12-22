<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\TicketOrder;

class TicketPurchaseComponent extends Component
{
    public $confirmingTicketId = null;
    public $search = '';
    public $match = null;

    protected $queryString = [
        'search' => ['except' => ''],
        'match' => ['except' => null],
    ];

    public function confirmBuy(int $ticketId)
    {
        $this->confirmingTicketId = $ticketId;
    }

    public function buyConfirmed()
    {
        $ticket = Ticket::findOrFail($this->confirmingTicketId);

        if ($ticket->stock < 1) {
            session()->flash('error', 'Tiket sudah habis');
            $this->confirmingTicketId = null;
            return;
        }

        // 🔽 DEMO ORDER (SIAP DISAMBUNG PAYMENT GATEWAY)
        TicketOrder::create([
            'user_id' => auth()->id(),
            'ticket_id' => $ticket->id,
            'quantity' => 1,
            'total_price' => $ticket->price,
            'status' => 'paid', // DEMO
        ]);

        // 🔽 KURANGI STOK
        $ticket->decrement('stock');

        session()->flash('success', 'Tiket berhasil dibeli!');
        $this->confirmingTicketId = null;
    }

    public function render()
    {
        $search = trim($this->search);

        $tickets = Ticket::where('is_active', true)
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('match_name', 'LIKE', "%{$search}%")
                        ->orWhere('stadium', 'LIKE', "%{$search}%");
                });
            })
            ->orderBy('match_date')
            ->get();

        return view('livewire.client.tickets.purchase', [
            'tickets' => $tickets,
        ])
            ->layout('client.layouts.ticket')
            ->title('Pembelian Tiket');
    }


}
