<?php

class Auth extends CI_Controller{

	function login(){
	    	$this->load->model('model_login');
    
        if(isset($_POST['submit'])){
        
            
            // proses login disini
            $username   =   $this->input->post ('username');
            $password   =   $this->input->post('password');

            $hasil=  $this->model_login->login($username,$password);
            $coba=  $this->model_login->login($username,$password)->row_array();
           

            if($hasil->num_rows() ==1)
            {
               $data=array(
                    'username'=>$username,
                    'role'=>$coba['role'],
                    'id_users'=>$coba['id_users']
                );
               
               $this->session->set_userdata($data);
         if ($this->session->userdata('role') == "admin"){redirect('admin/dashboard');}
         if ($this->session->userdata('role') == "siswa"){redirect('siswa/dashboard');}
             }

            else{
                redirect('admin/auth/login');
           		 }
        }
        


              else{
            $this->load->view('back/auth/form_login');
      
        }
        }
    

        function create(){
		$data['title']="Tambah User";
		$this->load->view('back/auth/create_user',$data);

	}
	function view_user(){
		$data['title']="Data User";
		$this->load->view('back/auth/view_user',$data);
	}
  
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}