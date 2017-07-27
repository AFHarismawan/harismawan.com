<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_message extends CI_Model {

    public function get_all() {
        $query = $this->db->get('personal_message');
        return $query->result();
    }
    
    public function add($data) {
        return $this->db->insert('personal_message', $data);
    }
}