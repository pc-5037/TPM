<?php

class Activity extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('ActivityStat');
    }
    
    function tm_chart(){
        $data['activitystat'] = $this->ActivityStat->getThemeParkStat(); 
//        print_r($data);
        $start_date = new DateTime('now');
        $end_date = date_sub($start_date,date_interval_create_from_date_string("7 days"));
        $end_date = date_format($start_date,"Y-m-d");
//        print_r($end_date);
        $this->load->view('activity_view');
    }
    function at_chart($id) {
        $data['atact'] = $this->ActivityStat->getAttractionStat($id); 
        print_r($data);
//        $this->load->view('activity_view',$data,$array);
    }
}