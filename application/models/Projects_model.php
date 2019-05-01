<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects_model extends MY_Model {
    public function __construct() {
        parent::__construct();
    }

    public function listAllProjects() {
        $this->db->where("deleted_at", NULL);
        $this->db->order_by("id", "DESC");
        return $this->db->get('projects');
        
    }

    public function listProjects($limit = 0) {
    	$this->db->where("status", "PUBLISHED");
        $this->db->where("deleted_at", NULL);
        if($limit){
            $this->db->limit($limit);
        }
        $this->db->order_by("id", "DESC");
        return $this->db->get('projects');
        
    }

    public function lastProjects($limit = 0) {
        $this->db->where("status", "PUBLISHED");
        $this->db->where("deleted_at", NULL);
        if($limit){
            $this->db->limit($limit);
        }
        $this->db->order_by("id", "DESC");
        return $this->db->get('projects');
        
    }

    
}
