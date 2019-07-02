<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Users_access extends CI_Model {
    
    var $table = 'users';
    var $pkey = 'id';

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

//    LIST
    function _get_list_query() {
        $this->dba = $this->load->database('dba', true);
    }

    function _get_list_num_rows() {
        $this->dba = $this->load->database('dba', true);
        $this->_get_list_query();
        $result = $this->dba->count_all_results($this->table);
        return $result;
    }

    function get_list($limit, $offset) {
        if ($offset > 0) {
            $offset = ($offset - 1) * $limit;
        }
        $this->_get_list_query();
        $this->dba->order_by('username ASC, email ASC');
        $result['rows'] = $this->dba->get($this->table, $limit, $offset);
        $result['num_rows'] = $this->_get_list_num_rows();
        return $result;
    }

    public function add($data){
        $this->dba = $this->load->database('dba', true);
        $this->dba->insert($this->table, $data);
        return $this->dba->insert_id();
    }

    public function get_by_id($id){
        $this->dba = $this->load->database('dba', true);
        $this->dba->from($this->table);
        $this->dba->where($this->pkey,$id);
        $query = $this->dba->get();
        return $query->row();
    }

    public function edit($where, $data){
        $this->dba = $this->load->database('dba', true);
        $this->dba->update($this->table, $data, $where);
        return $this->dba->affected_rows();
    }

    public function delete_by_id($id){
        $this->dba = $this->load->database('dba', true);
        $this->dba->where($this->pkey, $id);
        $this->dba->delete($this->table);
    }

    function valid_unique($fields,$value){
        $this->dba = $this->load->database('dba', true);
        $query = $this->dba->get_where($this->table, array($fields => $value));
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    
}
