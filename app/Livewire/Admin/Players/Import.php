<?php

namespace App\Livewire\Admin\Players;

use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PlayersImport;

class Import extends Component
{
    use WithFileUploads;

    public $file;

    protected $rules = [
        'file' => 'required|mimes:xlsx,xls'
    ];

    public function import()
    {
        $this->validate();

        Excel::import(new PlayersImport, $this->file);

        session()->flash('success', 'Data pemain berhasil diimport');
        return redirect()->route('admin.players.index');
    }

    public function render()
    {
        return view('livewire.admin.players.import')
            ->layout('admin.layouts.app')
            ->title('Import Pemain');
    }
}
