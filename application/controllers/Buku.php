<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('buku_m');
    }

    public function index() {
        $data = $this->buku_m->get();
        $this->load->view('templates/header');
        $this->load->view('pages/buku/index', ['buku' => $data]);
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->view('templates/header');
        $this->load->view('pages/buku/create');
        $this->load->view('templates/footer');
    }

    public function store() {
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('pages/buku/create');
            $this->load->view('templates/footer');
        }
        $data = $this->input->post();

        $result = $this->buku_m->store($data);

        if ($result) {
            redirect('buku');
        }
    }

    public function coba_helper() {
        $this->load->helper('convert');

        echo month_ina('09');
    }

    public function get_data_regular() {
        $result = $this->buku_m->get_all();

        echo '<pre>';
        print_r($result);
    }

    public function get_data() {
        $result = $this->buku_m->get();

        echo '<pre>';
        print_r($result);
    }

    public function find($id) {
        $result = $this->buku_m->get_by_id($id);

        echo '<pre>';
        print_r($result);
    }

    public function insert() {
        $data = [
            "name" => "Belajar Query Builder",
            "penerbit" => "PT. SISI",
            "pengarang" => "Mushonnif"
        ];

        $this->buku_m->store($data);
    }

    public function update($id) {
        $data = [
            "pengarang" => "Ahmad"
        ];

        $this->buku_m->update($id, $data);
    }

    public function delete($id) {
        $this->buku_m->delete($id);
    }

}
