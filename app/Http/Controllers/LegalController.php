<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MetaTag;

class LegalController extends Controller
{
    public function showPrivacyPolicy()
    {
        // Setup Meta Tags
        MetaTag::set('title', 'Civil Services - Privacy Policy');
        MetaTag::set('description', 'This Privacy Policy explains how we collect, use, and share information we receive from you through your use of our Website.');
        MetaTag::set('image', asset('img/header/civil-services-bg.jpg'));

        return view('privacy-policy');
    }

    public function showTermsOfUse()
    {
        // Setup Meta Tags
        MetaTag::set('title', 'Civil Services - Terms of Use');
        MetaTag::set('description', 'These Terms of Use tell you about our services, our relationship to you as a user, and the rights and responsibilities that guide us both.');
        MetaTag::set('image', asset('img/header/civil-services-bg.jpg'));

        return view('terms-of-use');
    }
}
