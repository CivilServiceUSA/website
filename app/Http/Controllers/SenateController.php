<?php

namespace App\Http\Controllers;

use CivilServices\Data\Senator;
use Illuminate\Http\Request;

class SenateController extends Controller
{
    public function show($senatorSlug)
    {
        $state = (new Senator)->findBySlug($senatorSlug);

        return view('senators.show')
            ->with('senator', $senator);
    }
}
