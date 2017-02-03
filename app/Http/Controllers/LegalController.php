<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function showPrivacyPolicy()
    {
        return view('privacy-policy');
    }

    public function showTermsOfUse()
    {
        return view('terms-of-use');
    }
}
