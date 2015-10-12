<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guests extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('guest');
        $this->load->model('registerdata');
    }
    
        function add_form() {
         $data['uid']= $this->registerdata->getLastInserted();
         $this->load->view('guest_form',$data);
    }
    
    function add() {   
            $data = array(
                'guid' => $this->input->post('guid'),
                'gname' => $this->input->post('gname'),
                'gmail' => $this->input->post('gmail'),
                'gtel' => $this->input->post('gtel')
            );
            //Transfering data to Model
            $this->guest->insertGuest($data);
            $data['message'] = 'Data Inserted Successfully';
            //Loading View
            $this->load->view('guest_form', $data);
    }
    
    public function show()
    {
        $id = $this->uri->segment(3);
        $data['guest_list']  = $this->guest->getGuests();  
        $data['a_guest'] = $this->guest->getGuest($id);
        $this->load->view('guest_view', $data);
    }
    function delete(){
        $id = $this->uri->segment(3);
        $this->guest->deleteGuest($id);
        redirect('/guests/show');
    }
    
    function show_detail_form(){
        $id = $this->uri->segment(3);
        $data['guest_list']  = $this->guest->getGuests();  
        $data['a_guest'] = $this->guest->getGuest($id);
        $this->load->view('guest_edit_form',$data);
    }
    
    function edit(){
    $id= $this->input->post('gid');
    $data = array(
            'gname' => $this->input->post('gname'),
            'gmail' => $this->input->post('gmail'),
            'gtel' => $this->input->post('gtel')
        );
    $this->guest->editGuest($id,$data);
    redirect('/guests/show');

    }
    
}
