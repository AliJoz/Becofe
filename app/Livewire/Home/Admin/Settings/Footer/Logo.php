<?php

namespace App\Livewire\Home\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\settings\Footerlogo;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Log;

class Logo extends Component
{
    public $title;
    public $type;
    public $isActive;
    public $image;
    public $readyToLoad = false;


    protected $paginationTheme = 'bootstrap';
    //public object $footerLogo;

    // public function mount(){
    //     $this->footerLogo = new Footerlogo;
    // }
    public $deleteId;
    public $search;
    protected $queryString = ['search'];
    public Footerlogo $Footerlogo;
    protected $rules = [
        'title'    => 'required',
        'type'     => 'required',
        'image'     => 'nullable',
    ];


    public function LogoForm()
    {
        $this->validate();
        $logo = $this->Footerlogo->query()->create([
            'title'    => $this->Footerlogo->title,
            'type'     => $this->Footerlogo->type,
            'url'      => $this->Footerlogo->url,
            'isActive' => 1,
        ]);
        if ($this->image) {
            $logo->update([
                'image' => $this->uploadImage()
            ]);
        }
        $this->resetForm();

        //Create Log
        Log::create([
            'user_id' => Auth::user()->id,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'actionType' => 'create',
            'description' => 'یک لوگو ایجاد شد'. ' '.$logo->title
        ]);

        $this->dispatch('alert',type:'success',title:'وضعیت رکورد با موفقیت تغییر کرد');

    }

    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "footerlogo/$year/$month";
        $name = time() . '-' . $this->image->getClientOriginalName();
        $name = str_replace(' ', '-', $name);
        $this->image->storeAs($directory, $name);
        return "/$directory/$name";
    }

    public function render()
    {
        $logos = $this->readyToLoad ? Footerlogo::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];
        return view('livewire.admin.settings.footer.logo', compact('logos'));
    }

    public function loadLogo()
    {
        $this->readyToLoad = true;
    }

    public function changeStatus($id)
    {
        $logo = Footerlogo::find($id);
        if ($logo->isActive == 1) {
            $logo->update([
                'isActive' => 0
            ]);
        } else {
            $logo->update([
                'isActive' => 1
            ]);
        }

        //Create Log
        Log::create([
            'user_id' => Auth::user()->id,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'actionType' => 'update',
            'description' => 'وضعیت لوگو تغییر کرد'
        ]);

        $this->dispatch('alert',type:'success',title:'وضعیت رکورد با موفقیت تغییر کرد');

    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $logo = Footerlogo::find($this->deleteId);
        $logo->delete();

        //Create Log
        Log::create([
            'user_id' => Auth::user()->id,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'actionType' => 'delete',
            'description' => 'لوگوی فوتر حذف شد'
        ]);


        $this->dispatch('alert',type:'success',title:' ردیف با موفقیت حذف شد');

    }

    public function resetForm()
    {
        $this->Footerlogo->title = null;
        $this->Footerlogo->type = null;
        $this->Footerlogo->image = null;
        $this->Footerlogo->url = null;
        $this->image = null;
    }
}
