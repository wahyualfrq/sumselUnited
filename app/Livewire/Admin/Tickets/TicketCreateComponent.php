<?php

namespace App\Livewire\Admin\Tickets;

use Livewire\Component;
use App\Models\Ticket;

class TicketCreateComponent extends Component
{
    public string $match_name = '';
    public string $stadium = '';
    public string $match_date = ''; // format: Y-m-d\TH:i (input datetime-local)
    public int $price = 0;
    public int $stock = 0;

    public string $sales_status = 'upcoming';

    public bool $is_active = true;

    protected function rules(): array
    {
        return [
            'match_name' => ['required', 'string', 'max:255'],
            'stadium' => ['required', 'string', 'max:255'],
            'match_date' => ['required', 'date'],
            'sales_status' => ['required', 'in:upcoming,available'],
            'price' => ['required', 'integer', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
            'is_active' => ['boolean'],
        ];
    }

    public function save()
    {
        $data = $this->validate();

        Ticket::create($data);

        session()->flash('success', 'Tiket berhasil ditambahkan.');
        return redirect()->route('admin.tickets.index');
    }

    public function render()
    {
        return view('livewire.admin.tickets.create')
            ->layout('admin.layouts.app')
            ->title('Tambah Tiket');
    }
}
