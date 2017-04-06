<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FederalSenateController extends Controller
{
    public function index()
    {
        return view('us-senate.index');
    }

    public function getList($filter)
    {
        return view('us-senate.list')
            ->with('filter', $filter);
    }
}
