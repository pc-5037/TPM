<?php

class ActivityStat extends CI_Model{
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getThemeParkStat(){
        $start_date = date('Y-m-d H:i:s'); 
        $date = new DateTime('now');
        $end_date = date_sub($date,date_interval_create_from_date_string("7 days"));
        $end_date = date_format($date,"Y-m-d");
//        $qr = 'SELECT DATE(date) AS dates, SUM(quantity) AS total_visit
//               GROUP BY dates';
        $this->db->select('DATE(date) AS date, SUM(quantity) AS total_visit');
        $this->db->where('date <=', 'DATE_SUB(NOW(),INTERVAL 7 DAYS )');
        $this->db->where('location','en');
        $this->db->where('date <=', $start_date);
        $this->db->where('date >=', $end_date);
        $this->db->group_by('date');
        $this->db->from('themepark_attendance');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function getAttractionStat($id){
       $start_date = date('Y-m-d H:i:s'); 
        $date = new DateTime('now');
        $end_date = date_sub($date,date_interval_create_from_date_string("7 days"));
        $end_date = date_format($date,"Y-m-d");
//        $qr = 'SELECT DATE(date) AS dates, SUM(quantity) AS total_visit
//               GROUP BY dates';
        $this->db->select('DATE(date) AS date, SUM(quantity) AS total_visit');
        $this->db->where('date <=', 'DATE_SUB(NOW(),INTERVAL 7 DAYS )');
        $this->db->where('location',$id);
        $this->db->where('date <=', $start_date);
        $this->db->where('date >=', $end_date);
        $this->db->group_by('date');
        $this->db->from('attractions_attendance');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function insertThemeParkStat($data){
        $this->db->insert('themepark_attendance', $data);
    }
    public function insertAttractionStat($data) {
        $this->db->insert('attractions_attendance', $data);
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
