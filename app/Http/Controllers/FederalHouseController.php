<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CivilServices;
use MetaTag;

class FederalHouseController extends Controller
{
    /**
     * Default Senate Page
     *
     * @return mixed
     */
    public function index()
    {
        // Setup Meta Tags
        MetaTag::set('title', 'United States House of Representatives');
        MetaTag::set('description', '115th United States Congress');
        MetaTag::set('image', asset('img/header/us-house.jpg'));
        MetaTag::set('keywords', 'House of Representatives, United States, Congress');

        return view('us-house.index');
    }

    /**
     * Get Senators for a State
     *
     * @param $state
     * @return mixed
     */
    public function getState($state)
    {
        $stateRepresentatives = CivilServices::searchHouse([
            'state' => $state,
            'sort' => 'district',
            'order' => 'asc',
            'fields' => 'name,name_slug,photo_url_sizes,title,party,biography,twitter_url,facebook_url,website,state_name_slug,date_of_birth,entered_office,gender,term_end,opensecrets_url,votesmart_url,phone,contact_page,district,at_large'
        ]);

        $title = titleCase($state) . ' State Senators';
        $stateData = CivilServices::getState($state);

        // Setup Meta Tags
        $keywords = [titleCase($state), 'Senators', 'United States', 'Congress'];
        foreach ($stateRepresentatives as $representative) { $keywords[] = $representative->name; }

        MetaTag::set('title', $title);
        MetaTag::set('description', $title . ' of the 115th United States Congress.');
        MetaTag::set('image', $stateData->landscape->size_1280x720);
        MetaTag::set('keywords', join(', ', $keywords));

        if (is_array($stateRepresentatives) && is_object($stateData)) {

            $clean = removeEmpty($stateRepresentatives, 'name');

            return view('us-house.state')
                ->with('slug', $state)
                ->with('state', $stateData)
                ->with('representatives', $clean);

        } else if(!is_array($stateRepresentatives)) {
            abort(400, 'Unable to Fetch Senators');
        } else if(!is_object($stateData)) {
            abort(400, 'Unable to Fetch State');
        }


    }

    /**
     * Get Specific Representative
     *
     * @param $state
     * @param $name
     * @return mixed
     */
    public function getRepresentative($state, $name)
    {
        $representatives = CivilServices::searchHouse([
            'state' => $state,
            'name' => $name
        ]);

        $stateData = CivilServices::getState($state);

        if (is_array($representatives) && is_object($stateData)) {
            $representative = $representatives[0];

            // Setup Meta Tags
            $title = $representative->name . ' - ' . titleCase($representative->party) . ' ' . titleCase($representative->title) . ' of ' . $stateData->state_name;

            MetaTag::set('title', $title);
            MetaTag::set('description', 'View Accountability Reports, Demographic Data, Contact Information and Social Media Profiles for ' . $representative->name . ', ' . titleCase($representative->party) . ' ' . titleCase($representative->title) . ' of ' . $stateData->state_name . '.');
            MetaTag::set('image', $representative->photo_url);
            MetaTag::set('keywords', $representative->name);

            return view('us-house.representative')
                ->with('slug', $state)
                ->with('state', $stateData)
                ->with('representative', $representative);

        } else if(!is_array($representatives)) {
            abort(400, 'Unable to Fetch Senator');
        } else if(!is_object($stateData)) {
            abort(400, 'Unable to Fetch State');
        }
    }

    /**
     * Get Senators for Specific List
     * @param $filter
     * @return mixed
     */
    public function getList($filter)
    {
        $search = [
            'sort' => 'last_name',
            'order' => 'asc',
            'pageSize' => '500',
            'fields' => 'name,name_slug,photo_url_sizes,title,party,biography,twitter_url,facebook_url,website,state_name_slug,date_of_birth,entered_office,gender,term_end,opensecrets_url,votesmart_url,phone,contact_page,district,at_large'
        ];

        switch ($filter) {
            case 'democratic-party':
                $search['party'] = 'democrat';
                break;
            case 'independent-party':
                $search['party'] = 'independent';
                break;
            case 'republican-party':
                $search['party'] = 'republican';
                break;
            case 'female-representatives':
                $search['gender'] = 'female';
                break;
            case 'male-representatives':
                $search['gender'] = 'male';
                break;
            case 'democratic-leaders':
                $search['title'] = 'democratic-caucus-chairman,assistant-democratic-leader';
                break;
            case 'republican-leaders':
                $search['title'] = 'republican-policy-committee-chairman,republican-conference-chairman';
                break;
            case 'african-american-representatives':
                $search['ethnicity'] = 'african-american';
                break;
            case 'asian-american-representatives':
                $search['ethnicity'] = 'asian-american';
                break;
            case 'hispanic-american-representatives':
                $search['ethnicity'] = 'hispanic-american';
                break;
            case 'native-american-representatives':
                $search['ethnicity'] = 'native-american';
                break;
            case 'white-american-representatives':
                $search['ethnicity'] = 'white-american';
                break;
            case 'african-methodist-representatives':
                $search['religion'] = 'african-methodist';
                break;
            case 'baptist-representatives':
                $search['religion'] = 'baptist';
                break;
            case 'christian-representatives':
                $search['religion'] = 'christian';
                break;
            case 'christian-scientist-representatives':
                $search['religion'] = 'christian-scientist';
                break;
            case 'congregationalist-representatives':
                $search['religion'] = 'congregationalist';
                break;
            case 'eastern-orthodox-representatives':
                $search['religion'] = 'eastern-orthodox';
                break;
            case 'episcopalian-representatives':
                $search['religion'] = 'episcopalian';
                break;
            case 'evangelical-representatives':
                $search['religion'] = 'evangelical';
                break;
            case 'hindu-representatives':
                $search['religion'] = 'hindu';
                break;
            case 'jewish-representatives':
                $search['religion'] = 'jewish';
                break;
            case 'lutheran-representatives':
                $search['religion'] = 'lutheran';
                break;
            case 'methodist-representatives':
                $search['religion'] = 'methodist';
                break;
            case 'mormon-representatives':
                $search['religion'] = 'mormon';
                break;
            case 'muslim-representatives':
                $search['religion'] = 'muslim';
                break;
            case 'presbyterian-representatives':
                $search['religion'] = 'presbyterian';
                break;
            case 'protestant-representatives':
                $search['religion'] = 'protestant';
                break;
            case 'roman-catholic-representatives':
                $search['religion'] = 'roman-catholic';
                break;
            case 'southern-baptist-representatives':
                $search['religion'] = 'southern-baptist';
                break;
        }

        $stateRepresentatives = CivilServices::searchHouse($search);

        // Setup Meta Tags
        $title = titleCase($filter) . ' of the United States Senate';
        $keywords = [titleCase($filter), 'Senators', 'United States', 'Congress'];
        foreach ($stateRepresentatives as $representative) { $keywords[] = $representative->name; }

        MetaTag::set('title', $title);
        MetaTag::set('description', $title . ' of the 115th United States Congress.');
        MetaTag::set('image', asset('img/header/us-senate.jpg'));
        MetaTag::set('keywords', join(', ', $keywords));

        return view('us-house.list')
            ->with('filter', $filter)
            ->with('representatives', $stateRepresentatives);
    }
}
