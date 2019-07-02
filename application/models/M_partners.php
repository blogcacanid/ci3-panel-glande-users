<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Partners extends CI_Model {
    
    var $table = 'patner';
    var $pkey = 'id_patner';

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

//    LIST
    function _get_list_query() {
        $this->db51 = $this->load->database('db51', true);
    }

    function _get_list_num_rows() {
        $this->db51 = $this->load->database('db51', true);
        $this->_get_list_query();
        $result = $this->db51->count_all_results($this->table);
        return $result;
    }

    function get_list($limit, $offset) {
        if ($offset > 0) {
            $offset = ($offset - 1) * $limit;
        }
        $this->_get_list_query();
        $this->db51->order_by('code ASC, action ASC');
        $result['rows'] = $this->db51->get($this->table, $limit, $offset);
        $result['num_rows'] = $this->_get_list_num_rows();
        return $result;
    }

    // SEARCH
    function _get_search_query() {
        $this->db51 = $this->load->database('db51', true);
//        $this->db51->select($this->select_list, FALSE);
        if (!empty($this->input->get('code', true))) { $this->db51->where('code',$this->input->get('code', true)); }
        if (!empty($this->input->get('name', true))) { $this->db51->like('name',$this->input->get('name', true)); }
        if (!empty($this->input->get('username', true))) { $this->db51->like('username',$this->input->get('username', true)); }
        if (!empty($this->input->get('ip', true))) { $this->db51->where('ip',$this->input->get('ip', true)); }
        if (!empty($this->input->get('port', true))) { $this->db51->where('port',$this->input->get('port', true)); }
        if (!empty($this->input->get('status', true))) { $this->db51->where('status',$this->input->get('status', true)); }
        if (!empty($this->input->get('for_report', true))) { $this->db51->where('for_report',$this->input->get('for_report', true)); }
    }

    function _get_search_num_rows() {
        $this->db51 = $this->load->database('db51', true);
        $this->_get_search_query();
        $result = $this->db51->count_all_results($this->table);
        return $result;
    }

    function get_search($limit, $offset) {
        if ($offset > 0) {
            $offset = ($offset - 1) * $limit;
        }
        $this->_get_search_query();
        $this->db51->order_by('code ASC, action ASC');
        $result['rows'] = $this->db51->get($this->table, $limit, $offset);
        $result['num_rows'] = $this->_get_search_num_rows();
        return $result;
    }

    public function add($data){
        $this->db50 = $this->load->database('db50', true);
        $this->db50->insert($this->table, $data);
        return $this->db50->insert_id();
    }

    public function get_by_id($id){
        $this->db51 = $this->load->database('db51', true);
        $this->db51->from($this->table);
        $this->db51->where($this->pkey,$id);
        $query = $this->db51->get();
        return $query->row();
    }

    public function edit($where, $data){
        $this->db50 = $this->load->database('db50', true);
        $this->db50->update($this->table, $data, $where);
        return $this->db50->affected_rows();
    }

    public function delete_by_id($id){
        $this->db50 = $this->load->database('db50', true);
        $this->db50->where($this->pkey, $id);
        $this->db50->delete($this->table);
    }

    function valid_unique($fields,$value){
        $this->db51 = $this->load->database('db51', true);
        $query = $this->db51->get_where($this->table, array($fields => $value));
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function export_xls(){
        $this->db51 = $this->load->database('db51', true);
//        $this->db51->select($this->select_export, FALSE);
        if (!empty($this->input->get('code', true))) { $this->db51->where('code',$this->input->get('code', true)); }
        if (!empty($this->input->get('name', true))) { $this->db51->like('name',$this->input->get('name', true)); }
        if (!empty($this->input->get('username', true))) { $this->db51->like('username',$this->input->get('username', true)); }
        if (!empty($this->input->get('ip', true))) { $this->db51->where('ip',$this->input->get('ip', true)); }
        if (!empty($this->input->get('port', true))) { $this->db51->where('port',$this->input->get('port', true)); }
        if (!empty($this->input->get('status', true))) { $this->db51->where('status',$this->input->get('status', true)); }
        if (!empty($this->input->get('for_report', true))) { $this->db51->where('for_report',$this->input->get('for_report', true)); }
        $this->db51->order_by('code', 'ASC');
        $query = $this->db51->get($this->table);
        if($query->num_rows() > 0)
            return $query->result_array();
        else
            return null;
    }

    function export_csv(){
        $this->db51 = $this->load->database('db51', true);
//        $this->db51->select($this->select_export, FALSE);
        if (!empty($this->input->get('code', true))) { $this->db51->where('code',$this->input->get('code', true)); }
        if (!empty($this->input->get('name', true))) { $this->db51->like('name',$this->input->get('name', true)); }
        if (!empty($this->input->get('username', true))) { $this->db51->like('username',$this->input->get('username', true)); }
        if (!empty($this->input->get('ip', true))) { $this->db51->where('ip',$this->input->get('ip', true)); }
        if (!empty($this->input->get('port', true))) { $this->db51->where('port',$this->input->get('port', true)); }
        if (!empty($this->input->get('status', true))) { $this->db51->where('status',$this->input->get('status', true)); }
        if (!empty($this->input->get('for_report', true))) { $this->db51->where('for_report',$this->input->get('for_report', true)); }
        $this->db51->order_by('code', 'ASC');
        $query = $this->db51->get($this->table);
        return $query;
    }




    
}
