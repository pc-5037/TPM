<?php

class HistoryModel extends CI_Model{
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getHistory($uid){
    $this->db->select('attraction.aname,attractions_attendance.date');
    $this->db->from('attractions_attendance');
    $this->db->join('attraction', 'attractions_attendance.location = attraction.aid', 'inner'); 
    $this->db->order_by('date', 'DESC');
    $this->db->where('uid',$uid);
//    $this->db->select('attractions_attendance.date, attraction.aname')
//        ->from('attractions_attendance')
//        ->join('attraction', 'attractions_attendance.location = attraction.aid');
    $query = $this->db->get();
    return $query->result_array();
    }
}
