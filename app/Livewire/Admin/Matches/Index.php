<?php

namespace App\Livewire\Admin\Matches;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MatchModel;

class Index extends Component
{
    use WithPagination;

    public string $search = '';
    public string $status = 'all'; // all | scheduled | finished | cancelled
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

    public function delete(int $id): void
    {
        MatchModel::findOrFail($id)->delete();
        session()->flash('success', 'Jadwal berhasil dihapus.');
        $this->resetPage();
    }

    public function render()
    {
        $q = MatchModel::query();

        if (trim($this->search) !== '') {
            $s = trim($this->search);
            $q->where(function ($w) use ($s) {
                $w->where('home_team', 'like', "%{$s}%")
                    ->orWhere('away_team', 'like', "%{$s}%")
                    ->orWhere('stadium', 'like', "%{$s}%");
            });
        }

        if ($this->status !== 'all') {
            $q->where('status', $this->status);
        }

        $matches = $q->orderBy($this->sortField, $this->sortDirection)->paginate(10);

        return view('livewire.admin.matches.index', compact('matches'))
            ->layout('admin.layouts.app')
            ->title('Manajemen Jadwal');
    }
}
