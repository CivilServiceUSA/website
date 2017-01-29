<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Senate extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $search_autocomplete = array_merge($this->state_model->get_autocomplete(), $this->senate_model->get_autocomplete());

        $this->data = array();
        $this->data['search_autocomplete'] = array_msort($search_autocomplete, array('name'=>SORT_ASC, 'slug'=>SORT_ASC));
        $this->data['media_path'] = $this->config->item('media_path');
        $this->data['meta'] = $this->meta_model->get_meta();
        $this->data['header_menu'] = $this->load->view('partials/header-menu', $this->data, true);
        $this->data['footer'] = $this->load->view('partials/footer', $this->data, true);
    }

    /**
     * Default Senate Page
     */
	public function index()
	{
		$this->load->view('home', $this->data);
	}

    /**
     * Show List of Filters
     */
    public function list()
    {
        $this->meta_model->set_title('115th United States Senate');
        $this->meta_model->set_keywords('Civil, Services, Local, State, Federal, Government, Legislation, Accountability, Action, Information, Elected, Officials, API, Developers');
        $this->meta_model->set_description('115th United States Senate data');
        $this->meta_model->set_image();
        $this->meta_model->set_json_ld();

        $this->data['senate'] = $this->senate_model->get_senators();
        $this->data['meta'] = $this->meta_model->get_meta();
        $this->load->view('home', $this->data);
    }

    /**
     * Democratic Party Senator List
     */
    public function democratic_party()
    {
        $senate = $this->senate_model->get_senators_by_party('democrat');

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * Republican Party Senator List
     */
    public function republican_party()
    {
        $senate = $this->senate_model->get_senators_by_party('republican');

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * Independent Party Senator List
     */
    public function independent_party()
    {
        $senate = $this->senate_model->get_senators_by_party('independent');

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * Class II Senator Senator List
     */
    public function class_i_senators()
    {
        $senate = $this->senate_model->get_senators_by_class('I');

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * Class I Senator List
     */
    public function class_ii_senators()
    {
        $senate = $this->senate_model->get_senators_by_class('II');

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * Class III Senator Lists
     */
    public function class_iii_senators()
    {
        $senate = $this->senate_model->get_senators_by_class('III');

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * Male Senator List
     */
    public function male_senators()
    {
        $senate = $this->senate_model->get_senators_by_gender('male');

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * Female Senator List
     */
    public function female_senators()
    {
        $senate = $this->senate_model->get_senators_by_gender('female');

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * Majority Leader Senator List
     */
    public function majority_leaders()
    {
        $senate = $this->senate_model->get_majority_leaders();

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * Minority Leader Senator List
     */
    public function minority_leaders()
    {
        $senate = $this->senate_model->get_minority_leaders();

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * African American Senator List
     */
    public function african_american_senators()
    {
        $senate = $this->senate_model->get_senators_by_ethnicity('african-american');

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * Asian American Senator List
     */
    public function asian_american_senators()
    {
        $senate = $this->senate_model->get_senators_by_ethnicity('asian-american');

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * Hispanic American Senator List
     */
    public function hispanic_american_senators()
    {
        $senate = $this->senate_model->get_senators_by_ethnicity('hispanic-american');

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * White Senator List
     */
    public function white_senators()
    {
        $senate = $this->senate_model->get_senators_by_ethnicity('white');

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * State Senators
     * @param $name
     */
    public function state($name=NULL)
    {
        $senate = $this->senate_model->get_senators_by_state($name);

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }

    /**
     * Fetch Specific Senator by Slug
     * @param $name
     */
    public function senator($name=NULL)
    {
        $senate = $this->senate_model->get_senator_by_slug($name);

        if (count($senate) === 0) {
            show_404();
            return;
        }

        $this->data['senate'] = $senate;
        $this->load->view('home', $this->data);
    }
}
