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

class LiefeImport implements WithMultipleSheets, WithCalculatedFormulas {
    use Importable;
    //use WithConditionalSheets;

    public function sheets(): array
    {
            
            return [
                'Formatted Data' => new FormattedDataSheetImport(),
                'Übergr. Strukturkennzahlen' => new UbergrSheetImport(),
                'L1 Persönl. Kundenberatung PuG' => new L1sheetImport(),
                'L2 Telef. Kundenberatung PuG' => new L2sheetImport(),
            ];


    }

    /* public function conditionalSheets(): array
    {
        return [
            'mydata' => new ThirdSheetImport(),
            'Sheet1-Tableau' => new FourthSheetImport(),
        ];
    } */
}   