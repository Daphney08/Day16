<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $suppliers = Suppliers::latest()->paginate(5);
    
        // return view('create',compact('suppliers'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        return view('create');
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
        $request->validate([
            'name' => 'required',
            'contact'  => 'required',
            'address'  => 'required',
            'contact_person'  => 'required',
            'category'  => 'required'  
        ]);
        
        Suppliers::create($request->all());
     
        return redirect()->route('suppliers.index')
                        ->with('success','Supplier Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function show(Suppliers $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function edit(Suppliers $suppliers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suppliers $suppliers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suppliers $suppliers)
    {
        //
    }
}
// use Illuminate\Http\Request;
// use App\Models\Supplier;

// //facade
// use Redirect;

// class SupplierController extends Controller
// {
//     //declare variable
//     protected $request;
    
//     public function __construct(Request $request)
//     {
//         $this->request = $request;
//     }


//     /**
//      * supplier Data Lists
//      */
//     public function index()
//     {
//         return view ('supplier.index')->with([
//             'data' => Supplier::all()
//         ]);
//     }


//     /** 
//      * Create New Supplier Form
//     */
//     public function create()
//     {
//         return view ('supplier.create');
//     }


//     /** 
//      * Save New supplier to Database
//     */
//     public function store()
//     {
//         Supplier::create($this->request->except('_token'));

//         # Redirect to supplier list with success message
//         return Redirect::route('supplier')->with([
//             'success' => "New Record is Successfully Created"
//         ]);
//     }


//     /** 
//      * Edit supplier Record Form
//     */
//     public function edit($id){

//         return view ('supplier.edit')->with([
//             'data' => Supplier::where('id', '=', $id)->first()
//         ]);
//     }


//     /** 
//      * Update supplier Record to Database
//     */
//     public function update($id){
//         # Find reacord with the parameter $id and update the record
//         Supplier::where('id', '=', $id)->update($this->request->except('_token'));

//         # Redirect to supplier list with success message
//         return Redirect::route('supplier')->with([
//             'success' => "Record is successfully updated"
//         ]);
//     }


//      /** 
//      * Delete Supplier Record to Database
//     */
//     public function delete($id){
//         # Destory Record
//         Supplier::destroy($id);

//         # Redirect to supplier list with success message
//         return Redirect::route('supplier')->with([
//             'success' => "Record is cuccessfully deleted"
//         ]);
//     }
// }
