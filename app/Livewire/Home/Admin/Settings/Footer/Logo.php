<?php

namespace App\Livewire\Home\Admin\Settings\Footer;
use App\Models\Admin\settings\Footerlogo;
use Livewire\Component;
use Livewire\WithFileUploads;

class Logo extends Component
{
    use WithFileUploads;
    public $title,$type,$isActive,$image;
    public Footerlogo $Footerlogo;

    public function mount(){
        $this->Footerlogo = new Footerlogo;
    }

    protected $rules = [
        'Footerlogo.title'    => 'required',
        'Footerlogo.type'     => 'required',
        'Footerlogo.image' => 'nullable',
    ];

    public function LogoForm(){
        $this->validate();

        $logo = $this->Footerlogo->query()->create([
            'title'    => $this->Footerlogo->title,
            'type'     => $this->Footerlogo->type,
            'isActive' => 1,
        ]);
        if($this->image){
            $logo->update([
                'image' => $this->uploadImage()
            ]);
        }
        $this->dispatch('alert',type:'success',title:'عملیات با موفقیت لوگو انجام شد');

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
