<?php

class ActivityStat extends CI_Model{
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getThemeParkStat(){
        $start_date = date('Y-m-d'); 
        $this->db->select('*');
        $this->db->from('tm_stat');
        $this->db->where('location', 'en');
        $this->db->where('date >=', $start_date);
        $this->db->where('date <=', 'DATE_SUB(NOW(),INTERVAL 7 DAYS )');
        $query = $this->db->get();
        $result = $query->result();
        foreach ($result  as $key => $value) {
            $data['key'] =$value;
        }
        return $data;
    }
    public function getAttractionStat($id){
        $start_date = date('Y-m-d'); 
        $end_date = 'DATE_SUB(NOW(),INTERVAL 7 DAYS )';
        $this->db->select('*');
        $this->db->from('at_stat');
        $this->db->where('aid', $id);
        $this->db->where('date >=', $start_date);
        $this->db->where('date <=', $end_date);
        $query = $this->db->get();
        $result = $query->result();
        foreach ($result  as $key => $value) {
            $data['key'] =$value;
        }
        return $data;
    }
    public function insertThemeParkStat($data){
        $this->db->insert('tm_stat', $data);
    }
    public function insertAttractionStat($data) {
        $this->db->insert('at_stat', $data);
    }
    //test only
    public function getLastTm() {
        $this->db->select('*');
        $this->db->from('tm_stat');
        $query = $this->db->get();
        $result = $query->last_row();
        return $result;
    }
}
