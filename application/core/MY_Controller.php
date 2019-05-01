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


    function string_sanitize($string, $force_lowercase = true, $anal = false) {
    $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
                   "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
                   "â€”", "â€“", ",", "<", ".", ">", "/", "?");
    $clean = trim(str_replace($strip, "", strip_tags($string)));
    $clean = preg_replace('/\s+/', "-", $clean);
    $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;
    return ($force_lowercase) ?
        (function_exists('mb_strtolower')) ?
            mb_strtolower($clean, 'UTF-8') :
            strtolower($clean) :
        $clean;
}


    function eliminar_tildes($cadena){

    //Codificamos la cadena en formato utf8 en caso de que nos de errores
    $cadena = utf8_encode($cadena);

    //Ahora reemplazamos las letras
    $cadena = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $cadena
    );

    $cadena = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $cadena );

    $cadena = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $cadena );

    $cadena = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $cadena );

    $cadena = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $cadena );

    $cadena = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C'),
        $cadena
    );

    return $cadena;
}

    function limpiarCaracteresEspeciales($string ){
     $string = htmlentities($string);
     $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
     $string = $this->eliminar_tildes($string);
     return $string;
    }
    public function do_upload($url_anterior,  $file = 'userfile')
    {
        $dir = $file == 'userfile' ? './uploads/' :'./uploads/before';
        $config['upload_path']          = $dir; 
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 900;
        $config['max_width']            = 1999;
        $config['max_height']           = 1024;

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

