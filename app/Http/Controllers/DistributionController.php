<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribution;

//facade
use Redirect;

class DistributionController extends Controller
{
    //declare variable
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    /**
     * distribution Data Lists
     */
    public function index()
    {
        return view ('distribution.index')->with([
            'data' => Distribution::all()
        ]);
    }


    /** 
     * Create New distribution Form
    */
    public function create()
    {
        return view ('distribution.create');
    }


    /** 
     * Save New distribution to Database
    */
    public function store()
    {
        Distribution::create($this->request->except('_token'));

        # Redirect to distribution list with success message
        return Redirect::route('distribution')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    /** 
     * Edit distribution Record Form
    */
    public function edit($id){

        return view ('distribution.edit')->with([
            'data' => Distribution::where('id', '=', $id)->first()
        ]);
    }


    /** 
     * Update distribution Record to Database
    */
    public function update($id){
        # Find reacord with the parameter $id and update the record
        Distribution::where('id', '=', $id)->update($this->request->except('_token'));

        # Redirect to distribution list with success message
        return Redirect::route('distribution')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     /** 
     * Delete distribution Record to Database
    */
    public function delete($id){
        # Destory Record
        Distribution::destroy($id);

        # Redirect to distribution list with success message
        return Redirect::route('distribution')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}