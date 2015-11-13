<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class history extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->model('HistoryModel');

     }

     public function index()
     {
         $uid = $this->session->userdata['logged_in']['uid'];
//         print_r($this->session->userdata['logged_in']);
         $history['result'] = $this->HistoryModel->getHistory($uid);
//         print_r($history);
         $this->load->view('history_view',  $history);
  
     }
}