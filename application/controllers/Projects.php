<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends MY_Controller {

	public function __construct() {
        
        parent::__construct();
        $this->load->model('category_model');
        $this->load->model('projects_model');
        
    }
	
	public function index()
	{		
		$data['projects'] = $this->projects_model->listAllProjects();
        $this->load->view('projects/show_projects', $data);
	}

    public function newProject(){
        $data['categorias'] = $this->category_model->listar_categorias();
        $this->load->view('projects/new_project', $data);
    }

    public function insert_project(){
        $project = array(
                'permalink'   => permalink($this->input->post('title')),
                'title'       => $this->input->post('title'),
                'content'     => $this->input->post('content'),
                'date'        => date('Y-m-d H:i:s'),
                'idCategoria' => $this->input->post('idCategoria'),

                );
        if(isset($_POST['draft']) ){
            $project['status'] = 'DRAFT';
        } else{
            $project['status'] = 'PUBLISHED';
        }
        if($_FILES['before']['name']){
            $url_anterior=$_SERVER['HTTP_REFERER'];
            $file = "before";
            $imagen = $this->do_upload($url_anterior, $file );
            //$this->cargar_imagen();
            $project['image_before'] = $imagen['upload_data']['file_name'];
        }
        if($_FILES['after']['name']){
            $url_anterior=$_SERVER['HTTP_REFERER'];
            $file = "after";
            $imagen = $this->do_upload($url_anterior, $file );
            //$this->cargar_imagen();
            $project['image_after'] = $imagen['upload_data']['file_name'];
        }

        $tabla= 'projects';
        $campo = 'title';
        $result = $this->category_model->agregar_registro($project, $tabla, $campo);

        $mensaje = $this->mensaje_flash($result['type'], $result['mensaje']);
        $this->session->set_flashdata('correcto', $mensaje);


        redirect('/projects', 'refresh');
    }

    public function editForm($id)
    {
        $data['project'] = $this->projects_model->datos_registro($id, 'projects');
        $data['categorias'] = $this->category_model->listar_categorias();
        $this->load->view('projects/edit_project', $data);
    }

    public function edit_project($id){
        $project = array(
                'permalink'   => permalink($this->input->post('title')),
                'title'       => $this->input->post('title'),
                'content'     => $this->input->post('content'),
                'date'        => date('Y-m-d H:i:s'),
                'idCategoria' => $this->input->post('idCategoria'),

                );
        if(isset($_POST['draft']) ){
            $project['status'] = 'DRAFT';
        } else{
            $project['status'] = 'PUBLISHED';
        }
        if($_FILES['before']['name']){
            $url_anterior=$_SERVER['HTTP_REFERER'];
            $file = "before";
            $imagen = $this->do_upload($url_anterior, $file );
            //$this->cargar_imagen();
            $project['image_before'] = $imagen['upload_data']['file_name'];
        }
        if($_FILES['after']['name']){
            $url_anterior=$_SERVER['HTTP_REFERER'];
            $file = "after";
            $imagen = $this->do_upload($url_anterior, $file );
            //$this->cargar_imagen();
            $project['image_after'] = $imagen['upload_data']['file_name'];
        }

        $tabla= 'projects';
        $result = $this->projects_model->editar_registro($project, $id, $tabla);

        $mensaje = $this->mensaje_flash($result['type'], $result['mensaje']);
        $this->session->set_flashdata('correcto', $mensaje);


        redirect('/projects', 'refresh');
    }

    public function projectRemove($id){
        $data['deleted_at'] = date("Y-m-d H:i:s");
        $result = $this->projects_model->editar_registro($data, $id, 'projects');
        //$result = $this->productos_model->editar_categoria($data, $id);
         echo json_encode($result);

    }


}