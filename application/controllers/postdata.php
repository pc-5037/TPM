<?php

class Postdata extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('RegisterData');
        $this->load->model('StatData');
    }
    
    function postuid($id){
        $this->RegisterData->insertUid($id);
    }
    function addstat($id,$location) {
        $date = date('Y-m-d'); 
        $time = date('H:i:s');
//        $entrance = 'en';
        $data = array(
                'uid' => $id,
                'location' => $location,
                'date' => $date,
                'time' => $time
            );
        $this->StatData->insertGuestStat($data);
//        if($location == $entrance){
//        $this->guest->changeStatus($id,TRUE);    
//        }else{
//        $this->guest->changeStatus($id,FALSE);    
//        }
        
    }
    
}
