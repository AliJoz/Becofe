<?php

namespace App\Livewire\Admin\Layouts;

use Livewire\Component;

use Hekmatinasser\Verta\Verta;
use Whoops\Exception\Formatter;
use Illuminate\Http\Request;
class Header extends Component
{  
    
    public function render()
    {
        $v = Verta();
        $v=$v->format('Y.m.d');
     
      
        //$user = \Auth::user();
        return view('livewire.admin.layouts.header',compact('v'));
    }
}