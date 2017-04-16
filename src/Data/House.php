<?php

namespace CivilServices\Data;

use Exception;

// @todo: Consider a Façade so we could use Senator::all() syntax
class House
{
    /* @var Illuminate/Support/Collection */
    private $representatives;

    public function __construct()
    {
        $this->representatives = collect(json_decode(file_get_contents(resource_path('data/house.json'))));
    }

    /**
     * Get Auto Complete for Search Results
     *
     * @return Collection
     */
    public function autocomplete()
    {
        return $this->representatives->map(function ($representative) {
            return [
                'url' => '/us-house/' . $representative->state_name_slug . '/representative/' . $representative->name_slug,
                'name' => $representative->name,
                'slug' => $representative->name_slug,
            ];
        });
    }
}
