<?php

namespace App\Models\Admin\settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $connection = "mysql-setting";

    protected $fillable = ['uplable','widerLable1','widerLable2','widerLable3','widerLable4','widerLable5'
                            ,'rrsLable','soctaiLable','suppirtLable','phoneLable','addresLable','emailLable','aboutHeadLabel'
                            ,'aboutbodyLable','copyright'];
}
