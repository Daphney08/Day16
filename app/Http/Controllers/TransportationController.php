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
     * supplier Data Lists
     */
    public function index()
    {
        return view ('transportation.index')->with([
            'data' => Supplier::all()
        ]);
    }


    /** 
     * Create New Supplier Form
    */
    public function create()
    {
        return view ('transportation.create');
    }


    /** 
     * Save New supplier to Database
    */
    public function store()
    {
        Transportation::create($this->request->except('_token'));

        # Redirect to supplier list with success message
        return Redirect::route('transportation')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    /** 
     * Edit supplier Record Form
    */
    public function edit($id){

        return view ('supplier.edit')->with([
            'data' => Supplier::where('id', '=', $id)->first()
        ]);
    }


    /** 
     * Update supplier Record to Database
    */
    public function update($id){
        # Find reacord with the parameter $id and update the record
        Transportation::where('id', '=', $id)->update($this->request->except('_token'));

        # Redirect to supplier list with success message
        return Redirect::route('transportation')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     /** 
     * Delete Supplier Record to Database
    */
    public function delete($id){
        # Destory Record
        Transportation::destroy($id);

        # Redirect to supplier list with success message
        return Redirect::route('transportation')->with([
            'success' => "Record is cuccessfully deleted"
        ]);
    }
}