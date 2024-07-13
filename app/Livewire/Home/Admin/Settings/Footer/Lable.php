<?php

namespace App\Livewire\Home\Admin\Settings\Footer;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Lable extends Component
{
    public function render()
    {
        $footer=DB::connection('mysql-setting')->table('footer')->get();
        $footer = $footer[0];
        return view('livewire.home.admin.settings.footer.lable',compact('footer'));
    }
}
