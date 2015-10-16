<?php
class StatData extends CI_Model{
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insertGuestStat($data){
        $this->db->insert('tm_stat', $data);
    }
    

}