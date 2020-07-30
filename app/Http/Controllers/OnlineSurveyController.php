<?php

namespace App\Http\Controllers;

use App\OnlineSurvey_data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OnlineSurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('online');
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
        //['ModuleName','PrimaryKey','Col7','Col8','Col9','Unit'];
        print_r(\Request::all());
       die;
        $form_data = array(
            'ModuleName'            =>  $request->ModuleName,
            'PrimaryKey'            =>  $request->PrimaryKey,
            'Col7'                  =>  $request->Col7,
            'Col8'                  =>  $request->Col8,
            'Col9'                  =>  $request->Col9,
            'Unit'                  =>  $request->Unit,
        );

        OnlineSurvey_data::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
        echo "HHHH";
       
    }
    public function onlineStore(Request $request)
    {
        //
        echo "HHHH";
      // print_r(\Request::all());
       die;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\OnlineSurvey_data  $onlineSurvey_data
     * @return \Illuminate\Http\Response
     */
    public function show(OnlineSurvey_data $onlineSurvey_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OnlineSurvey_data  $onlineSurvey_data
     * @return \Illuminate\Http\Response
     */
    public function edit(OnlineSurvey_data $onlineSurvey_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OnlineSurvey_data  $onlineSurvey_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnlineSurvey_data $onlineSurvey_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OnlineSurvey_data  $onlineSurvey_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnlineSurvey_data $onlineSurvey_data)
    {
        //
    }
}
