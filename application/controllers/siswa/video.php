<?php

class Video extends CI_Controller{

	function index(){
		$this->load->model('model_video');
		$data['title']="List Video";
		$data['video']=$this->model_video->index()->result();
		$this->load->view('front/siswa/video/index',$data);
	}

}