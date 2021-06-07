<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\Storage;
use App\Models\Asset;
use App\Models\Destribution;
use App\Models\Transportation;
use App\Models\Delivery;
use App\Models\Return;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function supplier()
    {
        
        return view('supplier')->with([
            'data' => Supplier::all()
        ]);
    }

    public function storage()
    {
        
        return view('storage')->with([
            'data' => Storage::all()
        ]);
    }

    public function asset()
    {
        
        return view('asset')->with([
            'data' => Asset::all()
        ]);
    }

    public function destribution()
    {
        
        return view('destribution')->with([
            'data' => Destribution::all()
        ]);
    }

    public function transportation()
    {
        
        return view('transportation')->with([
            'data' => Transportation::all()
        ]);
    }

    public function delivery()
    {
        
        return view('delivery')->with([
            'data' => Delivery::all()
        ]);
    }

    public function return()
    {
        
        return view('return')->with([
            'data' => Return::all()
        ]);
    }
}
