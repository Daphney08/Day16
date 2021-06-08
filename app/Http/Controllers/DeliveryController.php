<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deliveries;
use App\Models\Transportation;
use App\Models\Distribution;
use Redirect;

class DeliveryController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view ('delivery.index')->with([
            'data' => Transportation::all()
        ]);
    }


}