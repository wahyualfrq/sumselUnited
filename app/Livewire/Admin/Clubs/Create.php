<?php

namespace App\Livewire\Admin\Clubs;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Club;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $city;
    public $stadium;

    // dua opsi logo
    public $logo;        // upload file
    public $logo_url;    // url manual

    protected $rules = [
        'name' => 'required|string|max:255',
        'city' => 'nullable|string|max:255',
        'stadium' => 'nullable|string|max:255',

        // salah satu boleh diisi
        'logo' => 'nullable|image|max:2048',
        'logo_url' => 'nullable|url|max:500',
    ];

    public function save()
    {
        $this->validate();

        $logoValue = null;

        // PRIORITAS: upload file
        if ($this->logo) {
            $logoValue = $this->logo->store('clubs', 'public');
        }
        // kalau tidak upload, pakai URL
        elseif ($this->logo_url) {
            $logoValue = $this->logo_url;
        }

        Club::create([
            'name' => $this->name,
            'city' => $this->city,
            'stadium' => $this->stadium,
            'logo' => $logoValue,
            'is_active' => true,
        ]);

        session()->flash('success', 'Klub berhasil ditambahkan');
        return redirect()->route('admin.clubs.index');
    }

    public function render()
    {
        return view('livewire.admin.clubs.create')
            ->layout('admin.layouts.app');
    }
}
