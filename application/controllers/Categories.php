<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct() {
        
        parent::__construct();
        $this->load->model('category_model');  
        
    }

     public function index()
    {
        $data['categorias'] = $this->category_model->listar_categorias();
        $this->load->view('category/v_categorias', $data);
    }

    public function agregar_categoria(){
        //Cargar imagen
        if($_FILES['userfile']['name']){
            $this->do_upload();
            $subir['imagen'] = $_FILES['userfile']['name'];


            
        }

        //Insertar categoria
        $subir['nombre'] = $this->input->post('nombre');
        $subir['descripcion'] = $this->input->post('descripcion');
       
        $tabla= 'catCategorias';
        $campo = 'nombre';
        $result = $this->category_model->agregar_registro($subir, $tabla, $campo);  

        $mensaje = $this->mensaje_flash($result['type'], $result['mensaje']);
        $this->session->set_flashdata('correcto', $mensaje);
        

        redirect('/categories','refresh');

    }

    public function mensaje_flash($tipo, $mensaje){
        $clase = ($tipo == 'error')? 'alert-danger': 'alert-success';
        $tipo_msj = ($tipo == 'error')? 'Error! ': 'Exito! ';
        return  '<div class="alert '.$clase.' alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>'. $tipo_msj .'</strong>'.$mensaje.'
                    </div>';
         
    }

    public function datos_categoria(){
        $idCategoria =$this->input->post('idCategoria');

        echo json_encode( $this->category_model->datos_registro($idCategoria, 'catCategorias') );
    }

    public function editar_categoria(){
        
        $msj = '';
        if($_FILES['userfile']['name']){

            $result = $this->do_upload();
            $file_info = $this->upload->data();
            $subir['imagen'] = $file_info['file_name'];
            $tipo = $result['tipo'];
            $msj  .= $result['mensaje'];
            
        }
                
        $subir['nombre'] = $this->input->post('nombre_mod');
        $subir['descripcion'] = $this->input->post('descripcion_mod');
        $result = $this->category_model->editar_registro($subir, $this->input->post('idCategoria_mod'), 'catCategorias');  

        $mensaje = $this->mensaje_flash($result['type'], $result['mensaje']);
        $this->session->set_flashdata('correcto', $mensaje);
        

        redirect('/categories','refresh');

    }

    public function eliminar_categoria(){
        $id = $this->input->post('idCategoria');
        $data['deleted_at'] = date("Y-m-d H:i:s");  
        $result = $this->category_model->editar_registro($data, $id, 'catCategorias'); 
        //$result = $this->productos_model->editar_categoria($data, $id); 
         echo json_encode($result);

    }


	
	
}