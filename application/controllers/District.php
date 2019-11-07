<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class District extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('district_m');
    }

    public function get_detail(){
        $data = $this->district_m->get_detail();
        
        echo '<pre>';
        print_r($data);
    }
}
