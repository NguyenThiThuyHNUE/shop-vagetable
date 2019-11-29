<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShipController extends Controller
{
    public function index()
    {
        $shipments = DB::table('shipments')->get();

        return view('admin.ship.index',compact('shipments'));
    }
}
