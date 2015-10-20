<?php

class Charts extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('gcharts');
        $this->load->model('ActivityStat');
    }
    
    function tm_chart(){
         $this->gcharts->load('LineChart');

        $this->gcharts->DataTable('Stocks')
                      ->addColumn('number', 'Count', 'count')
                      ->addColumn('number', 'Official', 'official');
        
        $stat = $this->ActivityStat->getThemeParkStat();

        for($a = 1; $a < 25; $a++)
        {
            $data = array(
                $a,             //Count
                rand(800,1000), //Line 1's data
                rand(800,1000)  //Line 2's data
            );

            $this->gcharts->DataTable('Stocks')->addRow($data);
        }

        $config = array(
            'title' => 'Theme Park Activities'
        );

        $this->gcharts->LineChart('Stocks')->setConfig($config);

        $this->load->view('gcharts/line_chart_basic');
    }

}