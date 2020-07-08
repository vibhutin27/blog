<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

use Maatwebsite\Excel\Concerns\SkipsUnknownSheets;

class ExcelImport implements WithMultipleSheets, WithCalculatedFormulas, SkipsUnknownSheets 


{
    use Importable;
    public function sheets(): array
    {

        
        return 
        [
            'Formatted Data' => new ImportData(),
            'Übergr. Strukturkennzahlen' => new ImportData1(),
            'L1 Persönl. Kundenberatung PuG' => new ImportData2(),
            'L2 Telef. Kundenberatung PuG' => new ImportData3(),
            //'Status' => new StatusSheetImport(),
            //'Beschreibung & Navigator' => new FourthSheetImport(),
            
            
            
        ];

        
    }    

    public function onUnknownSheet($sheetName)
    {
        //
        // E.g. you can log that a sheet was not found.
        if ($sheetName != ''){
            //dd($sheetName);
        return redirect('DataInputs')->withErrors(['yourErrorName'=>'Please upload valid file $sheetName not found']);
        }
        info("Sheet {Formatted Data} was skipped");
    }
}