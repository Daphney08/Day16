<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assets;

//facade
use Redirect;

class AssetsController extends Controller
{
    //declare variable
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    /**
     * assets Data Lists
     */
    public function index()
    {
        return view ('assets.index')->with([
            'data' => Assets::all()
        ]);
    }


    /** 
     * Create New assets Form
    */
    public function create()
    {
        return view ('assets.create');
    }


    /** 
     * Save New assets to Database
    */
    public function store()
    {
        Assets::create($this->request->except('_token'));

        # Redirect to assets list with success message
        return Redirect::route('assets')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    /** 
     * Edit assets Record Form
    */
    public function edit($id){

        return view ('assets.edit')->with([
            'data' => Assets::where('id', '=', $id)->first()
        ]);
    }


    /** 
     * Update assets Record to Database
    */
    public function update($id){
        # Find reacord with the parameter $id and update the record
        Assets::where('id', '=', $id)->update($this->request->except('_token'));

        # Redirect to assets list with success message
        return Redirect::route('assets')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     /** 
     * Delete assets Record to Database
    */
    public function delete($id){
        # Destory Record
        Assets::destroy($id);

        # Redirect to assets list with success message
        return Redirect::route('assets')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}