<?php


namespace App\Imports;


use App\UserUpload;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ThirdSheetImport implements  ToCollection,WithCalculatedFormulas,WithHeadingRow
{

    public function collection(Collection $myDataRows)
    {
        $startcellrow = 3;
        $endcellrow = 6;

        
        $user = auth()->user();
        print($user->id);
        print($user->name);
        print($user->email);
        foreach ($myDataRows as $startques => $dataRow)
        {
            if ($startques < $startcellrow || $startques >= $endcellrow)
            {
                continue;
            } 
            $user   =  new UserUpload();
            $user->QNo =    $dataRow['qno'];
            $user->QText =  $dataRow['qtext'];
            $user->QValue = $dataRow['qvalue'];
            //$user->email =  auth()->user()->email;
            $user->save();
        } 
    }
}
