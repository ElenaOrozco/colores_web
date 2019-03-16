<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category_model extends MY_Model {
    public function __construct() {
        parent::__construct();
    }

    public function listar_categorias() {
        $this->db->where("deleted_at", NULL);
        $this->db->order_by("id", "DESC");
        return $this->db->get('catCategorias');
        
    }
}
