<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('design/header'); //memanggil template header
        $this->load->view('dashboard/index'); //memanggil view dashbord/index
        $this->load->view('design/footer'); //memanggil template footer
    }
}

