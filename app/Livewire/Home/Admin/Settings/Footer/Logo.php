<?php

namespace App\Livewire\Home\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\settings\Footerlogo;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
class Logo extends Component
{
    public $title;
    public $type;
    public $isActive;
    public $image;
    public $readyToLoad = false;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    //public object $footerLogo;
    use WithFileUploads;
    // public function mount(){
    //     $this->footerLogo = new Footerlogo;
    // }
    public $search;
    protected $queryString = ['search'];
    public Footerlogo $Footerlogo;
    protected $rules = [
        'title'    => 'required',
        'type'     => 'required',
        'image'     => 'nullable',
    ];


    public function LogoForm(){

        $this->validate();

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
    public function loadLogo()
    {
        $this->readyToLoad = true;
    }
    public function search(){
        $logos = $this->readyToLoad ? Footerlogo::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(2) : [];
    }

    public function render()
    {
        $logos = $this->readyToLoad ? Footerlogo::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(2) : [];

        return view('livewire.home.admin.settings.footer.logo',compact('logos'));
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

    public function deleteId($id)
    {

        $this->del=$id;
    }

    public function delete()
    {
        $logo = Footerlogo::find($this->deleteId);
        $logo->delete();

        $this->dispatch('alert',type:'success',title:'اطلاعات با موفقیت حذف شد');
      }
    }


