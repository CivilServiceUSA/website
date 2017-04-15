<?php
namespace App\Http\Controllers;

use CivilServices\Data\State;
use Illuminate\Http\Request;
use MetaTag;
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

    public function getZipCodes($stateSlug)
    {
        $state = (new State)->findBySlug($stateSlug);
        $zip_codes = CivilServices::searchGeolocation([
            'state' => $state->state_code,
            'fields' => 'city,zipcode',
            'sort' => 'city,zipcode',
            'pageSize' => '2000'
        ]);

        if (is_array($zip_codes)) {

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

        } else if(!is_array($zip_codes)) {
            abort(400, 'Unable to Fetch Your Elected Officials');
        }
    }
}
