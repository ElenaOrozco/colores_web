<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        
        parent::__construct();
        
    }

	
	public function index()
	{
		
		 if (!$this->session->userdata('loggedin'))
        {
            //this->load->view('admin/v_pant_principal');
            redirect('sessions/login','refresh');
        }else{
        	$this->load->view('admin/v_pant_principal');
        }

	}
}