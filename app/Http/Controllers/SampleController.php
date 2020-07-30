<?php

namespace App\Http\Controllers;

use App\Sample_data;
use App\langdata;
use Illuminate\Http\Request;
use DataTables;
use Validator;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1(Request $request)
    {
        $showdata = langdata::latest()->get();
        dd($showdata);
    }

    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Sample_data::latest()->get();
            return DataTables::of($data)
                    ->addColumn( 'action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('sample_data');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'emp_id'        =>  'required',
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'email_id'      =>  'required',
            'country'       =>  'required',
            'status'    =>  'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'emp_id'            =>  $request->emp_id,
            'first_name'        =>  $request->first_name,
            'last_name'         =>  $request->last_name,
            'email_id'          =>  $request->email_id,
            'country'           =>  $request->country,
            'status'            =>  $request->status,
        );

        Sample_data::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function show(Sample_data $sample_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Sample_data::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    

    public function update(Request $request, Sample_data $sample_data)
    {
        $rules = array(
            'emp_id'        =>  'required',
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'email_id'      =>  'required',
            'country'       =>  'required',
            'first_name'    =>  'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'emp_id'            =>  $request->emp_id,
            'first_name'        =>  $request->first_name,
            'last_name'         =>  $request->last_name,
            'email_id'          =>  $request->email_id,
            'country'           =>  $request->country,
            'status'            =>  $request->status,
        );

        Sample_data::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Sample_data::findOrFail($id);
        $data->delete();
    }
}