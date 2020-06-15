<?php


namespace App\Imports;


use App\StatusImport;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StatusSheetImport implements  ToCollection,WithCalculatedFormulas,WithHeadingRow
{

    public function collection(Collection $myDataRows)
    {
        //dd($myDataRows);
        foreach ($myDataRows as $dataRow)
        {
            //dd($dataRow);
            $user   =  new StatusImport();
            $user->ModuleName = $dataRow['modulename'];
            $user->Percentege = $dataRow['percentege'];
            $user->save();
        } 
    }
}
