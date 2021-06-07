<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Storage;
use App\Models\Asset;
use App\Models\Destribution;
use App\Models\Transportation;
use App\Models\Delivery;
use App\Models\Return;

//facade
use Redirect;

class CreateController extends Controller
{
    protected $request;
    //declare varialble
    public function __construct(Request $request)
    {
        //make the request available on the class
        $this->request = $request;
    }
    public function index()
    {
       
        return view('create');
    }
    public function supplier()
    {
        Supplier::create(
            $this->request->except('_token')

        );
        
        return Redirect::route('supplier');
    }

    public function storage()
    {
        Storage::create(
            $this->request->except('_token')

        );
        
        return Redirect::route('storage');
    }
    public function asset()
    {
        Asset::create(
            $this->request->except('_token')

        );
        
        return Redirect::route('asset');
    }

    public function destribution()
    {
        Destribution::create(
            $this->request->except('_token')

        );
        
        return Redirect::route('destribution');
    }

    public function transportation()
    {
        Transportation::create(
            $this->request->except('_token')

        );
        
        return Redirect::route('transportation');
    }

    public function delivery()
    {
        Delivery::create(
            $this->request->except('_token')

        );
        
        return Redirect::route('delivery');
    }
    
    // public function return()
    // {
    //     Return::create(
    //         $this->request->except('_token')
    // );
        
    //     return Redirect::route('return');
    // }

    public function return()
    {
        Delivery::create(
            $this->request->except('_token')

        );
        
        return Redirect::route('return');
    }
}