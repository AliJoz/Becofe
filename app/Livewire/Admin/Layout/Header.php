<?php

namespace App\Livewire\Admin\Layout;

use Livewire\Component;
use Verta;

class Header extends Component
{
    public function render()
    {
        $v = verta();
        $v = $v->format('Y.m.d');
        //$user = \Auth::user();
        return view('livewire.admin.layout.header',compact('v','user'));
    }
}
