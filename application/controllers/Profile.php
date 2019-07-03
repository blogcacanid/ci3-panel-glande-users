<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller{
    private $limit = 10;
    var $module_title = 'Profile';
    var $module_name = 'profile';
    var $module_menu = 'Profile';
    
    function __construct(){
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('tank_auth_groups','','tank_auth');
        $this->load->model(array(
            'M_Users_access'=>'users_access'
            ));
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }
    }

    function index(){
        $data = array(
                'pagetitle'     => $this->module_title,
                'halaman'       => $this->module_name,
                'module_menu'   => $this->module_menu,
                'menu'          => 'active',
                'list_icon'     => 'fa fa-users',
                'form_action1'  => site_url($this->module_name.'/search'),
                'form_action2'  => site_url($this->module_name.'/a-search'),
            );
        $data['user_id']	= $this->tank_auth->get_user_id();
        $data['username']	= $this->tank_auth->get_username();
        $data['qRecord']  = $this->users_access->get_by_id($this->tank_auth->get_user_id());
        $this->load->view('design/header'); //memanggil template header
        $this->load->view('profile/index', $data); //memanggil view welcome
        $this->load->view('design/footer'); //memanggil template footer
    }
    
}

