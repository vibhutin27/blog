<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample_data extends Model
{
    
    protected $fillable = [
        'emp_id','first_name', 'last_name','email_id','country','status',
       ];
}
