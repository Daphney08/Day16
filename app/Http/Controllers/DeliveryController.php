<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deliveries;

use Redirect;

class DeliveryController extends Controller
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
        return view ('delivery.index')->with([
            'data' => Deliveries::all()
        ]);
    }


    /** 
     * Create New transportation Form
    */
    public function create()
    {
        return view ('delivery.create');
    }


    /** 
     * Save New transportation to Database
    */
    public function store()
    {
        Deliveries::create($this->request->except('_token'));

        # Redirect to transportation list with success message
        return Redirect::route('delivery')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    /** 
     * Edit transportation Record Form
    */
    public function edit($id){

        return view ('delivery.edit')->with([
            'data' => Deliveries::where('id', '=', $id)->first()
        ]);
    }


    /** 
     * Update transportation Record to Database
    */
    public function update($id){
        # Find reacord with the parameter $id and update the record
        Deliveries::where('id', '=', $id)->update($this->request->except('_token'));

        # Redirect to transportation list with success message
        return Redirect::route('delivery')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     /** 
     * Delete transportation Record to Database
    */
    public function delete($id){
        # Destory Record
        Deliveries::destroy($id);

        # Redirect to transportation list with success message
        return Redirect::route('delivery')->with([
            'success' => "Record is successfully deleted"
        ]);
    }
}