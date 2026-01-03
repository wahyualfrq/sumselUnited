<?php

namespace App\Livewire\Admin\Galleries;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Gallery;

class GalleryCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $cover_image;
    public $is_visible = true;

    protected $rules = [
        'title' => 'required|string|max:255',
        'cover_image' => 'required|image|max:2048',
    ];

    public function save()
    {
        $this->validate();

        // SIMPAN COVER
        $coverPath = $this->cover_image->store('gallery_covers', 'public');

        Gallery::create([
            'title' => $this->title,
            'cover_image' => $coverPath,
            'is_visible' => $this->is_visible,
        ]);

        session()->flash('success', 'Galeri berhasil dibuat');

        return redirect()->route('admin.gallery.index');
    }

    public function render()
    {
        return view('livewire.admin.gallery.create')
            ->layout('admin.layouts.app');
    }
}
