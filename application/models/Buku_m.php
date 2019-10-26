<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_m extends CI_Model {

    public function get_all() {
        $result = $this->db->query("select * from buku");
        return $result->result();
    }

    public function get() {
        $data = $this->db->get('buku');

        return $data->result_array();
    }

    public function get_by_id($id) {
        $data = $this->db->select('name, pengarang')->where('id', $id)->get('buku');
//        $this->db->where('id', $id);
//        $data = $this->db->get('buku');

        return $data->row_array();
    }

    public function store($data) {
        return $this->db->insert('buku', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('buku', $data);
    }

    public function delete($id) {
        $this->db->delete('buku', ['id' => $id]);
    }

}
