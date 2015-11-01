<?php

class Postdata extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('RegisterData');
        $this->load->model('activitystat');
    }
    
    function postuid($id){
        $this->RegisterData->insertUid($id);
    }
    function post_tm_stat($id,$location) {
        $date = date('Y-m-d'); 
        $time = date('H:i:s');
        $data = array(
                'uid' => $id,
                'location' => $location,
                'date' => $date,
                'time' => $time
            );
        $this->activitystat->insertThemeParkStat($data);       
    }
    
}
