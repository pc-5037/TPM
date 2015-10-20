<?php
class RegisterData extends CI_Model{
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insertUid($uid){
        $data = array('ruid' => $uid);
        $this->db->insert('registerdata',$data);
//        return getLastInserted();
    }
    
    public function getLastInserted() {
        $this->db->select('ruid');
        $this->db->from('registerdata');
        $query = $this->db->get();
        $result = $query->last_row();
        $ruid = $result->ruid;
        return $ruid;
    }
}