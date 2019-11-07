<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class City_m extends CI_Model {

    public function get_province() {
        $this->db->select('city.id, '
                . 'city.name, '
                . 'city.province_id, '
                . 'province.name as province_name');
        $this->db->from('city');
        $this->db->join('province', 'city.province_id = province.id');
        $this->db->order_by('id', 'DESC');
        $data = $this->db->get();

        return $data->result();
    }

    public function store($data) {
        return $this->db->insert('city', $data);
    }

    public function get_by_id($id) {
        $this->db->where('id', $id);
        $data = $this->db->get('city');

        return $data->row();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('city', $data);
    }
    
    public function delete($id) {
        return $this->db->delete('city', ['id' => $id]);
    }
}
