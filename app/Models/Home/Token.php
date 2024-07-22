<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Token extends Model
{
    use HasFactory;
    protected $connection = "mysql";
    protected $fillable = ['user_id','code','type','expired_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
