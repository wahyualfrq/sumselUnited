<?php

namespace App\Livewire\Admin\Clubs;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ClubsImport;


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

        Excel::import(new ClubsImport, $this->file);

        session()->flash('success', 'Data klub berhasil diimport');
        $this->reset('file');
    }

    public function render()
    {
        return view('livewire.admin.clubs.import')->layout('admin.layouts.app');

    }
}
