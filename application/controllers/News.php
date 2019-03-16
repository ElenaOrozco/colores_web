<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('news_model');
        $this->load->model('category_model');              
    }
   
    public function index(){
        
        
        $data['entries'] = $this->news_model->getEntries();
        $this->load->view('news/show_entries', $data);
    }
    public function entry(){
        $data['categorias'] = $this->category_model->listar_categorias();
        $this->load->view('news/new_entry', $data);
    }
    public function insert_entry(){
        
        $entry = array(
                'permalink'   => permalink($this->input->post('title')),
                'author'      => $this->session->userdata('nombre'),
                'title'       => $this->input->post('title'),
                'content'     => $this->input->post('content'),
                'date'        => date('Y-m-d H:i:s'),
                'tags'        => $this->input->post('tags'),
                'idCategoria' => $this->input->post('idCategoria'),

                );  
        if(isset($_POST['draft']) ){
            $entry['status'] = 'DRAFT';
        } else{
            $entry['status'] = 'PUBLISHED';
        }
        if(!empty($_FILES['userfile']['name'])){
            $this->cargar_imagen();
            $entry['image'] = $_FILES['userfile']['name'];
        }           
        $this->news_model->insert('entries', $entry);
        redirect(base_url('news'));
    }

    public function cargar_imagen(){
        if($_FILES['userfile']['size'] > 309000){               
            $mensaje = $this->mensaje_flash('error', 'Tamaño de la imagen mayor a 300KB');
            $this->session->set_flashdata('correcto', $mensaje);
            $pagina_anterior=$_SERVER['HTTP_REFERER'];
            redirect($pagina_anterior,'refresh');
        }

        $_FILES['userfile']['name'] = str_replace(' ', '', $_FILES["userfile"]["name"]);
        $retorno = $this->do_upload('userfile');
        
        $subir['imagen'] = $_FILES["userfile"]["name"];
        if(!$retorno) 
        $msj  .= 'Error al agregar la imagen <br>';
    }

    public function do_upload() {
        $config ="";
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008';
 
        $this->load->library('upload');
        // Cargamos la nueva configuración
        $this->upload->initialize($config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        if (!$this->upload->do_upload('userfile')) {
            
             return  array('error' => $this->upload->display_errors(), 'estado' =>FALSE);  
        } else{
            return TRUE;
        }
        
    }
}