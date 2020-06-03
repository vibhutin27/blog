<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liefe_upload extends Model
{
    //
    protected $fillable = ['ModuleShortNameQuestionYear','DataValue','ModuleShortName','ModuleFullName','UniqueQuestionID','QuestionNo','QuestionText','SurveyYear'];
    protected $table = 'liefe_upload';
}
