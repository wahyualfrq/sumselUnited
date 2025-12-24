<?php

namespace App\Livewire\Admin\Matches;

use Livewire\Component;
use App\Models\MatchModel;

class Create extends Component
{
    public string $home_team = '';
    public string $away_team = '';
    public string $match_date = ''; // datetime-local (Y-m-d\TH:i)
    public ?string $stadium = null;
    public string $status = 'scheduled';

    protected function rules(): array
    {
        return [
            'home_team' => ['required', 'string', 'max:255'],
            'away_team' => ['required', 'string', 'max:255'],
            'match_date' => ['required', 'date'],
            'stadium' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:scheduled,finished,cancelled'],
        ];
    }

    public function save()
    {
        $data = $this->validate();

        MatchModel::create($data);

        session()->flash('success', 'Jadwal pertandingan berhasil ditambahkan.');
        return redirect()->route('admin.matches.index');
    }

    public function render()
    {
        return view('livewire.admin.matches.create')
            ->layout('admin.layouts.app')
            ->title('Tambah Jadwal');
    }
}
