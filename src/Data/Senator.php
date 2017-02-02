<?php

namespace CivilServices\Data;

use Exception;

// @todo: Consider a Façade so we could use Senator::all() syntax
class Senator
{
    /* @var Illuminate/Support/Collection */
    private $senators;

    private $states = [
        'alabama' => 'AL',
        'alaska' => 'AK',
        'arizona' => 'AZ',
        'arkansas' => 'AR',
        'california' => 'CA',
        'colorado' => 'CO',
        'connecticut' => 'CT',
        'delaware' => 'DE',
        'florida' => 'FL',
        'georgia' => 'GA',
        'hawaii' => 'HI',
        'idaho' => 'ID',
        'illinois' => 'IL',
        'indiana' => 'IN',
        'iowa' => 'IA',
        'kansas' => 'KS',
        'kentucky' => 'KY',
        'louisiana' => 'LA',
        'maine' => 'ME',
        'maryland' => 'MD',
        'massachusetts' => 'MA',
        'michigan' => 'MI',
        'minnesota' => 'MN',
        'mississippi' => 'MS',
        'missouri' => 'MO',
        'montana' => 'MT',
        'nebraska' => 'NE',
        'nevada' => 'NV',
        'new-hampshire' => 'NH',
        'new-jersey' => 'NJ',
        'new-mexico' => 'NM',
        'new-york' => 'NY',
        'north-carolina' => 'NC',
        'north-dakota' => 'ND',
        'ohio' => 'OH',
        'oklahoma' => 'OK',
        'oregon' => 'OR',
        'pennsylvania' => 'PA',
        'rhode-island' => 'RI',
        'south-carolina' => 'SC',
        'south-dakota' => 'SD',
        'tennessee' => 'TN',
        'texas' => 'TX',
        'utah' => 'UT',
        'vermont' => 'VT',
        'virginia' => 'VA',
        'washington' => 'WA',
        'west-virginia' => 'WV',
        'wisconsin' => 'WI',
        'wyoming' => 'WY'
    ];

    public function __construct()
    {
        $this->senators = collect(json_decode(file_get_contents(resource_path('data/senate.json'))));
    }

    /**
     * Get All Senators
     *
     * @return Collection
     */
    public function all()
    {
        return $this->senators;
    }

    /**
     * Get Single Senator by Slug
     *
     * @param $slug
     * @return stdClass
     */
    public function findBySlug($slug)
    {
        return $this->senators->first(function ($senator) use ($slug) {
            return $senator->slug == $slug;
        });
    }

    /**
     * Get List of Senators by Party
     *
     * @param $party
     * @return Collection
     */
    public function byParty($party)
    {
        $party = strtolower($party);

        if (! in_array($party, ['democrat', 'republican', 'independent'])) {
            throw new Exception('Invalid party.');
        }

        return $this->senators->where('party', $party);
    }

    /**
     * Get List of Senators by Class
     *
     * @param $class
     * @return Collection
     */
    public function byClass($class)
    {
        $class = strtoupper($class);

        if (! in_array($class, ['I', 'II', 'III'])) {
            throw new Exception('Invalid class.');
        }

        return $this->senators->where('class', $class);
    }

    /**
     * Get List of Senators by Gender
     *
     * @param $gender
     * @return Collection
     */
    public function byGender($gender)
    {
        $gender = strtolower($gender);

        if (! in_array($gender, ['male', 'female'])) {
            throw new Exception('Invalid gender.');
        }

        return $this->senators->where('gender', $gender);
    }

    /**
     * Get List of Senators by Ethnicity
     *
     * @param $ethnicity
     * @return Collection
     */
    public function byEthnicity($ethnicity)
    {
        $ethnicity = strtolower($ethnicity);

        if (! in_array($ethnicity, ['african-american', 'asian-american', 'hispanic-american', 'white'])) {
            throw new Exception('Invalid ethnicity.');
        }

        return $this->senators->where('ethnicity', $ethnicity);
    }

    /**
     * Get List of Senators by State
     *
     * @param $state
     * @return Collection
     */
    public function byState($state)
    {
        $state = strtolower(str_replace(' ', '-', $state));

        if (! array_key_exists($state, $this->states)) {
            throw new Exception('Invalid state.');
        }

        return $this->senators->where('state', $this->states[$state]);
    }

    /**
     * Get Majority Leaders
     *
     * @return Collection
     */
    public function majorityLeaders()
    {
        return $this->senators->where('majority_leader', true)
            ->orWhere('majority_whip', true)
            ->get();
    }

    /**
     * Get Minority Leaders
     *
     * @return Collection
     */
    public function minorityLeaders()
    {
        return $this->senators->where('minority_leader', true)
            ->orWhere('minority_whip', true)
            ->get();
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
                'url' => '/senate/senator/' . $senator->slug,
                'name' => $senator->name,
                'slug' => $senator->slug,
            ];
        });
    }
}
