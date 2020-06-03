<?php


namespace App\Imports;


use App\Liefe_upload;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FormattedDataSheetImport implements  ToCollection,WithCalculatedFormulas,WithHeadingRow
{

    public function collection(Collection $myDataRows)
    {
        $usertype = 'L2';
        if ($usertype == 'Ub')
        {
            $startcellrow = 1;
            $endcellrow = 23;
    
        }
        if ($usertype == 'L1')
        {
            $startcellrow = 22;
            $endcellrow = 37;
    
        }
        if ($usertype == 'L2')
        {
            $startcellrow = 39;
            $endcellrow = 65;
    
        }
      
      
        //$user = auth()->user();
       
        foreach ($myDataRows as $startques => $dataRow)
        {
            if ($startques < $startcellrow || $startques >= $endcellrow)
            {
                continue;
            } 
            $user   =  new Liefe_upload();
            $user->ModuleShortNameQuestionYear =    $dataRow['moduleshortnamequestionyear'];
            $chkdatavalue = $dataRow['datavalue'];
            if ($chkdatavalue !='')
            {
                $user->DataValue =  $dataRow['datavalue'];
            } 
            else
            {
                $user->DataValue =  'null';
            }
            $user->ModuleShortName = $dataRow['moduleshortname'];
            $user->ModuleFullName = $dataRow['moduleshortname'];
            $user->UniqueQuestionID = $dataRow['moduleshortname'];
            $user->QuestionNo = $dataRow['moduleshortname'];
            $user->QuestionText = $dataRow['moduleshortname'];
            $user->SurveyYear = $dataRow['moduleshortname'];
            //$user->email =  auth()->user()->email;
            $user->save();
        } 
    }
}
