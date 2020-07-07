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
<<<<<<< HEAD
use Maatwebsite\Excel\Concerns\SkipsUnknownSheets;

class ExcelImport implements WithMultipleSheets, WithCalculatedFormulas, SkipsUnknownSheets 
=======

class ExcelImport implements WithMultipleSheets, WithCalculatedFormulas 
>>>>>>> 1da86e85525503974a8f3663e3814d4618a5a67b
{
    use Importable;
    public function sheets(): array
    {
<<<<<<< HEAD
        
=======
>>>>>>> 1da86e85525503974a8f3663e3814d4618a5a67b
        return 
        [
            'Formatted Data' => new ImportData(),
            'Übergr. Strukturkennzahlen' => new ImportData1(),
            'L1 Persönl. Kundenberatung PuG' => new ImportData2(),
            'L2 Telef. Kundenberatung PuG' => new ImportData3(),
<<<<<<< HEAD
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
=======
        ];
    }    
>>>>>>> 1da86e85525503974a8f3663e3814d4618a5a67b
}