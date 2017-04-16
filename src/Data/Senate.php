<?php

namespace CivilServices\Data;

use Exception;

// @todo: Consider a Façade so we could use Senator::all() syntax
class Senate
{
    /* @var Illuminate/Support/Collection */
    private $senators;

    public function __construct()
    {
        $this->senators = collect(json_decode(file_get_contents(resource_path('data/senators.json'))));
    }

    /**
     * Get Auto Complete for Search Results
     *
     * @return Collection
     */
    public function autocomplete()
    {
        return $this->senators->map(function ($senator) {
            return [
                'url' => '/us-senate/' . $senator->state_name_slug . '/senator/' . $senator->name_slug,
                'name' => $senator->name,
                'slug' => $senator->name_slug,
            ];
        });
    }
}
