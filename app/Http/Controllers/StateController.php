<?php

namespace App\Http\Controllers;

use CivilServices\Data\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function show($stateSlug)
    {
        $state = (new State)->findBySlug($stateSlug);

        return view('states.show')
            ->with('state', $state);
    }
}
