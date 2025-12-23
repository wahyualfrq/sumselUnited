<?php

namespace App\Livewire\Admin\Galleries;

use Livewire\Component;
use Livewire\WithFileUploads; // ✅ WAJIB
use App\Models\Gallery;
use App\Models\GalleryPhoto;
use Illuminate\Support\Facades\Storage;

class GalleryEdit extends Component
{
    use WithFileUploads;

    public Gallery $gallery;
    public $photos = [];

    protected $rules = [
        'photos.*' => 'image|max:2048',
    ];

    // ⬇️ WAJIB ADA kalau pakai route model binding
    public function mount(Gallery $gallery)
    {
        $this->gallery = $gallery;
    }

    public function uploadPhotos()
    {
        $this->validate();

        foreach ($this->photos as $photo) {
            $path = $photo->store('galleries', 'public');

            $this->gallery->photos()->create([
                'image_path' => $path,
            ]);
        }

        $this->photos = [];
    }

    public function deletePhoto($id)
    {
        $photo = GalleryPhoto::where('gallery_id', $this->gallery->id)->findOrFail($id);

        if ($photo->image_path && Storage::disk('public')->exists($photo->image_path)) {
            Storage::disk('public')->delete($photo->image_path);
        }

        $photo->delete();
    }


    public function render()
    {
        return view('livewire.admin.galleries.edit', [
            'items' => $this->gallery->photos,
        ])->layout('admin.layouts.app');
    }
}
