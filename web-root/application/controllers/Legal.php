<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $search_autocomplete = array_merge($this->state_model->get_autocomplete(), $this->senate_model->get_autocomplete());

        $this->data = array();
        $this->data['search_autocomplete'] = array_msort($search_autocomplete, array('name'=>SORT_ASC, 'slug'=>SORT_ASC));
        $this->data['media_path'] = $this->config->item('media_path');
        $this->data['header_menu'] = $this->load->view('partials/header-menu', $this->data, true);
        $this->data['footer'] = $this->load->view('partials/footer', $this->data, true);
    }

    public function index()
	{
		$this->load->view('home', $this->data);
	}

    public function terms_of_use()
    {
        $this->meta_model->set_title('Civil Services - Terms of Use');
        $this->meta_model->set_keywords('Civil, Services, Terms, Terms of Use');
        $this->meta_model->set_description('These Terms of Use tell you about our services, our relationship to you as a user, and the rights and responsibilities that guide us both.');

        $this->data['meta'] = $this->meta_model->get_meta();

        $this->load->view('terms-of-use', $this->data);
    }

	public function privacy_policy()
    {
        $this->meta_model->set_title('Civil Services - Privacy Policy');
        $this->meta_model->set_keywords('Civil, Services, Privacy, Privacy Policy');
        $this->meta_model->set_description('This Privacy Policy explains how we collect, use, and share information we receive from you through your use of our Website.');

        $this->data['meta'] = $this->meta_model->get_meta();

        $this->load->view('privacy-policy', $this->data);
    }
}
