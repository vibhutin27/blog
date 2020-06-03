<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use App\Liefe_upload;
use File;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use App\Imports\LiefeImport;
use Excel;

class LiefeController extends Controller
{
    //

    public function showForm()
    {
        return view('liefe');
    } 

    public function excelUpload(Request $request)
      {
            if($request->hasFile('file'))
              {

                $extension = File::extension($request->file->getClientOriginalName());
                    if ($extension == "xlsx" || $extension == "xls")
                      {
                          $fileName = Storage::disk('public')->put('upload',$request->file('file'));
                          $import = new LiefeImport();
                         // $import->onlySheets('mydata','Sheet1-Tableau');
                          ($import)->import($fileName, 'public', \Maatwebsite\Excel\Excel::XLSX);
                          echo"File uploaded";
                          echo"<br>";
                      }
                    else
                      {
                            echo"wrong format file";
                      }
              }
            else
                {
                  echo" select the file";
                }
        return view('liefe');
      }
}
