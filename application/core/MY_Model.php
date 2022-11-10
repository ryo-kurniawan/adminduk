<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Model extends CI_Model {

    private $table;
    private $pk;

    public function __construct() {
        parent::__construct();
    }

    public function set_table($table = '', $pk = '') {
        $this->table = $table;
        $this->pk = $pk;
        return $this;
    }

    public function get_all() {
        $this->db->order_by($this->pk . ' desc');
        return $this->_get()->result();
    }

    public function get_all_filter() {
        if ($this->session->userdata('tahun_anggaran') == NULL) {
            $this->db->order_by($this->pk . ' desc');
            return $this->_get()->result();
        } else {
            $tahun = $this->session->userdata('tahun_anggaran');
            $this->db->where(array('tahun_anggaran' => $tahun));
            $this->db->order_by($this->pk . ' desc');
            return $this->_get()->result();
        }
    }

    public function _filter() {
        if ($this->session->userdata('filter_data') == 'Sudah SK') {
            $this->db->where("no_sk <> '-' and tahun_anggaran ='".$this->session->userdata('tahun_anggaran')."'");
            $this->db->order_by($this->pk . ' desc');
            return $this->_get()->result();
        } else if ($this->session->userdata('filter_data') == 'Belum SK') {
            $this->db->where("no_sk = '-' and tahun_anggaran ='".$this->session->userdata('tahun_anggaran')."'");
            $this->db->order_by($this->pk . ' desc');
            return $this->_get()->result();
        } else {
            $this->db->order_by($this->pk . ' desc');
            $this->db->where(array('tahun_anggaran' => $this->session->userdata('tahun_anggaran')));
            return $this->_get()->result();
        }
    }

    public function get_array() {
        return $this->_get()->result_array();
    }
    public function get_last_id() {
        $this->db->limit('1');
        $this->db->order_by($this->pk . ' desc');
        return $this->_get()->row();
    }

    public function get($id = '0') {
        $this->db->where($this->pk, $id);
        return $this->_get()->row();
    }

    public function get_by($param) {
        if (is_array($param)) {
            $this->db->where($param);
            return $this->_get()->row();
        }
        return FALSE;
    }

    public function get_many_by($param) {
        if (is_array($param)) {
            $this->db->where($param);
            return $this->get_all();
        }
        return FALSE;
    }
    
    public function get_join_where_id($table,$kondisi,$id){
        $this->db->join($table,$kondisi);
        $this->db->where(array($this->pk => $id));
        return $this->get_all();
    }
    
    public function get_join($table,$kondisi){
         $this->db->join($table,$kondisi);
        return $this->get_all();
    }

    public function insert($data = array()) {
        if ($this->db->insert($this->table, $data)) {
            return true;
        }
        return false;
    }
    
    public function insert_batch($data = array()) {
        if ($this->db->insert_batch($this->table, $data)) {
            return true;
        }
        return false;
    }

    public function insert_ignore($data = array()){
        $insert_query = $this->db->insert_string($this->table, $data);
        $insert_query = str_replace('INSERT INTO','INSERT IGNORE INTO',$insert_query);
        if ($this->db->query($insert_query)){
            return $this->db->insert_id();
        }
        return false;
    }

    public function delete($id = 0) {
        if ($this->db->delete($this->table, array($this->pk => $id))) {
            return true;
        }
        return false;
    }
    public function delete_by($by) {
        if ($this->db->delete($this->table, $by)) {
            return true;
        }
        return false;
    }

    public function simple_delete($id=0){
        if ($this->db->simple_query('delete FROM '.$this->table.' where '.$this->pk.'=' . $id)){
            return true;
        }
        return false;
    }

    public function update($id = 0, $data = array()) {
        $this->db->where(array($this->pk => $id));
        if ($this->db->update($this->table, $data)) {
            return true;
        }
        return false;
    }
    
     public function update_batch($data = array()){
        if ($this->db->update_batch($this->table, $data, $this->pk)){
            return true;
        }
        return false;
    }

    public function update_by($where = array(), $data = array()) {
        $this->db->where($where);
        if ($this->db->update($this->table, $data)) {
            return true;
        }
        return false;
    }

    protected function _get() {
        return $this->db->get($this->table);
    }

}

?>