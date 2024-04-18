<?php

namespace App\Livewire\Components;

use App\Models\AllSection;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public $content;
    public function mount(){
        $user = Auth::user();
        $userSections = json_decode($user->section->section_arr,true);
        $this->content = AllSection::whereIn('id', $userSections)->get();
        // dd($this->content);
    }
    public function render()
    {
        return view('livewire.components.sidebar');
    }
}
