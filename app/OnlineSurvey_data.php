<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineSurvey_data extends Model
{
    //{"ModuleName":"L2","PrimaryKey":"L2_101_1_2018","Col7":120,"Col8":"L2 Durchschnittr, kann geroutet werden) pro Kundenkontakt","Col9":"","Unit":100},
    protected $fillable = ['ModuleName','PrimaryKey','Col7','Col8','Col9','Unit'];
    //public $timestamps= false;
    protected $table ='onlinesurveytbl'; 
}
