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
    public $readyToLoad = false;
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
        $logos = Footerlogo::all();
        return view('livewire.home.admin.settings.footer.logo',compact('logos'));
    }


    public function loadLogo(){
        $this->readyToLoad = true;
    }

    public function changeStatus($id){
        $logo = Footerlogo::find($id);
        if($logo->isActive == 1){
            $logo->update([
                'isActive' => 0

            ]);

        $this->dispatch('alert',type:'success',title:'وضعیت رکوردغیرفعال  شد');
        }else{
            $logo->update([
                'isActive' => 1
            ]);

        $this->dispatch('alert',type:'success',title:'وضعیت رکوردفعال  شد');
        }
        
    }

    public function deleteLogo($id){
        $logo = Footerlogo::find($id);
        $logo->delete();

        $this->dispatch('alert',type:'success',title:'اطلاعات با موفقیت حذف شد');
      }
    }


