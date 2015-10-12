<?php

class DropdownList extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
    
    function get_dropdown_list()
    {
    $this->db->from('attraction');
    $this->db->order_by('aname');
    $result = $this->db->get();
    $return = array();
    if($result->num_rows() > 0) {
    foreach($result->result_array() as $row) {
    $return[$row['aname']] = $row['aname'];
    }
    }

            return $return;

    }
}