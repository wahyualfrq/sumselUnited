<?php

namespace App\Livewire\Client;

use Livewire\Component;

class MediaComponent extends Component
{
    public function render()
    {
        return view('livewire.client.media-component')
            ->layout('client.layouts.app')
            ->title('Media Center');
    }
}
