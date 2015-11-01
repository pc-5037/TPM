<?php

class test extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('guest');
        $this->load->model('activitystat');
    }
    
    public function testinsertGuests(){
        $data = array(         
            'guid'=>'33ee5f00',
            'gname'=>'Pakapol Duangdee',
            'gmail'=>'Duangdee@mail.com',
            'gtel'=>'0952238845');
        $exp_re = array(         
            'guid'=>'33ee5f00',
            'gname'=>'Pakapol Duangdee',
            'gmail'=>'Duangdee@mail.com',
            'gtel'=>'0952238845');
        $this->guest->insertGuest($data);
        $this->unit->run($this->guest->insertGuest($data),$exp_re,'insertGuest');
        $this->load->view('test_view');
    }
       
        public function testgetguest(){
        $exp_re = array(
            'gid'=>'4',
            'guid'=>'00ee4535',
            'gname'=>'FaiFai',
            'gmail'=>'fai@mail.com',
            'gtel'=>'1234567891 ',
            'status'=>'0');
        $this->unit->run($this->guest->getGuest('4'),$exp_re,'getGuest');
        $this->load->view('test_view');
    }
    
    public function testinserttm() {
        $date = date('Y-m-d'); 
        $time = date('H:i:s');
        $data['uid']='NN3M56OU';
        $data['location']='en';
        $data['date']=$date;
        $data['time']=$time;
        $this->activitystat->insertThemeParkStat($data);
        print_r($data);
        $result['result'] = $this->activitystat->getLastTm();
        print_r($result);
//        $this->load->view('test_view_chart',$data,$result);
    }
    public function testinsertat() {
        
    }
    public function testgettm() {
        
    }
    public function testgetat() {
        
    }
}