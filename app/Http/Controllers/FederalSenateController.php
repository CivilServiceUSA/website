<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CivilServices;
use MetaTag;

class FederalSenateController extends Controller
{
    /**
     * Default Senate Page
     *
     * @return mixed
     */
    public function index()
    {
        // Setup Meta Tags
        MetaTag::set('title', 'United States Senate');
        MetaTag::set('description', '115th United States Congress');
        MetaTag::set('image', asset('img/header/us-senate.jpg'));
        MetaTag::set('keywords', 'Senators, United States, Congress');

        return view('us-senate.index');
    }

    /**
     * Get Senators for a State
     *
     * @param $state
     * @return mixed
     */
    public function getState($state)
    {
        $stateSenators = $senate = CivilServices::searchSenate([
            'state' => $state,
            'sort' => 'last_name',
            'order' => 'asc',
            'fields' => 'name,name_slug,photo_url_sizes,title,party,biography,twitter_url,facebook_url,website,state_name_slug,date_of_birth,entered_office,gender,term_end,opensecrets_url,votesmart_url,phone,contact_page'
        ]);

        $title = titleCase($state) . ' State Senators';
        $stateData = CivilServices::getState($state);

        // Setup Meta Tags
        $keywords = [titleCase($state), 'Senators', 'United States', 'Congress'];
        foreach ($stateSenators as $senator) { $keywords[] = $senator->name; }

        MetaTag::set('title', $title);
        MetaTag::set('description', $title . ' of the 115th United States Congress.');
        MetaTag::set('image', $stateData->landscape->size_1280x720);
        MetaTag::set('keywords', join(', ', $keywords));

        if (is_array($stateSenators) && is_object($stateData)) {
            $clean = removeEmpty($stateSenators, 'name');

            return view('us-senate.state')
                ->with('slug', $state)
                ->with('state', $stateData)
                ->with('senators', $clean);

        } else if(!is_array($stateSenators)) {
            abort(400, 'Unable to Fetch Senators');
        } else if(!is_object($stateData)) {
            abort(400, 'Unable to Fetch State');
        }


    }

    /**
     * Get Specific Senator
     *
     * @param $state
     * @param $name
     * @return mixed
     */
    public function getSenator($state, $name)
    {
        $senators = $senate = CivilServices::searchSenate([
            'state' => $state,
            'name' => $name
        ]);

        $stateData = CivilServices::getState($state);

        if (is_array($senators) && is_object($stateData)) {
            $senator = $senators[0];

            // Setup Meta Tags
            $title = $senator->name . ' - ' . titleCase($senator->party) . ' ' . titleCase($senator->title) . ' of ' . $stateData->state_name;

            MetaTag::set('title', $title);
            MetaTag::set('description', 'View Accountability Reports, Demographic Data, Contact Information and Social Media Profiles for ' . $senator->name . ', ' . titleCase($senator->party) . ' ' . titleCase($senator->title) . ' of ' . $stateData->state_name . '.');
            MetaTag::set('image', $senator->photo_url);
            MetaTag::set('keywords', $senator->name);

            return view('us-senate.senator')
                ->with('slug', $state)
                ->with('state', $stateData)
                ->with('senator', $senator);

        } else if(!is_array($senators)) {
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
            'pageSize' => '100',
            'fields' => 'name,name_slug,photo_url_sizes,title,party,biography,twitter_url,facebook_url,website,state_name_slug,date_of_birth,entered_office,gender,term_end,opensecrets_url,votesmart_url,phone,contact_page'
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
            case 'class-i':
                $search['class'] = 'I';
                break;
            case 'class-ii':
                $search['class'] = 'II';
                break;
            case 'class-iii':
                $search['class'] = 'III';
                break;
            case 'female-senators':
                $search['gender'] = 'female';
                break;
            case 'male-senators':
                $search['gender'] = 'male';
                break;
            case 'majority-leaders':
                $search['title'] = 'senate-majority-leader,senate_majority-whip';
                break;
            case 'minority-leaders':
                $search['title'] = 'senate-minority-leader,senate-minority-whip';
                break;
            case 'african-american-senators':
                $search['ethnicity'] = 'african-american';
                break;
            case 'asian-american-senators':
                $search['ethnicity'] = 'asian-american';
                break;
            case 'hispanic-american-senators':
                $search['ethnicity'] = 'hispanic-american';
                break;
            case 'white-american-senators':
                $search['ethnicity'] = 'white-american';
                break;
            case 'baptist-senators':
                $search['religion'] = 'baptist';
                break;
            case 'buddhist-senators':
                $search['religion'] = 'buddhism';
                break;
            case 'christian-senators':
                $search['religion'] = 'christian';
                break;
            case 'church-of-christ-senators':
                $search['religion'] = 'church-of-christ';
                break;
            case 'church-of-god-senators':
                $search['religion'] = 'church-of-god';
                break;
            case 'congregationalist-senators':
                $search['religion'] = 'congregationalist';
                break;
            case 'deist-senators':
                $search['religion'] = 'deist';
                break;
            case 'episcopalian-senators':
                $search['religion'] = 'episcopalian';
                break;
            case 'evangelical-senators':
                $search['religion'] = 'evangelical';
                break;
            case 'evangelical-lutheran-senators':
                $search['religion'] = 'evangelical-lutheran';
                break;
            case 'jewish-senators':
                $search['religion'] = 'jewish';
                break;
            case 'lutheran-senators':
                $search['religion'] = 'lutheran';
                break;
            case 'methodist-senators':
                $search['religion'] = 'methodist';
                break;
            case 'mormon-senators':
                $search['religion'] = 'mormon';
                break;
            case 'presbyterian-senators':
                $search['religion'] = 'presbyterian';
                break;
            case 'protestant-senators':
                $search['religion'] = 'protestant';
                break;
            case 'roman-catholic-senators':
                $search['religion'] = 'roman-catholic';
                break;
            case 'southern-baptist-senators':
                $search['religion'] = 'southern-baptist';
                break;
            case 'united-church-of-christ-senators':
                $search['religion'] = 'united-church-of-christ';
                break;
        }

        $stateSenators = $senate = CivilServices::searchSenate($search);

        // Setup Meta Tags
        $title = titleCase($filter) . ' of the United States Senate';
        $keywords = [titleCase($filter), 'Senators', 'United States', 'Congress'];
        foreach ($stateSenators as $senator) { $keywords[] = $senator->name; }

        MetaTag::set('title', $title);
        MetaTag::set('description', $title . ' of the 115th United States Congress.');
        MetaTag::set('image', asset('img/header/us-senate.jpg'));
        MetaTag::set('keywords', join(', ', $keywords));

        return view('us-senate.list')
            ->with('filter', $filter)
            ->with('senators', $stateSenators);
    }
}
