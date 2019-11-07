<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Province_m extends CI_Model {

    public function get(){
        $data = $this->db->get('province');
        
        return $data->result();
    }
}
