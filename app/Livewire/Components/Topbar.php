<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Topbar extends Component
{
    public $role;
    public function mount()
    {
        $user = Auth::user();
        $this->role = $user->role->name;
        
    }
    public function render()
    {
        return view('livewire.components.topbar');
    }
}
