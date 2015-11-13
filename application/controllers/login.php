<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class login extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('loginmodel');
     }

     public function index()
     {
          //get the posted values
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

          //set validations
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('login_view');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                   //check as an admin
                    //check if username and password is correct
                    $usr_result = $this->loginmodel->get_user($username, $password);
                    if (!empty($usr_result))
                    {
                         //set the session variables
                         $sessiondata = array(
                              'id'=> $usr_result[0]->gid,
                              'uid'=> $usr_result[0]->guid,
                              'username' => $usr_result[0]->gname,
                              'type'=> 'guest',
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata('logged_in',$sessiondata);
                          redirect('history');
                    }elseif ($username == 'admin' && $password=='admin') {
                            $sessiondata = array(
                                      'username' => 'admin',
                                      'type'=> 'admin',
                                      'loginuser' => TRUE
                                 );
                                 $this->session->set_userdata('logged_in',$sessiondata);
                                  redirect('login/index');
                    }
                    else
                    {   
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('login/index');
                    }
               }
               else
               {
                    redirect('login/index');
               }
          }
     }
     
     public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_userdata(array('id' => '','uid' => '','username' => '','type' => '', 'loginuser' => ''));
        redirect('login/index');
    }
}