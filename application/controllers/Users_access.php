<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_access extends CI_Controller {

    private $limit = 10;
    var $module_title = 'Users';
    var $module_name = 'users-access';
    var $module_menu = 'Users';

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('tank_auth_groups','','tank_auth');
        $this->load->model(array(
            'M_Users_access'=>'users_access'
            ));
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
//        }elseif (empty($this->tank_auth->get_userlevelid())){
//            redirect('auth/logout');
        }
    }

    public function index($offset=0){
        $data = array(
                'pagetitle'     => $this->module_title.' List',
                'halaman'       => $this->module_name,
                'module_menu'   => $this->module_menu,
                'menu'          => 'active',
                'list_icon'     => 'fa fa-users',
                'form_action1'  => site_url($this->module_name.'/search'),
                'form_action2'  => site_url($this->module_name.'/a-search'),
            );
            $result = $this->users_access->get_list($this->limit, $offset);
            $data['sSQL'] = $result['rows'];
            $data['num_results'] = $result['num_rows'];
            // load pagination library
            $this->load->library('pagination');
            $config = array(
                'base_url'          => site_url($this->module_name.'/index'),
                'total_rows'        => $data['num_results'],
                'per_page'          => $this->limit,
                'uri_segment'       => 3,
                'use_page_numbers'  => TRUE,
                'num_links'         => 5,
                'first_link'        => '<i class="fa fa-fast-backward" aria-hidden="true"></i>',
                'last_link'         => '<i class="fa fa-fast-forward" aria-hidden="true"></i>',
                'next_link'         => '<i class="fa fa-forward" aria-hidden="true"></i>',
                'prev_link'         => '<i class="fa fa-backward" aria-hidden="true"></i>',
                // Menyesuaikan untuk Twitter Bootstrap 3.2.0.
                'full_tag_open'     => '<ul class="pagination pagination-sm">',
                'full_tag_close'    => '</ul>',
                'num_tag_open'      => '<li>',
                'num_tag_close'     => '</li>',
                'cur_tag_open'      => '<li class="disabled"><li class="active"><a href="#">',
                'cur_tag_close'     => '<span class="sr-only"></span></a></li>',
                'next_tag_open'     => '<li>',
                'next_tag_close'    => '</li>',
                'prev_tag_open'     => '<li>',
                'prev_tag_close'    => '</li>',
                'first_tag_open'    => '<li>',
                'first_tag_close'   => '</li>',
                'last_tag_open'     => '<li>',
                'last_tag_close'    => '</li>',
            );
            $this->pagination->initialize($config);
            $data['pagination'] = $this->pagination->create_links();
        $this->load->view('design/header'); //memanggil template header
        $this->load->view($this->module_name.'/list',$data); //memanggil view dashbord/index
        $this->load->view('design/footer'); //memanggil template footer
    }
    
    public function view($id){
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }else{
            $data = array(
                'pagetitle'     => 'View '.$this->module_title.' # '.($id),
                'list_icon'     => 'fa fa-eye',
                'recid'         => $id
            );
            $data['qRecord']  = $this->users_access->get_by_id(($id));
            $this->load->view($this->module_name.'/view', $data);
        }
    }    
    
    public function edit_form($id){
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }else{
            $data = array(
                'pagetitle'     => 'Edit '.$this->module_title.' # '.($id),
                'list_icon'     => 'fa fa-pencil',
                'recid'         => $id
            );
            $data['qRecord']  = $this->users_access->get_by_id(($id));
            $this->load->view($this->module_name.'/edit_form', $data);
        }
    }    
    
    public function edit_record(){
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
        if($this->input->post('activated') == null || $this->input->post('activated') == ''){
            $data['inputerror'][] = 'activated';
            $data['error_string'][] = 'Activated is required';
            $data['status'] = FALSE;
        }
        if($this->input->post('banned') == null || $this->input->post('banned') == ''){
            $data['inputerror'][] = 'banned';
            $data['error_string'][] = 'Banned is required';
            $data['status'] = FALSE;
        }
        if($data['status'] === FALSE){
            echo json_encode($data);
            exit();
        }
        $data = array(
            'activated'     => $this->input->post('activated'),
            'banned'        => $this->input->post('banned'),
        );
        $this->users_access->edit(array('id' => ($this->input->post('id'))), $data);
        echo json_encode(array("status" => TRUE));
    }
    
    public function delete_form($id){
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }else{
            $data = array(
                'pagetitle'     => 'Delete '.$this->module_title.' # '.($id),
                'list_icon'     => 'fa fa-trash',
                'form_delete'   => site_url($this->module_name.'/delete_record'),
                'recid'         => $id
            );
            $data['qRecord']  = $this->users_access->get_by_id(($id));
            $this->load->view($this->module_name.'/delete_form', $data);
        }
    }    
    
    public function delete_record(){
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }else{
            $this->users_access->delete_by_id(($this->input->post('id')));
            $this->session->set_flashdata('message','
                    <div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-check"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <b>Delete Record.</b> Data successfully deleted.
                    </div>
                ');
            redirect($this->module_name);
        }
    }


    
    
}

