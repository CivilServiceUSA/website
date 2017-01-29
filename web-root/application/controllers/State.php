<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {

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
     * Load State
     */
	public function index($slug)
	{
        $state = $this->state_model->get_state_by_slug($slug);

        if (count($state) === 0) {
            show_404();
            return;
        }

        $this->data['state'] = $state;
        $this->load->view('state', $this->data);
	}
}
