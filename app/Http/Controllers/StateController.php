<?php
namespace App\Http\Controllers;

use CivilServices\Data\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

class StateController extends Controller
{
    public function show($stateSlug)
    {
        /*
        try {
            $client = new GuzzleHttpClient();
            $url = env('CIVIL_SERVICES_API_BASE') . '/v1/senate';
            $query = array(
                'apikey' => env('CIVIL_SERVICES_API_KEY')
            );

            $cache_url = $url . '?' . http_build_query($query);
            $cache_key = 'api:query:' . md5($cache_url);

            $cached_response = Cache::get($cache_key);

            if ($cached_response) {
                $cache = json_decode($cached_response);
                exit('CACHE: ' . print_r($cache, true));
            } else {
                $apiRequest = $client->request('GET', $url, [
                    'query' => $query
                ]);

                $response = $apiRequest->getBody()->getContents();

                Cache::add($cache_key, $response, 3600);

                $cache = json_decode($response);

                exit ('NOT CACHED: ' . print_r($cache, true));
            }

        } catch (RequestException $re) {
            //For handling exception
            exit ($re);
        }
        */

        $state = (new State)->findBySlug($stateSlug);

        return view('states.show')
            ->with('state', $state);
    }
}
