<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class defaultbeverages_models extends Model
{   use HasFactory;
    protected $fillable=['user_id','d_kullanici','d_option_1','d_option_2','d_option_3','d_option_4','d_note1','d_note2','d_note3','d_note4'];
    public function user(){

    }
}
