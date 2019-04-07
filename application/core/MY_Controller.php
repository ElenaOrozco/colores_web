<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    function __construct()
    {
        parent::__construct();
         $this->load->library('upload');
    }

    public function mensaje_flash($tipo, $mensaje)
    {
        $clase = ($tipo == 'error')? 'alert-danger': 'alert-success';
        $tipo_msj = ($tipo == 'error')? 'Error! ': 'Exito! ';
        return  '<div class="alert '.$clase.' alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>'. $tipo_msj .'</strong>'.$mensaje.'
                    </div>';

    }

    private function getErrorUpload($error){
        $errors = array(
            0 => 'There is no error, the file uploaded with success',
            1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
            2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
            3 => 'The uploaded file was only partially uploaded',
            4 => 'No file was uploaded',
            6 => 'Missing a temporary folder',
            7 => 'Failed to write file to disk.',
            8 => 'A PHP extension stopped the file upload.',
        );

        return $errors[$error];
    }

    // public function subir_imagen($url_anterior){
    //     //Verificar subida
    //     $error = $_FILES['userfile']['size'];
    //     if($error && $error != 4){
    //         $msj = $this->getErrorUpload($error);
    //         $mensaje = $this->mensaje_flash('error', $msj);
    //         $this->session->set_flashdata('correcto', $mensaje);
    //         redirect($url_anterior,'refresh');
    //     }
    // }

    public function do_upload($url_anterior,  $file = 'userfile')
    {
        $dir = $file == 'userfile' ? './uploads/' :'./uploads/before';
        $config['upload_path']          = $dir; 
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 300;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        // $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload($file))
        {
            $errores = array('error' => $this->upload->display_errors());
            // var_dump($errores);
            //$this->load->view('upload_form', $error);
            $msj = "";
            foreach ($errores as $error) {
                $msj .= "$error <br>";
            }
            $mensaje = $this->mensaje_flash('error', $msj);
            $this->session->set_flashdata('correcto', $mensaje);
            redirect($url_anterior,'refresh');
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            return $data;
        }
    }




}

