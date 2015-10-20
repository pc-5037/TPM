<?php

class ActivityStat extends CI_Model{
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getThemeParkStat(){
        $this->db->select('*');
        $this->db->from('tm_stat');
        $this->db->where('location', 'en');
        $this->db->where('date', 'en');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
}
