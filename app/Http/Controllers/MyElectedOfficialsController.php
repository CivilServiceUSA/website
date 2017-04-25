<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use CivilServices;
use MetaTag;
use Bugsnag;

class MyElectedOfficialsController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        // Setup Meta Tags
        MetaTag::set('title', 'Find My Elected Officials');
        MetaTag::set('description', 'Get Contact Information & Political History for members of the 115th United States Congress');
        MetaTag::set('image', asset('img/header/lady-justice.jpg'));
        MetaTag::set('keywords', 'Find My Officials, Contact Information, Elected Officials, Political History, Location, Address');

        return view('my-elected-officials.index');
    }

    /**
     * @return mixed
     */
    public function redirect()
    {
        return redirect('my-elected-officials');
    }

    /**
     * @param $zipcode
     * @return mixed
     */
    public function byZipCode($zipcode)
    {
        try {
            $geolocation = CivilServices::searchGovernment([
                'zipcode' => $zipcode
            ]);

            // Setup Meta Tags
            MetaTag::set('title', 'Elected Officials for Zip Code ' . $zipcode);
            MetaTag::set('description', 'Elected Officials for Zip Code ' . $zipcode);
            MetaTag::set('image', $geolocation->state->skyline->size_1280x720);
            MetaTag::set('keywords', 'Elected Officials, Zip Code, ' . $zipcode . ', ' . $geolocation->state->state_name);

            return view('my-elected-officials.results')
                ->with('representatives', $geolocation->house)
                ->with('senators', $geolocation->senate)
                ->with('state', $geolocation->state)
                ->with('subtitle', $geolocation->state)
                ->with('breadcrumb', (object) array(
                    'name' => $zipcode,
                    'url' => 'zipcode/' . $zipcode
                ));

        } catch (\Exception $exception) {
            Bugsnag::notifyException($exception);
            Log::error($exception);
            abort(404, 'Unable to find ' . titleCase($zipcode));
        }
    }

    /**
     * @param $latitude
     * @param $longitude
     * @return mixed
     */
    public function byGeolocation($latitude, $longitude)
    {
        try {
            $geolocation = CivilServices::searchGovernment([
                'latitude' => $latitude,
                'longitude' => $longitude
            ]);

            // Setup Meta Tags
            MetaTag::set('title', 'Elected Officials for ' . $geolocation->state->state_name . ' (' . $latitude . ', ' . $longitude . ')');
            MetaTag::set('description', 'Elected Officials for ' . $geolocation->state->state_name . ' (' . $latitude . ', ' . $longitude . ')');
            MetaTag::set('image', $geolocation->state->skyline->size_1280x720);
            MetaTag::set('keywords', 'Elected Officials, GPS, Location, ' . $latitude . ', ' . $longitude . ', ' . $geolocation->state->state_name);

            return view('my-elected-officials.results')
                ->with('representatives', $geolocation->house)
                ->with('senators', $geolocation->senate)
                ->with('breadcrumb', (object) array(
                    'name' => 'Results',
                    'url' => 'geolocation/' . $latitude . '/' . $longitude
                ))
                ->with('state', $geolocation->state);
        } catch (\Exception $exception) {
            Bugsnag::notifyException($exception);
            Log::error($exception);
            abort(404, 'Unable to Detect Location');
        }
    }
}
