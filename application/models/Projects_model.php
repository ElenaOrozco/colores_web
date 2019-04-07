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

    public function listProjects() {
    	$this->db->where("status", "PUBLISHED");
        $this->db->where("deleted_at", NULL);
        $this->db->order_by("id", "DESC");
        return $this->db->get('projects');
        
    }
}
