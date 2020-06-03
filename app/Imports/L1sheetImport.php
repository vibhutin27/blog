<?php


namespace App\Imports;


use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class L1sheetImport implements  ToCollection,WithCalculatedFormulas,WithHeadingRow
{

    public function collection(Collection $collection)
    {
    }
}