<?php

class Activity extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('ActivityStat');
        $this->load->model('Attraction');
    }
    
    function tm_chart(){
        $data['activitystat'] = $this->ActivityStat->getThemeParkStat(); 
        $data['name'] = 'Theme park Activity';
//        print_r($data);       
        $this->load->view('activity_view',$data);
    }
    function at_chart($id) {
        $data['activitystat'] = $this->ActivityStat->getAttractionStat($id); 
        $result = $this->Attraction->getAttraction($id);
        $data['name'] = $result[0]->aname." Activity";
//        print_r($result[0]->aname);
        $this->load->view('activity_view',$data);
    }
}