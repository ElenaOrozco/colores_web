<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('news_model');
        $this->load->model('category_model');
    }

    public function index(){


        $data['entries'] = $this->news_model->getAllEntries();
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
                'abstract'    => $this->input->post('abstract'),
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
        if($_FILES['userfile']['name']){
            $url_anterior=$_SERVER['HTTP_REFERER'];
            $imagen = $this->do_upload($url_anterior);
            //$this->cargar_imagen();
            $entry['image'] = $imagen['upload_data']['file_name'];
        }

        $tabla= 'entries';
        $campo = 'title';
        $result = $this->category_model->agregar_registro($entry, $tabla, $campo);

        $mensaje = $this->mensaje_flash($result['type'], $result['mensaje']);
        $this->session->set_flashdata('correcto', $mensaje);


        redirect('/news', 'refresh');
    }

    public function editForm($id)
    {
        $data['entry'] = $this->news_model->datos_registro($id, 'entries');
        $data['categorias'] = $this->category_model->listar_categorias();
        $this->load->view('news/edit_entry', $data);
    }

    public function update_entry($id){
        $entry = array(
                'permalink'   => permalink($this->input->post('title')),
                'author'      => $this->session->userdata('nombre'),
                'title'       => $this->input->post('title'),
                'abstract'    => $this->input->post('abstract'),
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
        if($_FILES['userfile']['name']){
            $url_anterior=$_SERVER['HTTP_REFERER'];
            $imagen = $this->do_upload($url_anterior);
            //$this->cargar_imagen();
            $entry['image'] = $imagen['upload_data']['file_name'];
        }

        $tabla= 'entries';
        $result = $this->category_model->editar_registro($entry, $id, $tabla);

        $mensaje = $this->mensaje_flash($result['type'], $result['mensaje']);
        $this->session->set_flashdata('correcto', $mensaje);


        redirect('/news', 'refresh');
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

    // public function do_upload() {
    //     $config ="";
    //     $config['upload_path'] = './uploads/';
    //     $config['allowed_types'] = 'gif|jpg|png';
    //     $config['max_size'] = '2000';
    //     $config['max_width'] = '2024';
    //     $config['max_height'] = '2008';

    //     $this->load->library('upload');
    //     // Cargamos la nueva configuración
    //     $this->upload->initialize($config);
    //     //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
    //     if (!$this->upload->do_upload('userfile')) {

    //          return  array('error' => $this->upload->display_errors(), 'estado' =>FALSE);
    //     } else{
    //         return TRUE;
    //     }

    // }

    public function getEntry($permalink)
    {
        $data['entry'] = $this->news_model->getEntry($permalink)->row_array();
        $this->load->view('news/view_entry', $data);
    }

    public function entryRemove($id){
        $data['deleted_at'] = date("Y-m-d H:i:s");
        $result = $this->news_model->editar_registro($data, $id, 'entries');
        //$result = $this->productos_model->editar_categoria($data, $id);
         echo json_encode($result);

    }

    
}