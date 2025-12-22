<?php

namespace App\Livewire\Client;

use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        return view('livewire.client.contact-component')
            ->layout('client.layouts.app')
            ->title('Kontak');
    }
}
