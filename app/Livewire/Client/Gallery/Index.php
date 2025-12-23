<?php

namespace App\Livewire\Client\Gallery;

use Livewire\Component;
use App\Models\Gallery;

class Index extends Component
{
    public $galleries;

    public function mount()
    {
        $this->galleries = Gallery::where('is_visible', true)
            ->latest()
            ->get();
    }

    public function render()
    {
        $this->galleries = Gallery::where('is_visible', true)
            ->withCount('photos')
            ->latest()
            ->get();

        return view('livewire.client.gallery.index')
            ->layout('client.layouts.app');
    }
}
