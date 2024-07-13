<?php

namespace App\Livewire\Home\Admin\Settings\Footer;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Lable extends Component
{
    public $uplable,$widerLable1,$widerLable2,$widerLable3,$widerLable4,$widerLable5,$soctaiLable,$rrsLable,$suppirtLable,$emailLable,$aboutHeadLable,$addresLable,$copyright,$phoneLable,$aboutbodyLable;

    public function render()
    {
        $footer=DB::connection('mysql-setting')->table('footer')->first();
       $this->uplable=$footer->uplable;
       $this->widerLable1=$footer->widerLable1;
       $this->widerLable2=$footer->widerLable2;
       $this->widerLable3=$footer->widerLable3;
       $this->widerLable4=$footer->widerLable4;
       $this->widerLable5=$footer->widerLable5;
       $this->soctaiLable=$footer->soctaiLable;
       $this->rrsLable=$footer->rrsLable;
       $this->suppirtLable=$footer->suppirtLable;
       $this->emailLable=$footer->emailLable;
       $this->aboutHeadLable=$footer->aboutHeadLable;
       $this->copyright=$footer->copyright;
       $this->addresLable=$footer->addresLable;
       $this->phoneLable=$footer->phoneLable;
       $this->aboutbodyLable=$footer->aboutbodyLable;

        return view('livewire.home.admin.settings.footer.lable',compact('footer'));
    }
    public function update(){
        $footer=Db::connection('mysql-setting')->table('footer')->first();
    $this->validate([
//valid
        'uplable'=>'required',
        'widerLable1'=>'required',
        'widerLable2'=>'required',
        'widerLable3'=>'required',
        'widerLable4'=>'required',
        'widerLable5'=>'required',
        'soctaiLable'=>'required',
        'rrsLable'=>'required',
        'suppirtLable'=>'required',
        'emailLable'=>'required',
        'aboutHeadLable'=>'required',
        'copyright'=>'required',
        'addresLable'=>'required',
        'phoneLable'=>'required',
        'aboutbodyLable'=>'required',
    ]);
//update
        $footer->update([
        'uplable'=>'required',
        'widerLable1'=>'required',
        'widerLable2'=>'required',
        'widerLable3'=>'required',
        'widerLable4'=>'required',
        'widerLable5'=>'required',
        'soctaiLable'=>'required',
        'rrsLable'=>'required',
        'suppirtLable'=>'required',
        'emailLable'=>'required',
        'aboutHeadLable'=>'required',
        'copyright'=>'required',
        'addresLable'=>'required',
        'phoneLable'=>'required',
        'aboutbodyLable'=>'required',
]);

    }

}
