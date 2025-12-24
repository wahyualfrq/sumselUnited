<?php

namespace App\Livewire\Admin\Tickets;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\MatchGame;

class TicketCreateComponent extends Component
{
    public $match_id = 0;
    public $category = '';
    public $price = 0;
    public $stock = 0;
    public $sales_status = 'upcoming'; // ⬅️ WAJIB
    public $is_active = true;

    protected function rules()
    {
        return [
            'match_id'     => ['required', 'exists:matches,id'],
            'category'     => ['required', 'string', 'max:100'],
            'price'        => ['required', 'integer', 'min:0'],
            'stock'        => ['required', 'integer', 'min:0'],
            'sales_status' => ['required', 'in:upcoming,available'],
            'is_active'    => ['boolean'],
        ];
    }

    public function save()
    {
        $data = $this->validate();

        Ticket::create([
            'match_id'     => $data['match_id'],
            'category'     => $data['category'],
            'price'        => $data['price'],
            'stock'        => $data['stock'],
            'sales_status' => $data['sales_status'], // ⬅️ FIX
            'is_active'    => $data['is_active'],
        ]);

        session()->flash('success', 'Tiket berhasil ditambahkan.');
        return redirect()->route('admin.tickets.index');
    }

    public function render()
    {
        return view('livewire.admin.tickets.create', [
            'matches' => MatchGame::where('status', 'scheduled')
                ->orderBy('match_date')
                ->get(),
        ])
        ->layout('admin.layouts.app')
        ->title('Tambah Tiket');
    }
}
