<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;

use App\UserUpload;
use App\StatusImport;

use File;
use App\User;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
//use App\Imports\UsersImport;
use Excel;

use App\Imports\ExcelImport;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
      $useremail = $request->input('email');
      $users = DB::select('select * from users where email = ? ',[$useremail]);
     
      return view('home',['edituser'=>$users]);
        //return view('home', $users); 
      
      //return view('home');
    }

    /* public function showForm()
    {
        return view('home');
    } */
// excel upload self working code
   /*  public function excelUpload(Request $request)
      {
            if($request->hasFile('file'))
              {

                $extension = File::extension($request->file->getClientOriginalName());
                    if ($extension == "xlsx" || $extension == "xls")
                      {
                          $fileName = Storage::disk('public')->put('upload',$request->file('file'));
                          $import = new UsersImport();
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
        return view('home');
      
      } */


      //EUC code 

      public function showForm()
    {
      $postdataUbperCollection = DB::table('exceldata')->where('ModuleShortNameQuestionYear','Status')->get();
            

      //$postdataUbper = DB::table('exceldata')->get();
      $dataUbper = 0;
      $dataL1per = 0;
      $dataL2per = 0;
      $dataL3per = 0;
      $dataL4per = 0;
      $dataL5per = 0;
     
      
      foreach ($postdataUbperCollection as $user)
          {
            if ($user->ModuleShortName == 'Ubper'){
              $dataUbper = $user->DataValue;            
            }
            if ($user->ModuleShortName == 'L1per'){
              $dataL1per = $user->DataValue;      
            }
            if ($user->ModuleShortName == 'L2per'){
              $dataL2per = $user->DataValue;
            }
            if ($user->ModuleShortName == 'L3per'){
              $dataL3per = $user->DataValue;
            }
            if ($user->ModuleShortName == 'L4per'){
              $dataL4per = $user->DataValue;   
            }
            if ($user->ModuleShortName == 'L5per'){
              $dataL5per = $user->DataValue;
            }
              
          }
        return view('DataInputs',compact('dataUbper','dataL1per', 'dataL2per', 'dataL3per', 'dataL4per', 'dataL5per'));
      }
      public function excelUpload(Request $request)
      {
          if($request->hasFile('file'))
          {
  
            $extension = File::extension($request->file->getClientOriginalName());
                if ($extension == "xlsx" || $extension == "xls")
                {
                    $fileName = Storage::disk('public')->put('upload',$request->file('file'));
                    $import = new ExcelImport();
                    //$import->onlySheets('Formatted Data','Übergr. Strukturkennzahlen','L1 Persönl. Kundenberatung PuG','L2 Telef. Kundenberatung PuG');
                    
                    $path = $request->file('file')->getRealPath();
                    $data = Excel::toCollection($fileName, $request->file('file'));
                    if ($data[0][0][0] == "ModuleShortNameQuestionYear"){
                      ($import)->import($fileName, 'public', \Maatwebsite\Excel\Excel::XLSX);
                      echo"File uploaded";
                      echo"<br>";
                      $postdataUbper = DB::table('exceldata')->where('ModuleShortNameQuestionYear','Status')->get();
                  
                  $dataUbper = 0;
                $dataL1per = 0;
                $dataL2per = 0;
                $dataL3per = 0;
                $dataL4per = 0;
                $dataL5per = 0;
                
                foreach ($postdataUbper as $user)
                    {
                      if (($user->ModuleShortName == 'Ubper')){
                        $dataUbper = $user->DataValue;
                      }
                      if (($user->ModuleShortName == 'L1per')){
                        $dataL1per = $user->DataValue; 
                      }
                      if (($user->ModuleShortName == 'L2per')){
                        $dataL2per = $user->DataValue; 
                      }
                      if (($user->ModuleShortName == 'L3per')){
                        $dataL3per = $user->DataValue;
                      }
                      if (($user->ModuleShortName == 'L4per')){
                        $dataL4per = $user->DataValue;
                      }
                      if (($user->ModuleShortName == 'L5per')){
                        $dataL5per = $user->DataValue;
                      }
                        
                    }
                  return view('DataInputs',compact('dataUbper','dataL1per', 'dataL2per', 'dataL3per', 'dataL4per', 'dataL5per'));
                  
                    }
                    //dd($data[0][0][0]);
                    else {
                      //echo"wrong file sheet not found";
                      return redirect('DataInputs')->withErrors(['yourErrorName'=>'Please upload valid file']);

                    }

                    
                  
                  
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
        return view('DataInputs');
      } 

      //EUC data review
      public function DataReview()
       {
      ////////////////////////////////////////
      /*
      $user11 = auth()->user()->email;
      $user22 = auth()->user()->CompanyID;

      $userscmpnyName= DB::select('select Company_Name from dimcompany where ID = ?',[$user22]);
      foreach ($userscmpnyName as $value11) 
      {
        $varcomp = $value11->Company_Name;
      }  
      
      $users111= DB::select('Call spGetCompanyDetails (?)',[$varcomp]);
      return $users111;
      */
      ////////////////////////////////////////

      $user11 = auth()->user()->email;
      $user12 = auth()->user()->usertype;

      $UserAccessTable = DB::select('select * from useraccess where email = ?',[$user11]);

      $strmod1="";
      $strmod2="";
      $strmod3="";
      $strmod4="";
      $strmod5="";
      
      foreach ($UserAccessTable as $value) 
      {
        if ($value->L1 == 'on')
        {
          $strmod1="L1";
        }
        if ($value->L2 == 'on')
        {
          $strmod2="L2";
        }
        if ($value->L3 == 'on')
        {
          $strmod3="L3";
        }
        if ($value->L4 == 'on')
        {
          $strmod4="L4";
        }
        if ($value->L5 == 'on')
        {
          $strmod5="L5";
        }
      }  
      
      $users= DB::select('Call Getexceldata (?,?,?,?,?,?)',[$strmod1,$strmod2,$strmod3,$strmod4,$strmod5,$user12]);
      return view('DataReview',compact('users'));
    }



}
