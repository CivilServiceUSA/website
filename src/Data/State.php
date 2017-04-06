<?php

namespace CivilServices\Data;

use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;
use CivilServices;

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
        return CivilServices::getState($slug);
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
