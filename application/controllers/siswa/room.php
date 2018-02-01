<?php

class Room extends CI_Controller{

	function index(){
		$this->load->model('model_room');
		$data['title']="Q & A Room";
		$data['pertanyaan']=$this->model_room->get_pertanyaan()->result();
		
		$this->load->view('front/siswa/room/index' , $data);
	
	}

	function create(){
		$this->load->model('model_room');

		if(isset($_POST['submit'])){
		
		$data=array(
			'pertanyaan'=>$this->input->post('pertanyaan'),
			 'users_id'=>$this->session->userdata('id_users'),
			 'kategori_id'=>$this->input->post('nama_kategori')
			);
		
		$this->db->insert('pertanyaan',$data);
		
		redirect('siswa/room/index');
	}
	else{
		$data['title']="Q & A Room";
		$data['kategori']=$this->model_room->get_kategori()->result();
		$this->load->view('front/siswa/room/create' , $data);
	}
}

function detail(){

			 $this->load->model('model_room');
			 $id=  $this->uri->segment(4);
			 $data['title']="Q and A Room";
         	 $data['pertanyaan']=  $this->model_room->get_detail($id)->row_array();
         	 $data['jawaban']=  $this->model_room->get_komentar($id)->result();
         	 $this->load->view('front/siswa/room/detail',$data);
}

}