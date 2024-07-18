<?php

namespace App\Livewire\Home\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\settings\Footerlogo;

class Logo extends Component
{
    public $title;
    public $type;
    public $isActive;
    public $image;
    public object $footerLogo;

    public function mount(){
        $this->footerLogo = new Footerlogo;
    }

    protected $rules = [
        'title'    => 'required',
        'type'     => 'required',
        'isActive' => 'required',
    ];

    public function LogoForm(){

        $this->validate();

        $this->footerLogo->title= $this->title;
        $this->footerLogo->type = $this->type;
        $this->footerLogo->isActive = 1;
        $this->footerLogo->save();
        // OR

        // Footerlogo::create([
        //     'title'    => $this->title,
        //     //......
        // ])


        $this->dispatch('alert',type:'success',title:'عملیات با موفقیت فوتر لوگو انجام شد');

// code list shodaneshoon ro neveshtid?tel cheeck
    }

    public function uploadImage(){
        $year = now()->year;
        $month = now()->month;
        $directory = "footerlogo/$year/$month";
        $name = $this->image->getOriginalName();
        $this->image->storeAs($directory,$name);
        return "$directory/$name";
    }

    public function render()
    {
        return view('livewire.home.admin.settings.footer.logo');
    }
}
