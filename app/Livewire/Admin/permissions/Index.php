<?php

namespace App\Livewire\Admin\permissions;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Admin\Permissions\Permission;

class Index extends Component
{
    public Permission $permission;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $roles;

    public function mount()
    {
        $this->permission = new Permission;
    }

    protected $rules = [
        'permission.title'    => 'required',
        'permission.description'     => 'required',
    ];

    public function PermissionForm()
    {
        $this->validate();
        $permission = $this->permission->query()->create([
            'title'    => $this->permission->title,
            'description'     => $this->permission->description,
        ]);
        $permission->roles()->sync($this->roles);

        $this->resetForm();

        //Create Log
        Log::logWritter('create', 'سطح دسترسی جدید ایجاد شد - ' . $permission->title);

        $this->dispatch('alert', type: 'success', title: 'رکورد با موفقیت ثبت شد');
    }
    public function render()
    {
        $permissions = $this->readyToLoad ? Permission::where('title', 'LIKE', '%' . $this->search . '%')
            ->orWhere('description', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];
        return view('livewire.admin.permissions.index', compact('permissions'));
    }

    public function loadRole()
    {
        $this->readyToLoad = true;
    }

    // public function deleteId($id)
    // {
    //     $this->deleteId = $id;
    // }

    public function deleteId($id)
    {
        $permission = Permission::find($this->deleteId);
        $permission->delete();

        //Create Log
        Log::logWritter('delete', 'سطح دسترسی حذف شد - ' . $permission->title);

        $this->dispatch('alert',type:'success',title:'ردیف با موفقیت حذف شد');

    }

    public function resetForm()
    {
        $this->permission->title = null;
        $this->permission->description = null;
        $this->permission = null;
    }
}
