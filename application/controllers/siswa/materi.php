<?php

class Materi extends CI_Controller{




	function index(){
		$this->load->model('model_materi');
		$data['title']="Materi";
		$data['materi']=$this->model_materi->index()->result();
		$this->load->view('front/siswa/materi/index',$data);
	}
	function download(){
		$this->load->helper('download');
		$this->load->model('model_materi');
		$id=  $this->uri->segment(4);
		$materi=$this->model_materi->get_one($id)->result();

		foreach ($materi as $r) {
			echo force_download('file/'.$r->nama_file,NULL);
		}
		
	}
	
	    
}
