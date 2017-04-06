<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FederalHouseController extends Controller
{
    public function index()
    {
        return view('us-house.index');
    }
}
