<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportation;

//facade
use Redirect;

class TransportationController extends Controller
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
        return view ('transportation.index')->with([
            'data' => Transportation::all()
        ]);
    }


    /** 
     * Create New transportation Form
    */
    public function create()
    {
        return view ('transportation.create');
    }


    /** 
     * Save New transportation to Database
    */
    public function store()
    {
        Transportation::create($this->request->except('_token'));

        # Redirect to transportation list with success message
        return Redirect::route('transportation')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    /** 
     * Edit transportation Record Form
    */
    public function edit($id){

        return view ('transportation.edit')->with([
            'data' => Transportation::where('id', '=', $id)->first()
        ]);
    }


    /** 
     * Update transportation Record to Database
    */
    public function update($id){
        # Find reacord with the parameter $id and update the record
        Transportation::where('id', '=', $id)->update($this->request->except('_token'));

        # Redirect to transportation list with success message
        return Redirect::route('transportation')->with([
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
        return Redirect::route('transportation')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}