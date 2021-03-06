<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class My_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }


    public function datos_registro($id, $tabla){
        $this->db->where('id', $id);
        return $this->db->get($tabla)->row_array();
    }


    public function agregar_registro($data, $tabla, $campo) {

        
        $retorno = array();
        $repetido =  $this->concepto_repetido($campo, strtoupper($data[$campo]), $tabla);
        
        if( !$repetido['ret'] ){
        	$this->db->trans_start();
        	//Ingresar datos 
            $this->db->insert($tabla, $data);
            $e = $this->db->error();
            $aff = $this->db->affected_rows();
            $last_query = $this->db->last_query();
            $registro = $this->db->insert_id();
            
            //Guardar en el historial
            if (!empty($registro)) {
                $this->log_new(array('Tabla' => $tabla, 'Data' => $data, 'id' => $registro));
            }
            if ($aff < 1) {
                if (empty($e)) {
                    $e = "No se realizaron cambios";
                }
                // si hay debug
                //$e .= "<pre>" . $last_query . "</pre>";
                $retorno['mensaje'] = $e;
               
            } else {
                $retorno['mensaje'] = "Registro Agregado";
                
            }

            $this->db->trans_complete();

	        $retorno['title'] = ($this->db->trans_status() === FALSE)? "Error": "Exito";
	        $retorno['type']  = ($this->db->trans_status() === FALSE)? "error": "success";
	        $retorno['id']  = $registro;
        
        } else{
            $retorno['mensaje'] = 'Registro repetido';
            $retorno['title'] = "Error";
            $retorno['type']  = 'error';
           
        }
        

        
        return $retorno;
        

    }

    public function editar_registro_no_repetido($data, $id, $tabla, $campo) {

    	$retorno = array();
        $repetido =  $this->concepto_repetido($campo, strtoupper($data[$campo]), $tabla);
        if( !$repetido['ret'] ){
        	$this->db->trans_start();
	        $this->log_save(array('Tabla' => $tabla, 'Data' => $data, 'id' => $id));
	        $this->db->update($tabla, $data, array('id' => $id));
	        $e = $this->db->_error_message();
	        $aff = $this->db->affected_rows();
	        $last_query = $this->db->last_query();
     

	        if ($aff < 1) {
	            if (empty($e)) {
	                $e = "No se realizaron cambios";
	            }
	            // si hay debug
	            $e .= "<pre>" . $last_query . "</pre>";
	            $retorno['mensaje'] = $e;   
	        } else {
	            $retorno['mensaje'] = "Registro Modificado";
	                 
	        }
	        $this->db->trans_complete();

	        $retorno['title'] = ($this->db->trans_status() === FALSE)? "Error": "Exito";
	        $retorno['type']  = ($this->db->trans_status() === FALSE)? "error": "success";
	        
        
        } else{
            $retorno['mensaje'] = 'Registro repetido';
            $retorno['title'] = "Error";
            $retorno['type']  = 'error';
           
        }
        
        
        return $retorno;
    
    }


    public function editar_registro($data, $id, $tabla) {

    	$retorno = array();
        
        $this->db->trans_start();
	        $this->log_save(array('Tabla' => $tabla, 'Data' => $data, 'id' => $id));
	        $this->db->update($tabla, $data, array('id' => $id));
	        $e = $this->db->_error_message();
	        $aff = $this->db->affected_rows();
	        $last_query = $this->db->last_query();
//      

	        if ($aff < 1) {
	            if (empty($e)) {
	                $e = "No se realizaron cambios";
	            }
	            // si hay debug
	            $e .= "<pre>" . $last_query . "</pre>";
	            $retorno['mensaje'] = $e;   
	        } else {
	            $retorno['mensaje'] = "Registro Modificado";
	                 
	        }
	    $this->db->trans_complete();

        $retorno['title'] = ($this->db->trans_status() === FALSE)? "Error": "Exito";
        $retorno['type']  = ($this->db->trans_status() === FALSE)? "error": "success";
	        
        
        return $retorno;
    
    }

    public function eliminar_registro($data, $id, $tabla) {

    	$retorno = array();
        
        $this->db->trans_start();
	        $this->log_save(array('Tabla' => $tabla, 'Data' => $data, 'id' => $id));
	        $this->db->update($tabla, $data, array('id' => $id));
	        $e = $this->db->_error_message();
	        $aff = $this->db->affected_rows();
	        $last_query = $this->db->last_query();
    
	
	    $this->db->trans_complete();
        $retorno  = ($this->db->trans_status() === FALSE)? -1: 1;
	        
        
        return $retorno;
    
    }



    public function concepto_repetido($campo, $str, $tabla) {
        $this->db->where('deleted_at', null);
        $this->db->where($campo, $str);
        $query = $this->db->get($tabla);
        if ($query->num_rows() > 0) {
            $concepto = $query->row();
            return array('ret' => true, 'concepto' => $concepto->$campo);
        } else
            return array('ret' => false, 'concepto' => 0);
    }

    public function do_upload() {
        
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3000';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008';
 
        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        if (!$this->upload->do_upload()) {
            return  array(
                'error' => $this->upload->display_errors(),
                'type'  => 'error',
                'mensaje' => 'Error al cargar imagen',
            );
           
        } else {
            return  array(
                'type'  => 'exito',
                'mensaje' => 'Imagen cargada',
            );
        //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS 
        //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
            // $file_info = $this->upload->data();
            // //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
            // //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
            // $this->_create_thumbnail($file_info['file_name']);
            // $data = array('upload_data' => $this->upload->data());
            
            
            //$this->load->view('productos/v_categorias', $data);
        }
        
    }

    public function log_save($cambios) {
            $this->load->model("control_usuarios_model");
            return $this->control_usuarios_model->log_save($cambios);
    }
    
    public function log_new($cambios) {
            $this->load->model("control_usuarios_model");
            return $this->control_usuarios_model->log_new($cambios);
    }
}