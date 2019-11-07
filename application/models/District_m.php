<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class District_m extends CI_Model {

    public function get_detail(){
        $this->db->select('district.id, '
                . 'district.name, '
                . 'district.city_id, '
                . 'city.name as city_name, '
                . 'city.province_id, '
                . 'province.name as province_name');
        $this->db->from('district');
        $this->db->join('city', 'district.city_id = city.id', 'right');
        $this->db->join('province', 'city.province_id = province.id');
        $data = $this->db->get();
        
        return $data->result();
    }

}
