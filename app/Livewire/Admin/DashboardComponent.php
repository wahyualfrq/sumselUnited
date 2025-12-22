<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('admin.layouts.app')]
class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard-component');
    }

    public function mount()
    {
        abort_unless(auth()->user()?->role === 'admin', 403);
    }


}
