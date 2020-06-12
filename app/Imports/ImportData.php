<?php

namespace App\Imports;
use App\UserUpload;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;

class ImportData implements  ToCollection,WithCalculatedFormulas,WithHeadingRow
{
    public function collection(Collection $myDataRows)
    {
        $useremail = auth()->user()->email;
        $up=DB::delete('delete from exceldata where email = ? ',[$useremail]);
        
        /*
        if (auth()->user()->usertype=='ClientSuperuser')
        {
            $type = "L1";
        }elseif (auth()->user()->usertype=='CGSuperUser')
        {
            $type = "L3";
        }
        */
        
        foreach ($myDataRows as $dataRow)
        {
            if (($dataRow['moduleshortname']=="Ubper") OR ($dataRow['moduleshortname']=="L1per") OR ($dataRow['moduleshortname']=="L2per") OR ($dataRow['moduleshortname']=="L3per") OR ($dataRow['moduleshortname']=="L4per") OR ($dataRow['moduleshortname']=="L5per") OR ($dataRow['moduleshortname']=="L1") OR ($dataRow['moduleshortname']=="L1") OR ($dataRow ['moduleshortname']=="L2") OR ($dataRow['moduleshortname']=="L3") OR ($dataRow['moduleshortname']=="L4") OR ($dataRow['moduleshortname']=="L5"))
            {
                $user = new UserUpload();
                $user->email = auth()->user()->email;
                //$user->usertype = auth()->user()->usertype;
                $user->usertype = 'self';
                $user->ModuleShortNameQuestionYear = $dataRow['moduleshortnamequestionyear'];
                $user->DataValue = $dataRow['datavalue'];
                $chkdatavalue = $dataRow['datavalue'];
                if ($chkdatavalue!==NULL)
                {
                    $user->DataValue =  $dataRow['datavalue'];
                } 
                else
                {
                    $user->DataValue =  '0';
                }
                
                $user->ModuleShortName = $dataRow['moduleshortname'];
                $user->save();
            }
        }
    }
}


class ImportData1 implements  ToCollection,WithCalculatedFormulas,WithHeadingRow
{

    public function collection(Collection $collection)
    {
    }
}
class ImportData2 implements  ToCollection,WithCalculatedFormulas,WithHeadingRow
{

    public function collection(Collection $collection)
    {
    }
}
class ImportData3 implements  ToCollection,WithCalculatedFormulas,WithHeadingRow
{

    public function collection(Collection $collection)
    {
    }
}