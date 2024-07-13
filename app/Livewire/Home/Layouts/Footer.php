<?php

namespace App\Livewire\Home\Layouts;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Footer extends Component
{
    public function render()
    {
        $footer=DB::connection('mysql-setting')->table('footer')->get();
        $footer = $footer[0];
        // $topLogoFooter = DB::connection('mysql-setting')->table('footer-logos')
        //     ->where('isActive', 1)->where('type', 'top')->where('deleted_at', null)->get();
        // $bottomLogoFooter = DB::connection('mysql-setting')->table('footer-logos')
        //     ->where('isActive', 1)->where('type', 'bottom')->where('deleted_at', null)->get();

        // $menus1 = DB::connection('mysql-setting')->table('footer-menus')
        //     ->where('isActive', 1)->where('type', 'widerLable1')->get();
        // $menus2 = DB::connection('mysql-setting')->table('footer-menus')
        //     ->where('isActive', 1)->where('type', 'widerLable2')->get();
        // $menus3 = DB::connection('mysql-setting')->table('footer-menus')
        //     ->where('isActive', 1)->where('type', 'widerLable3')->get();
        // $menus4 = DB::connection('mysql-setting')->table('footer-menus')
        //     ->where('isActive', 1)->where('type', 'widerLable4')->get();
        // $menus5 = DB::connection('mysql-setting')->table('footer-menus')
        //     ->where('isActive', 1)->where('type', 'widerLable5')->get();
        return view('livewire.home.layouts.footer',compact('footer'));
    }
}
