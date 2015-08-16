<?php
class Attraction extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
    
    public function getAttractions(){
        $query = $this->db->get('attraction');
        return $query->result();
    }
    
    public function getAttraction($id){
        $this->db->select('*');
        $this->db->from('attraction');
        $this->db->where('aid', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function insertAttraction($data) {
        $this->db->insert('attraction', $data);
    }
    
    public function editAttraction($id,$data){
        $this->db->where('aid', $id);
        $this->db->update('attraction', $data);
    }
    
    public function deleteAttraction($id){
        $this->db->where('aid', $id);
        $this->db->delete('attraction');
    }
}
