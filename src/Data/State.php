<?php

namespace CivilServices\Data;

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
        return $this->states->first(function ($state) use ($slug) {
            return $state->slug == $slug;
        });
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
                'name' => $state->name,
                'slug' => $state->slug,
            ];
        });
    }
}
