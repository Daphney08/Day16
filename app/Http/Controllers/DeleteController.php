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

class DeleteController extends Controller
{
    public function index($id)
    {
        Supplier::find($id)->delete();

        return Redirect::route('create');
    }
    public function supplier($id)
    {
        Supplier::find($id)->delete();

        return Redirect::route('home');
    }
    public function storage($id)
    {
        Storage::find($id)->delete();

        return Redirect::route('storage');
    }
    public function asset($id)
    {
        Asset::find($id)->delete();

        return Redirect::route('asset');
    }
    public function destribution($id)
    {
        Destribution::find($id)->delete();

        return Redirect::route('destribution');
    }
    public function transportation($id)
    {
        Transportation::find($id)->delete();

        return Redirect::route('transportation');
    }
    public function delivery($id)
    {
        Delivery::find($id)->delete();

        return Redirect::route('delivery');
    }
    public function return($id)
    {
        Return::find($id)->delete();

        return Redirect::route('return');
    }
}
