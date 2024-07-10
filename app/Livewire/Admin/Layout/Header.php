<?php

namespace App\Livewire\Admin\Layout;

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
        return view('livewire.admin.layout.header',compact('v'));
    }
}
