<?php

class Guest extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getGuests(){
        $query = $this->db->get('guest');
        return $query->result();
    }
    
    public function getGuest($id){
        $this->db->select('*');
        $this->db->from('guest');
        $this->db->where('gid', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function insertGuest($data) {
        $this->db->insert('guest', $data);
    }
    
    public function editGuest($id,$data){
        $this->db->where('gid', $id);
        $this->db->update('guest', $data);
    }
    
    public function deleteGuest($id){
        $this->db->where('gid', $id);
        $this->db->delete('guest');
    }
    
    public function changeStatus($uid,$status){
        $this->db->set('status', $status);
        $this->db->where('guid', $uid);
        $this->db->update('guest');
    }

}