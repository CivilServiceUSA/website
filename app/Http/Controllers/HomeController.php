<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MetaTag;

class HomeController extends Controller
{
    public function index()
    {
        // Setup Meta Tags
        MetaTag::set('title', 'Civil Services - Accountability in Action');
        MetaTag::set('description', 'Civil Service USA Corp is a nonpartisan, independent and Non-Profit Organization with the goal to help United States Citizens to be a part of their Local, State & Federal Governments.');
        MetaTag::set('image', asset('img/header/lady-justice.jpg'));
        MetaTag::set('keywords', 'Civil Services, My Elected Officials, House, Senate, Nonpartisan, Independent, Government, Demographic, Contact Information, Twitter, Facebook, Contact Officials, Developer API, Legislation Search');

        return view('welcome');
    }
}
