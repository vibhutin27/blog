<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserUpload extends Model
{
    //Created database model self below 
    //protected $fillable = ['QNo','QText','QValue'];

    //EUC database model
    protected $fillable = ['email,usertype,ModuleShortNameQuestionYear','DataValue','ModuleShortName'];
    //public $timestamps= false;
    protected $table ='exceldata';
}
    