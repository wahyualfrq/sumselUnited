<?php

namespace App\Livewire\Client;

use Livewire\Component;

class MatchComponent extends Component
{
    public function render()
    {
        return view('livewire.client.match-component')
            ->layout('client.layouts.app')
            ->title('Pertandingan');
    }
}
