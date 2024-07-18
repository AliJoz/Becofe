<?php

namespace App\Livewire\Home\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\settings\Footerlogo;
use Livewire\WithFileUploads;
class Logo extends Component
{
    public $title;
    public $type;
    public $isActive;
    public $image;
    //public object $footerLogo;
    use WithFileUploads;
    // public function mount(){
    //     $this->footerLogo = new Footerlogo;
    // }
    public Footerlogo $Footerlogo;
    protected $rules = [
        'title'    => 'required',
        'type'     => 'required',
        'image'     => 'nullable',
    ];


    public function LogoForm(){

        $this->validate();

        // $this->footerLogo->title= $this->title;
        // $this->footerLogo->type = $this->type;
        // $this->footerLogo->isActive = 1;
        // $this->footerLogo->save();


        // OR

        $logo =  Footerlogo::create([
            'title'    => $this->title,
            'type'     => $this->type,
            'isActive' => 1,
            //......
        ]);

        if($this->image){
            $logo->update([
                'image' => $this->uploadImage()
            ]);
        }

        $this->dispatch('alert',type:'success',title:'عملیات با موفقیت فوتر لوگو انجام شد');


    }

    public function uploadImage(){
        $year = now()->year;
        $month = now()->month;
        $directory = "footerlogo/$year/$month";
        $name = $this->image->getClientOriginalName();
        $this->image->storeAs($directory,$name);
        return "$directory/$name";
    }

    public function render()
    {
        return view('livewire.home.admin.settings.footer.logo');
    }
}
