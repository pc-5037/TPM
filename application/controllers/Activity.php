<?php

class Activity extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('ActivityStat');
    }
    
    function tm_chart(){
        $data['activitystat_list'] = $this->ActivityStat->getThemeParkStat(); 
        print_r($data);
//        $test = array();
//        $i= 0;
//        foreach ($activitystat as $data['activitystat_list']) {
//            $test[$i]= $activitystat->activitystat->uid;  
//            $i++;
//        }
        $i =0;
        $array= array();
        foreach ($data['activitystat_list'] as $value) {
            array_push($array, $value['date']);
            $i++;  
            print_r($value);
        }
      
        $now = date('MM-dd-yy');
         $this->gcharts->load('LineChart');
        $this->gcharts->DataTable('Stocks')
                      ->addColumn('date', 'Dates', 'dates')// 7 days
                      ->addColumn('number', '# of guests', 'official');// number of guest
                      //
            for($x = 0; $x < 7; $x++){
            if($data->activitystat->date == date_sub($now, $x)){
                $data[$x] += 1; 
            
            } 
             for($a = 0; $a < 7; $a++)//count 7 days
        {
            $data['chart'] = array(
                new jsDate(),             //put date here
                $a  //put number of guest in each date here
            );

            $this->gcharts->DataTable('Stocks')->addRow($data['chart']);
        }
            
            }
                        

        
//        for($a = 0; $a < 7; $a++)//count 7 days
//        {
//            $data = array(
//                new jsDate(2015, 10, 1+$a),             //put date here
//                rand(0,500)  //put number od=f guest in each date here
//            );
//
//            $this->gcharts->DataTable('Stocks')->addRow($data);
//        }

        $config = array(
            'title' => 'Theme Park Activities'
        );

        $this->gcharts->LineChart('Stocks')->setConfig($config);

//        $this->load->view('activity_view',$data);
    }
    function at_chart($id) {
        $data['atact'] = $this->ActivityStat->getAttractionStat($id); 
        $this->load->view('activity_view',$data,$array);
    }
}