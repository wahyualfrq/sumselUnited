<?php

namespace App\Livewire\Client;

use Livewire\Component;

class ClubComponent extends Component
{
    public function render()
    {
        return view('livewire.client.club-component')
            ->layout('client.layouts.app')
            ->title('Tentang Klub');
    }
}
