<?php

namespace App\Livewire\Admin\Tickets;

use Livewire\Component;
use App\Models\Ticket;

class TicketEditComponent extends Component
{
    public Ticket $ticket;

    public string $match_name = '';
    public string $stadium = '';
    public string $match_date = '';
    public int $price = 0;
    public int $stock = 0;
    public bool $is_active = true;

    public function mount(Ticket $ticket)
    {
        $this->ticket = $ticket;

        $this->match_name = $ticket->match_name;
        $this->stadium = $ticket->stadium;
        $this->match_date = optional($ticket->match_date)->format('Y-m-d\TH:i') ?? '';
        $this->price = (int) $ticket->price;
        $this->stock = (int) $ticket->stock;
        $this->is_active = (bool) $ticket->is_active;
    }

    protected function rules(): array
    {
        return [
            'match_name' => ['required', 'string', 'max:255'],
            'stadium' => ['required', 'string', 'max:255'],
            'match_date' => ['required', 'date'],
            'price' => ['required', 'integer', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
            'is_active' => ['boolean'],
        ];
    }

    public function update()
    {
        $data = $this->validate();
        $this->ticket->update($data);

        session()->flash('success', 'Tiket berhasil diupdate.');
        return redirect()->route('admin.tickets.index');
    }

    public function render()
    {
        return view('livewire.admin.tickets.edit')
            ->layout('admin.layouts.app')
            ->title('Edit Tiket');
    }
}
