<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CivilServices;
use MetaTag;

class MyElectedOfficialsController extends Controller
{
    public function index()
    {
        // Setup Meta Tags
        MetaTag::set('title', 'Find My Elected Officials');
        MetaTag::set('description', 'Get Contact Information & Political History for members of the 115th United States Congress');
        MetaTag::set('image', asset('img/header/lady-justice.jpg'));
        MetaTag::set('keywords', 'Find My Officials, Contact Information, Elected Officials, Political History, Location, Address');

        return view('my-elected-officials.index');
    }

    public function redirect()
    {
        return redirect('my-elected-officials');
    }

    public function byZipCode($zipcode)
    {
        $geolocation = CivilServices::searchGovernment([
            'zipcode' => $zipcode
        ]);

        if (is_object($geolocation)) {

            // Setup Meta Tags
            MetaTag::set('title', 'My Elected Officials for Zip Code ' . $zipcode);
            MetaTag::set('description', 'My Elected Officials for Zip Code ' . $zipcode);
            MetaTag::set('image', $geolocation->state->skyline->size_1280x720);
            MetaTag::set('keywords', 'My Elected Officials, Zip Code, ' . $zipcode . ', ' . $geolocation->state->state_name);

            return view('my-elected-officials.results')
                ->with('representatives', $geolocation->house)
                ->with('senators', $geolocation->senate)
                ->with('state', $geolocation->state)
                ->with('breadcrumb', (object) array(
                    'name' => $zipcode,
                    'url' => 'zipcode/' . $zipcode
                ))
                ->with('subtitle', $geolocation->state);

        } else if(!is_object($geolocation)) {
            abort(400, 'Unable to Fetch Your Elected Officials');
        }
    }

    public function byGeolocation($latitude, $longitude)
    {
        $geolocation = CivilServices::searchGovernment([
            'latitude' => $latitude,
            'longitude' => $longitude
        ]);

        if (is_object($geolocation)) {

            // Setup Meta Tags
            MetaTag::set('title', 'My Elected Officials for ' . $geolocation->state->state_name . ' (' . $latitude . ', ' . $longitude . ')');
            MetaTag::set('description', 'My Elected Officials for ' . $geolocation->state->state_name . ' (' . $latitude . ', ' . $longitude . ')');
            MetaTag::set('image', $geolocation->state->skyline->size_1280x720);
            MetaTag::set('keywords', 'My Elected Officials, GPS, Location, ' . $latitude . ', ' . $longitude . ', ' . $geolocation->state->state_name);

            return view('my-elected-officials.results')
                ->with('representatives', $geolocation->house)
                ->with('senators', $geolocation->senate)
                ->with('breadcrumb', (object) array(
                    'name' => 'Results',
                    'url' => 'geolocation/' . $latitude . '/' . $longitude
                ))
                ->with('state', $geolocation->state);

        } else if(!is_object($geolocation)) {
            abort(400, 'Unable to Fetch Your Elected Officials');
        }
    }
}
