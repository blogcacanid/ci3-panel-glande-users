<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Components extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function grids(){ // fungsi untuk memanggil page grids
        $this->load->view('design/header'); //memanggil template header
        $this->load->view('components/grids'); //memanggil view components/grids
        $this->load->view('design/footer'); //memanggil template footer
    }

    public function media(){ // fungsi untuk memanggil page media
        $this->load->view('design/header'); //memanggil template header
        $this->load->view('components/media'); //memanggil view components/media
        $this->load->view('design/footer'); //memanggil template footer
    }
}

