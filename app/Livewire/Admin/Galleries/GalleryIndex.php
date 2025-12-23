<?php
namespace App\Livewire\Admin\Galleries;

use Livewire\Component;
use App\Models\Gallery;

class GalleryIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.gallery.index', [
            'galleries' => Gallery::withCount('photos')->latest()->get()
        ])->layout('admin.layouts.app');
    }
}
