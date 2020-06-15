<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusImport extends Model
{
    //
    protected $fillable = ['ModuleName','Percentege'];
    //public $timestamps= false;
    protected $table ='status';
}
