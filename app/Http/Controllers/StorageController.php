<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storage;

//facade
use Redirect;

class StorageController extends Controller
{
    //declare variable
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    /**
     * storage Data Lists
     */
    public function index()
    {
        return view ('storage.index')->with([
            'data' => Storage::all()
        ]);
    }


    /** 
     * Create New storage Form
    */
    public function create()
    {
        return view ('storage.create');
    }


    /** 
     * Save New storage to Database
    */
    public function store()
    {
        Storage::create($this->request->except('_token'));

        # Redirect to storage list with success message
        return Redirect::route('storage')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    /** 
     * Edit storage Record Form
    */
    public function edit($id){

        return view ('storage.edit')->with([
            'data' => Storage::where('id', '=', $id)->first()
        ]);
    }


    /** 
     * Update storage Record to Database
    */
    public function update($id){
        # Find reacord with the parameter $id and update the record
        Storage::where('id', '=', $id)->update($this->request->except('_token'));

        # Redirect to storage list with success message
        return Redirect::route('storage')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     /** 
     * Delete storage Record to Database
    */
    public function delete($id){
        # Destory Record
        Storage::destroy($id);

        # Redirect to storage list with success message
        return Redirect::route('storage')->with([
            'success' => "Record is cuccessfully deleted"
        ]);
    }
}