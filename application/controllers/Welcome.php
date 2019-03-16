<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        
        parent::__construct();
        
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function services()
	{
		$this->load->view('v_services');
	}

	public function about()
	{
		$this->load->view('v_about');
	}

	public function projects()
	{
		$this->load->view('v_projects');
	}

	public function news()
	{
		$this->load->view('v_news');
	}

	public function contact()
	{
		$this->load->view('v_contact');
	}
}
