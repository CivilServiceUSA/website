<?php

namespace CivilServices\Data;

use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

class State
{
    /* @var Illuminate/Support/Collection */
    private $states;

    public function __construct()
    {
        $this->states = collect(json_decode(file_get_contents(resource_path('data/states.json'))));
    }

   /**
     * Get All States
     *
     * @return Collection
     */
    public function all()
    {
        return $this->states;
    }

    /**
     * Get Single State by Slug
     *
     * @param $slug
     * @return stdClass
     */
    public function findBySlug($slug)
    {
        try {
            $client = new GuzzleHttpClient();
            $url = env('CIVIL_SERVICES_API_BASE') . '/v1/state/' . $slug;
            $query = array(
                'apikey' => env('CIVIL_SERVICES_API_KEY')
            );

            $cache_url = $url . '?' . http_build_query($query);
            $cache_key = 'api:query:' . md5($cache_url);

            $cached_response = Cache::get($cache_key);

            if ($cached_response) {
                $api_data = json_decode($cached_response);

                return $api_data->data;
            } else {
                $apiRequest = $client->request('GET', $url, [
                    'query' => $query
                ]);

                $response = $apiRequest->getBody()->getContents();
                $api_data = json_decode($response);

                if ($api_data->error) {
                    // @TODO: Handler Error
                } else {
                    Cache::add($cache_key, $response, 3600);
                    return $api_data->data;
                }
            }

        } catch (RequestException $re) {
            //For handling exception
            exit ($re);
        }
    }

    /**
     * Get Auto Complete for Search Results
     *
     * @return Collection
     */
    public function autocomplete()
    {
        return $this->states->map(function ($state) {
            return [
                'url' => '/state/' . $state->slug,
                'name' => $state->state,
                'slug' => $state->slug,
            ];
        });
    }
}
