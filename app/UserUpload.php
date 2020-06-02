<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserUpload extends Model
{
    //Created database model
    protected $fillable = ['QNo','QText','QValue'];
}
    