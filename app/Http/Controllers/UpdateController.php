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

use Redirect;

class UpdateController extends Controller

{

    
    protected $request;
    
    public function __construct(Request $request)
    {
        //make the request available on the class
        $this->request = $request;
    }

    public function supplier($id)
    {
        return view('update')->with([
            'data' => Supplier::find($id)
        ]);
        
    }

    public function storage($id)
    {
        return view('update')->with([
            'data' => Storage::find($id)
        ]);
        
    }

    public function asset($id)
    {
        return view('update')->with([
            'data' => Asset::find($id)
        ]);
        
    }

    public function destribution($id)
    {
        return view('update')->with([
            'data' => Destribution::find($id)
        ]);
        
    }

    public function transportation($id)
    {
        return view('update')->with([
            'data' => Transportation::find($id)
        ]);
        
    }

    public function delivery($id)
    {
        return view('update')->with([
            'data' => Delivery::find($id)
        ]);
        
    }

    public function return($id)
    {
        return view('update')->with([
            'data' => Return::find($id)
        ]);
        
    }
    public function supplier( $id)
    {
        Supplier::find($id)->update(

            $this->request->except('_token')

        );

        return Redirect::route('home');
    }

    public function storage( $id)
    {
        Storage::find($id)->update(

            $this->request->except('_token')

        );

        return Redirect::route('home');
    }

    public function asset( $id)
    {
        Asset::find($id)->update(

            $this->request->except('_token')

        );

        return Redirect::route('home');
    }

    public function destribution( $id)
    {
        Destribution::find($id)->update(

            $this->request->except('_token')

        );

        return Redirect::route('home');
    }

    public function transportation( $id)
    {
        Transportation::find($id)->update(

            $this->request->except('_token')

        );

        return Redirect::route('home');
    }

    public function delivery( $id)
    {
        Delivery::find($id)->update(

            $this->request->except('_token')

        );

        return Redirect::route('home');
    }

    public function return( $id)
    {
        Return::find($id)->update(

            $this->request->except('_token')

        );

        return Redirect::route('home');
    }


    
}