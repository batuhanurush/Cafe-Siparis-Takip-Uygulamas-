<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable=['kullanici','option_1','option_2','option_3','option_4','location','note','count'];
    public function user()
    {
       
    }
}

