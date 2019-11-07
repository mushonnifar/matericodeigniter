<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class City extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('city_m');
        $this->load->model('province_m');
        $this->load->helper('form');
    }

    public function get_province() {
        $data = $this->city_m->get_province();

        echo '<pre>';
        print_r($data);
    }

    public function index() {
        $data = $this->city_m->get_province();
        $this->load->view('templates/header');
        $this->load->view('pages/city/index', ['buku' => $data]);
        $this->load->view('templates/footer');
    }

    public function create() {
        $province = $this->province_m->get();
        $this->load->view('templates/header');
        $this->load->view('pages/city/create', ['provinsi' => $province]);
        $this->load->view('templates/footer');
    }

    public function store() {
        $data = $this->input->post();

        $result = $this->city_m->store($data);

        if ($result) {
            redirect('city');
        }
    }

    public function edit($id) {
        $city = $this->city_m->get_by_id($id);
        $province = $this->province_m->get();

        $this->load->view('templates/header');
        $this->load->view('pages/city/edit', ['city' => $city, 'provinsi' => $province]);
        $this->load->view('templates/footer');
    }

    public function update() {
        $data = $this->input->post();

        $edit = [
            "name" => $data['name'],
            "province_id" => $data['province_id'],
        ];

        $result = $this->city_m->update($data['id'], $edit);

        if ($result) {
            redirect('city');
        }
    }

    public function delete($id) {
        $result = $this->city_m->delete($id);
        
        if ($result) {
            redirect('city');
        }
    }
}
