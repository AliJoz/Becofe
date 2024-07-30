<?php

namespace App\Livewire\Admin\Roles;

use App\Models\Admin\Permissions\Role;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;

class Edit extends Component
{
    public Role $role;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $permissions;

    protected $rules = [
        'role.title'    => 'required',
        'role.description'     => 'required',
    ];

    public function RoleForm()
    {
        $this->validate();
        $this->role->update($this->validate());
        $this->role->permissions()->sync($this->permissions);
        //Create Log
        Log::logWritter('create', 'نقش ویرایش شد - ' . $this->role->title);

        $this->dispatch('alert', type: 'success', title: 'رکورد با موفقیت ویرایش شد');

    }

    public function render()
    {
        $role = $this->role;
        $roles = $this->readyToLoad ? Role::where('title', 'LIKE', '%' . $this->search . '%')->orWhere('description', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];

        return view('livewire.admin.roles.edit',compact('role','roles'));
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
        $role = Role::find($this->$id);
        $role->delete();

        //Create Log
        Log::logWritter('delete', 'یک نقش حذف شد - ' . $role->title);

        $this->dispatch('alert',type:'success',title: 'ردیف با موفقیت حذف شد');

    }

}
