<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {

        parent::__construct();
		$this->load->model('news_model');
		$this->load->model('projects_model');
		$this->load->model('category_model');
    }

	public function index()
	{
		$data['projects'] = $this->projects_model->lastProjects(6);
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
		$data['projects'] = $this->projects_model->listAllProjects();
		$this->load->view('v_projects', $data);
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
	public function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}


	public function enviar_mensaje(){


		$email_to = "thecolores1970@yahoo.com";
		$email_cc = "elena.orozcoch@gmail.com";
		$email_from = $this->input->post('email');
		$message = $this->input->post('message');
		$from = $this->input->post('name');

		//Este es el cuerpo del mensaje tal y como llegará al correo
		$email_message = "Contenido del Mensaje.\n\n";
		$email_message .= $from."\n";
		$email_message .= $email_from."\n";
		$email_message .= $message."\n";

 	// 	$email_message .= "Nombre: ". $this->clean_string($from)."\n";
		// $email_message .= "Email: ".  $this->clean_string($email_from)."\n";
		// $email_message .= "Mensaje: ".$this->clean_string($message)."\n";

        $config['protocol'] = 'mail'; //puede ser sendmail
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$this->load->library('email');
		$this->email->initialize($config);

        $this->email->from( $email_from, $from);
		$this->email->to($email_to); 
		$this->email->cc($email_cc); 
		

		$this->email->subject('Email Pagina Web');
		$this->email->message($email_message);	

		if($this->email->send()){
			$this->session->set_flashdata("email_sent","Thank you for sending your message, we will contact you shortly!");
		}else{
        	$this->session->set_flashdata("email_sent","Sorry, your message could not be sent!");
       //  	echo 'Failed';
       //  	echo $this->email->print_debugger();


			    // exit();
		}
        
       	redirect( $_SERVER["HTTP_REFERER"].'#header15-a', 'refresh');

		
	}
}
