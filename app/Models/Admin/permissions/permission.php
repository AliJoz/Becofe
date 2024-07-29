<?php

namespace App\Models\Admin\Permissions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Livewire\Admin\Users\Permission;
use App\Models\User;
use permissions;
class Role extends Model
{
    use HasFactory;
    protected $fillable = ['title','description'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

}
