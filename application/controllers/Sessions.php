<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller
{
    public function __construct(){
        parent::__construct();
                       
    }

    public function login($error = 0)
    {
        $data['error'] = $error;
        $data['img_dir'] = base_url().$this->config->item('img_dir');
		
        $this->load->view('admin/v_login', $data);
    }
    

    public function authenticate()
    {
        $this->load->model('User_model', '', true);
        if ($this->User_model->authenticate($this->input->post('usuario'), $this->input->post('pass')))
        {
            
            header('Location: '.base_url('admin'));
            
            
        }
        else
        {
            // aqui se tiene que definir el estatus del error del login
            // 1 para error general de usuario y/o nombre se puede guardar el error en la sesion
            
            header('Location: '.site_url().'sessions/login/1');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('loggedin');
        $this->session->sess_destroy();
        header('Location: '.site_url());
    }
    
}