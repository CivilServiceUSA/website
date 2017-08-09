<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CivilServices;

class SearchController extends Controller
{
    public function index($keyword = '')
    {
        if (!$keyword || strlen($keyword) < 3) {
            return '[]';
        }

        $search = CivilServices::search([
          'keyword' => $keyword
        ]);

        return $search;
    }
}
