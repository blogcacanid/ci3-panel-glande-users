<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Glande extends CI_Controller {
    public function index(){
        $this->load->view('view_glande');
    }
}
