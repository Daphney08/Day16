<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;

//facade
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
     * supplier Data Lists
     */
    public function index()
    {
        return view ('delivery.index')->with([
            'data' => Supplier::all()
        ]);
    }


    /** 
     * Create New Supplier Form
    */
    public function create()
    {
        return view ('delivery.create');
    }


    /** 
     * Save New supplier to Database
    */
    public function store()
    {
        Delivery::create($this->request->except('_token'));

        # Redirect to supplier list with success message
        return Redirect::route('delivery')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    /** 
     * Edit supplier Record Form
    */
    public function edit($id){

        return view ('delivery.edit')->with([
            'data' => Delivery::where('id', '=', $id)->first()
        ]);
    }


    /** 
     * Update supplier Record to Database
    */
    public function update($id){
        # Find reacord with the parameter $id and update the record
        Delivery::where('id', '=', $id)->update($this->request->except('_token'));

        # Redirect to supplier list with success message
        return Redirect::route('delivery')->with([
            'success' => "Record is successfully updated"
        ]);
    }


     /** 
     * Delete Supplier Record to Database
    */
    public function delete($id){
        # Destory Record
        Delivery::destroy($id);

        # Redirect to supplier list with success message
        return Redirect::route('delivery')->with([
            'success' => "Record is cuccessfully deleted"
        ]);
    }
}
