<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Admin\Log;
use App\Models\Home\Token;
use App\Http\Livewire\Admin\Users\Permission;
use App\Models\Admin\Permissions\Role;
class User extends Authenticatable
{

    use HasFactory;

    protected $connection = "mysql";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'mobile', 'email', 'password', 'mobile_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'mobile_verified_at' => 'datetime',
    ];

    public function logs()
    {
        return $this->belongsToMany(Log::class);
    }

    public function tokens()
    {
        return $this->belongsToMany(Token::class);
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
