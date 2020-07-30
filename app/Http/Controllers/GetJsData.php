<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;

class GetJsData extends Controller
{
    //

        public function index(Request $request)
        {
            if ($request-> ajax()) 
            {
                $data = user_uploads::latest()->get();
                dd($data);
                return DataTables::of($data)->addColumn('action', function($data){
                    $button = '<button type="button" name="edit" id="'.$data->id.'"  class="btn btn-primary btn-sm">Edit</button> ';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'"  class="delete btn btn-danger btn-sm">Delete</button> ';
                    return $button;
                })->rawColumns(['action'])
                  ->make(true);   
            }
            return view('loginDetails');
        }
    
}
