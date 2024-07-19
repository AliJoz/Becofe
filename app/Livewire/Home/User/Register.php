<?php

namespace App\Livewire\Home\User;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.home.user.register')->layout('auth');
    }
}
