<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_model extends MY_Model {

    public function getEntries(){
    	$this->db->where('status', 'PUBLISHED');
    	$this->db->where('deleted_at', null);
        $this->db->order_by('date DESC');
        return $this->db->get('entries');
    }

    public function getAllEntries(){
        
        $this->db->where('deleted_at', null);
        $this->db->order_by('date DESC');
        return $this->db->get('entries');
    }

    public function insert($table, $data){
        return $this->db->insert($table, $data);
    }

    public function getEntry($permalink){
        $this->db->where('permalink', $permalink);
        return $this->db->get('entries');
    }

    public function lastPost($limit){
    	$this->db->where('status', 'PUBLISHED');
    	$this->db->where('deleted_at', null);
        $this->db->order_by('id DESC');
        $this->db->limit($limit);
        return $this->db->get('entries');
    }
}