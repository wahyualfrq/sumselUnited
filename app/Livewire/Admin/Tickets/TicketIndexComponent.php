<?php

namespace App\Livewire\Admin\Tickets;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ticket;
use App\Models\FootballMatch;

class TicketIndexComponent extends Component
{
    use WithPagination;

    public string $search = '';
    public string $status = 'all'; // all | active | inactive
    public string $sortField = 'match_date'; // match_date | price | stock
    public string $sortDirection = 'asc';

    protected $queryString = [
        'search' => ['except' => ''],
        'status' => ['except' => 'all'],
    ];

    protected $paginationTheme = 'tailwind';

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
        $q = Ticket::query()
            ->with('match')
            ->join('matches', 'matches.id', '=', 'tickets.match_id');

        // 🔎 SEARCH (lewat MATCH)
        if ($this->search !== '') {
            $q->where(function ($w) {
                $w->where('matches.home_team', 'like', "%{$this->search}%")
                    ->orWhere('matches.away_team', 'like', "%{$this->search}%")
                    ->orWhere('matches.stadium', 'like', "%{$this->search}%");
            });
        }

        // 🔘 FILTER STATUS ACTIVE
        if ($this->status === 'active') {
            $q->where('tickets.is_active', true);
        } elseif ($this->status === 'inactive') {
            $q->where('tickets.is_active', false);
        }

        // 🔃 SORTING
        if ($this->sortField === 'match_date') {
            $q->orderBy('matches.match_date', $this->sortDirection);
        } else {
            $q->orderBy("tickets.{$this->sortField}", $this->sortDirection);
        }

        $tickets = $q
            ->select('tickets.*')
            ->paginate(10);

        return view('livewire.admin.tickets.index', compact('tickets'))
            ->layout('admin.layouts.app')
            ->title('Manajemen Tiket');
    }
}
