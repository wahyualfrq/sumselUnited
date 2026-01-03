<?php

namespace App\Livewire\Admin\Players;

use Livewire\Component;
use App\Models\Player;

class Create extends Component
{
    public string $name = '';
    public string $position = '';
    public string $category = '';
    public ?int $number = null;
    public ?int $age = null;
    public string $country = '';
    public string $photo_url = '';

    protected function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:100',
            'category' => 'nullable|string|max:100',
            'number' => 'nullable|integer|min:1|max:99',
            'age' => 'nullable|integer|min:15|max:50',
            'country' => 'nullable|string|max:100',
            'photo_url' => 'nullable|url',
        ];
    }

    public function save()
    {
        Player::create($this->validate());

        session()->flash('success', 'Pemain berhasil ditambahkan');
        return redirect()->route('admin.players.index');
    }

    public function render()
    {
        return view('livewire.admin.players.create')
            ->layout('admin.layouts.app')
            ->title('Tambah Pemain');
    }
}
