<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiles extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('guest');
    }
public function index()
    {
        $id = $this->session->userdata['logged_in']['id'];
//        $data['guest_list']  = $this->guest->getGuests();  
        $data['a_guest'] = $this->guest->getGuest($id);
//        print_r($data);
        $this->load->view('profile_view', $data);
    }
    
    function show_detail_form(){
        $id = $this->uri->segment(3);
        $data['guest_list']  = $this->guest->getGuests();  
        $data['a_guest'] = $this->guest->getGuest($id);
        $this->load->view('personal_edit_form',$data);
    }
    
    function edit(){
    $id= $this->input->post('gid');
    $data = array(
            'gname' => $this->input->post('gname'),
            'gmail' => $this->input->post('gmail'),
            'gtel' => $this->input->post('gtel')
        );
    $this->guest->editGuest($id,$data);
    redirect('/profiles/index');

    }
}

