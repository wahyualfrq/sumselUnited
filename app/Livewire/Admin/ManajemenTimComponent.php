<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('admin.layouts.app')]
class ManajemenTimComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.manajemen-tim-component');
    }
}
