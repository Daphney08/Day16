<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Returns;

use Redirect;

class ReturnController extends Controller
{
    //declare variable
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    /**
     * transportation Data Lists
     */
    public function index()
    {
        return view ('Return.index')->with([
            'data' => Returns::all()
        ]);
    }


    /** 
     * Create New transportation Form
    */
    public function create()
    {
        return view ('return.create');
    }


    /** 
     * Save New transportation to Database
    */
    public function store()
    {
        Transportation::create($this->request->except('_token'));

        # Redirect to transportation list with success message
        return Redirect::route('return')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    /** 
     * Edit transportation Record Form
    */
    public function edit($id){

        return view ('return.edit')->with([
            'data' => Returns::where('id', '=', $id)->first()
        ]);
    }


    /** 
     * Update transportation Record to Database
    */
    public function update($id){
        # Find reacord with the parameter $id and update the record
        Returns::where('id', '=', $id)->update($this->request->except('_token'));

        # Redirect to transportation list with success message
        return Redirect::route('return')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     /** 
     * Delete transportation Record to Database
    */
    public function delete($id){
        # Destory Record
        Transportation::destroy($id);

        # Redirect to transportation list with success message
        return Redirect::route('return')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}