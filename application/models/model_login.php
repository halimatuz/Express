<?php
class Model_login extends CI_Model{
    
    
    
    function login($username,$password)
    {
        $chek=  $this->db->get_where('users',array('username'=>$username,'password'=>($password)));
        return $chek;
        
   }
    
    
    
}