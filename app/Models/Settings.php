<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Settings extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];
    public $timestamps = false;

    public $translatable = ['title', 'description','keywords', 'address_center','time_work' , 'sub_title','title_header'];
}
