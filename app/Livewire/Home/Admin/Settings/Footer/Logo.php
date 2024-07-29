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
    public $search;
    public Footerlogo $Footerlogo;
    public $id;

    //public object $footerLogo;

    // public function mount(){
    //     $this->$footerLogo = new Footerlogo;
    // }
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    protected $rules = [
        'title'    => 'required',
        'type'     => 'required',
        'image'     => 'sometimes',
    ];

    use WithFileUploads;
    use WithPagination;
    public function LogoForm()
    {

        $this->validate();

        $logo =  Footerlogo::create([
            'title'    => $this->title,
            'type'     => $this->type,
            // 'imgage'  => $this->image,
            'isActive' => 1,
            //......
        ]);

        if ($this->image) {
            $logo->update([
                'image' => $this->uploadImage()
            ]);
        }


        Log::create([
            'user_id' => Auth::user()->id,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'actionType' => 'create',
            'description' => 'یک لوگو ایجاد شد' . ' ' . $logo->title
        ]);

        $this->dispatch('alert', type: 'success', title: 'عملیات با موفقیت فوتر لوگو انجام شد');
    }

    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "public/footerlogo/$year/$month";
        $name = $this->image->getClientOriginalName();
        // $this->image->storeAs($directory, $name);
        $path = $this->image->store("footerlogo/$year/$month", ['disk' => 'public']);
        return $path;
    }

    public function render()
    {
        $logos = $this->readyToLoad ? Footerlogo::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(3) : [];

        return view('livewire.home.admin.settings.footer.logo', compact('logos'));
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

            $this->dispatch('alert', type: 'success', title: 'وضعیت رکوردغیرفعال  شد');
        } else {
            $logo->update([
                'isActive' => 1
            ]);

            $this->dispatch('alert', type: 'success', title: 'وضعیت رکوردفعال  شد');
        }
        //   is clear functoin
        Log::create([
            'user_id' => Auth::user()->id,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'actionType' => 'update',
            'description' => 'وضعیت لوگو تغییر کرد'
        ]);
    }

    //    public function deleteId($id)
    //     {
    //         $this->deleteId = $id;
    //         // dd( $this->deleteId );
    //     }

    public function deleteId($id)
    {

        $logo = Footerlogo::find($id);
        // dd($logo);
        $logo->delete();

        //Create Log
        Log::create([
            'user_id' => Auth::user()->id,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'actionType' => 'delete',
            'description' => 'لوگوی فوتر حذف شد'
        ]);
        $this->dispatch('alert', type: 'success', title: ' ردیف با موفقیت حذف شد');
    }
}
