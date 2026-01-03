<?php

namespace App\Livewire\Client;

use Livewire\Component;

class TeamComponent extends Component
{
    public function render()
    {
        return view('livewire.client.team-component')
            ->layout('client.layouts.app')
            ->title('Tim & Pemain');
    }
}
