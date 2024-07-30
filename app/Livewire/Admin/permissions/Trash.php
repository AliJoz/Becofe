<?php

namespace App\Livewire\Admin\Permissions;

use App\Models\Admin\Permissions\Permission;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;

class Trash extends Component
{

    public Permission $permission;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->permission = new Permission;
    }

    public function render()
    {
        $permissions = $this->readyToLoad ? Permission::where('description', 'LIKE', '%' . $this->search . '%')
        ->onlyTrashed()->latest()->paginate(10) : [];
        return view('livewire.admin.permissions.trash', compact('permissions'));
    }

    public function loadPermission()
    {
        $this->readyToLoad = true;
    }

    // public function deleteId($id)
    // {
    //     $this->deleteId = $id;
    // }

    public function deleteId($id)
    {
        $permission = Permission::withTrashed()->findOrFail($this->$id);
        $permission->roles()->detach();
        $permission->forceDelete();

        //Create Log
        Log::logWritter('delete', 'سطح دسترسی برای همیشه حذف شد - ' . $permission->title);

        $this->dispatch('alert', type: 'success', title: 'رکورد با موفقیت حذف شد');

    }


    public function restore($id)
    {
        $permission = Permission::withTrashed()->findOrFail($id);
        $permission->restore();

        //Create Log
        Log::logWritter('restore', 'سطح دسترسی بازیابی شد - ' . $permission->title);

        $this->dispatch('alert', type: 'success', title: 'رکورد با موفقیت بازیابی شد');

    }

}
