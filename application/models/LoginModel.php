
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_user($mail, $tel)
     {
         $this->db->select('*');
         $this->db->from('guest');
         $this->db->where('gmail', $mail);
         $this->db->where('gtel', $tel);
         $query = $this->db->get();
         $result = $query->result();
//          $sql = "select * from tbl_usrs where username = '" . $usr . "' and password = '" . md5($pwd) . "' and status = 'active'";
//          $query = $this->db->query($sql);
//          return $query->num_rows();
         return $result;
     }
}