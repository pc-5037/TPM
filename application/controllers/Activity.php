<?php

class Activity extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('dropdownlist');
    }
    
    function index(){
        $data['attr_list'] = $this->dropdownlist->get_dropdown_list();
        $this->load->view('activity_dropdown', $data); 
    }

}