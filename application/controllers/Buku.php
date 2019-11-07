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

    public function edit($id) {
        $data = $this->buku_m->get_by_id($id);

        $this->load->view('templates/header');
        $this->load->view('pages/buku/edit', ['data' => $data]);
        $this->load->view('templates/footer');
    }

    public function update() {
        $data = $this->input->post();
        
        $edit = [
            "name" => $data['name'],
            "penerbit" => $data['penerbit'],
            "pengarang" => $data['pengarang']
        ];
        
        $result = $this->buku_m->update($data['id'], $edit);
        
        if ($result) {
            redirect('buku');
        }
    }
    
    public function delete($id) {
        $result = $this->buku_m->delete($id);
        
        if ($result) {
            redirect('buku');
        }
    }
}
