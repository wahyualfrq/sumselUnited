<?php

namespace App\Livewire\Admin\Players;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Player;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public Player $player;

    // FOTO BARU (UPLOAD)
    public $photo;

    protected function rules()
    {
        return [
            'player.name' => 'required|string|max:255',
            'player.position' => 'required|string|max:10',
            'player.category' => 'nullable|string|max:50',
            'player.number' => 'nullable|integer|min:0',
            'player.age' => 'nullable|integer|min:0',
            'player.country' => 'nullable|string|max:100',
            'photo' => 'nullable|image|max:2048', // 2MB
        ];
    }

    public function update()
    {
        $this->validate();

        // JIKA UPLOAD FOTO BARU
        if ($this->photo) {

            // hapus foto lama
            if ($this->player->photo_url) {
                Storage::disk('public')->delete($this->player->photo_url);
            }

            // simpan foto baru
            $path = $this->photo->store('players', 'public');
            $this->player->photo_url = $path;
        }

        $this->player->save();

        session()->flash('success', 'Data pemain berhasil diperbarui.');
        return redirect()->route('admin.players.index');
    }

    public function render()
    {
        return view('livewire.admin.players.edit')
            ->layout('admin.layouts.app')
            ->title('Edit Pemain');
    }
}
