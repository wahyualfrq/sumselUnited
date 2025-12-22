<?php

namespace App\Livewire\Admin\Tickets;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ticket;

class TicketIndexComponent extends Component
{
    use WithPagination;

    public string $search = '';
    public string $status = 'all'; // all | active | inactive
    public string $sortField = 'match_date';
    public string $sortDirection = 'asc';

    protected $queryString = [
        'search' => ['except' => ''],
        'status' => ['except' => 'all'],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingStatus()
    {
        $this->resetPage();
    }

    public function sortBy(string $field): void
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
        $this->resetPage();
    }

    public function toggleActive(int $id): void
    {
        $t = Ticket::findOrFail($id);
        $t->update(['is_active' => !$t->is_active]);
    }

    public function delete(int $id): void
    {
        Ticket::findOrFail($id)->delete();
        session()->flash('success', 'Tiket berhasil dihapus.');
    }

    public function render()
    {
        $q = Ticket::query();

        if ($this->search !== '') {
            $q->where(function ($w) {
                $w->where('match_name', 'like', "%{$this->search}%")
                    ->orWhere('stadium', 'like', "%{$this->search}%");
            });
        }

        if ($this->status === 'active')
            $q->where('is_active', true);
        if ($this->status === 'inactive')
            $q->where('is_active', false);

        $tickets = $q->orderBy($this->sortField, $this->sortDirection)->paginate(10);

        return view('livewire.admin.tickets.index', compact('tickets'))
            ->layout('admin.layouts.app')
            ->title('Manajemen Tiket');
    }
}
