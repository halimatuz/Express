<?php

class Dashboard extends CI_Controller{




	function index(){
		$this->load->model('model_materi');
		$this->load->model('model_video');

		$data=array(
			'total_materi' 		=> $this->model_materi->total_rows(),
			'total_video'	 	=> $this->model_video->total_rows()
			);
		$this->load->view('back/dashboard',$data);
	}
	
	    
}
