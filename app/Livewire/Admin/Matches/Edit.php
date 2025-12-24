<?php

namespace App\Livewire\Admin\Matches;

use Livewire\Component;
use App\Models\MatchModel;

class Edit extends Component
{
    public MatchModel $match;

    public string $home_team = '';
    public string $away_team = '';
    public string $match_date = '';
    public ?string $stadium = null;
    public string $status = 'scheduled';

    public function mount(MatchModel $match)
    {
        $this->match = $match;

        $this->home_team = $match->home_team;
        $this->away_team = $match->away_team;
        $this->match_date = optional($match->match_date)->format('Y-m-d\TH:i') ?? '';
        $this->stadium = $match->stadium;
        $this->status = $match->status ?? 'scheduled';
    }

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

    public function update()
    {
        $data = $this->validate();
        $this->match->update($data);

        session()->flash('success', 'Jadwal berhasil diupdate.');
        return redirect()->route('admin.matches.index');
    }

    public function render()
    {
        return view('livewire.admin.matches.edit')
            ->layout('admin.layouts.app')
            ->title('Edit Jadwal');
    }
}
