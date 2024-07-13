<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class aboutUs extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $guarded = [];
    public $timestamps = true;
    public $translatable = ['title_aboutus','title_our_mission','title_admin_word','desc_aboutus','desc_our_mission','desc_admin_word'];

}
