<?php
namespace App\Http\Controllers;

use CivilServices\Data\State;
use Illuminate\Http\Request;
use CivilServices;

class StateController extends Controller
{
    public function index()
    {
        return view('state.index');
    }

    public function getState($stateSlug)
    {
        $state = (new State)->findBySlug($stateSlug);

        return view('state.show')
            ->with('state', $state);
    }
}
