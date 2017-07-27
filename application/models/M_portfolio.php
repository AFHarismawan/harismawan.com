<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_portfolio extends CI_Model {

    public function get_all() {
        $query = $this->db->get('personal_portfolio');
        return $query->result();
    }
    
    public function get_feature() {
        $query = $this->db->get('personal_feature');
	return $query->result();
    }
    
    public function get_img() {
        $query = $this->db->get('personal_img');
	return $query->result();
    }
}
