<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class langdata extends Model
{
    //
    protected $fillable = ['title_en','title_fr', 'text_en', 'text_fr'];
    protected $table ='lanuagefn';
}
