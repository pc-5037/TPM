<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attractions extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('attraction');
    }
    
    function add_form() {
         $this->load->view('attraction_form');
    }
    
    function add() {  
        //Setting values for tabel columns
        $data = array(
        'aname' => $this->input->post('dname'),
        'description' => $this->input->post('desc'),
        'height_limit' => $this->input->post('hlimit')
            );
        //Transfering data to Model
        $this->attraction->insertAttraction($data);
        $data['message'] = 'Add Successfully';
        //Loading View
        $this->load->view('attraction_form', $data);
    }
    
    public function show()
    {
        $id = $this->uri->segment(3);
        $data['attraction_list']  = $this->attraction->getAttractions();  
        $data['an_attraction'] = $this->attraction->getAttraction($id);
        $this->load->view('attraction_view', $data);
    }
    
     function delete(){
        $id = $this->uri->segment(3);
        $this->attraction->deleteAttraction($id);
        redirect('/attractions/show');
    }
    
     function show_detail_form(){
        $id = $this->uri->segment(3);
        $data['attraction_list']  = $this->attraction->getAttractions();  
        $data['an_attraction'] = $this->attraction->getAttraction($id);
        $this->load->view('attraction_edit_form',$data);
    }
    
    function edit(){
    $id= $this->input->post('did');
    $data = array(
            'aname' => $this->input->post('dname'),
            'description' => $this->input->post('desc'),
            'height_limit' => $this->input->post('hlimit')
        );
    $this->attraction->editAttraction($id,$data);
    redirect('/attractions/show');

    }
}
