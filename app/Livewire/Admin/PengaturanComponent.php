<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('admin.layouts.app')]
class PengaturanComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.pengaturan-component');
    }
}
