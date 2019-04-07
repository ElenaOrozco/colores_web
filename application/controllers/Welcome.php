<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {

        parent::__construct();
		$this->load->model('news_model');
		$this->load->model('category_model');
    }

	public function index()
	{
		$data['entries'] = $this->news_model->lastPost(3);
		$this->load->view('page', $data);
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

		$data['entries'] = $this->news_model->getEntries();
		$data['categorias'] = $this->category_model->listar_categorias();
		$this->load->view('v_news', $data);
	}

	public function contact()
	{
		$this->load->view('v_contact');
	}
}
