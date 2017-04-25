<?php
namespace App\Http\Controllers;

use CivilServices\Data\State;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use MetaTag;
use CivilServices;
use Bugsnag;

class StateController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        // Setup Meta Tags
        MetaTag::set('title', 'Civil Services - Privacy Policy');
        MetaTag::set('description', 'Select a State to access Government & Demographic data. We also provide a Phone Number, Mailing Address, Official Website,');
        MetaTag::set('image', asset('img/header/statue-of-liberty.jpg'));

        return view('state.index');
    }

    /**
     * Get State by Slug
     * @param $stateSlug
     * @return mixed
     */
    public function getState($stateSlug)
    {
        try {
            $state = (new State)->findBySlug($stateSlug);

            // Setup Meta Tags
            MetaTag::set('title', $state->state_name . ' Government Data & Social Media');
            MetaTag::set('description', 'Government Data & Social Media for the state of ' . $state->state_name);
            MetaTag::set('image', $state->skyline->size_1280x720);
            MetaTag::set('keywords', 'Cities, Zip Code, Population, Nickname, Capital, State Map, State Flag, State Seal, ' . $state->state_name);

            return view('state.show')
                ->with('state', $state);

        } catch (\Exception $exception) {
            Bugsnag::notifyException($exception);
            Log::error($exception);
            abort(404, 'Unable to find ' . titleCase($stateSlug));
        }
    }

    /**
     * Get Zip Codes for State
     * @param $stateSlug
     * @return mixed
     */
    public function getZipCodes($stateSlug)
    {
        try {
            $state = (new State)->findBySlug($stateSlug);
            $zip_codes = CivilServices::searchGeolocation([
                'state' => $state->state_code,
                'fields' => 'city,zipcode',
                'sort' => 'city,zipcode',
                'pageSize' => '2000'
            ]);

            $cities = array();

            foreach ($zip_codes as $key => $value) {
                $cities[$value->city][] = $value->zipcode;
            }

            ksort($cities);

            // Setup Meta Tags
            MetaTag::set('title', $state->state_name . ' Cities & Zip Codes');
            MetaTag::set('description', $state->state_name . ' Cities & Zip Codes');
            MetaTag::set('image', $state->skyline->size_1280x720);
            MetaTag::set('keywords', 'Cities, Zip Code, ' . $state->state_name);

            return view('state.zip-codes')
                ->with('state', $state)
                ->with('cities', $cities);

        } catch (\Exception $exception) {
            Bugsnag::notifyException($exception);
            Log::error($exception);
            abort(404, 'Unable to find ' . titleCase($stateSlug));
        }
    }
}
