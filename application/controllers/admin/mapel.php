<?php

class Mapel extends CI_Controller{

	function lihat_mapel(){
		$this->load->model('model_mapel');
		$data['title']="Data Mapel";
		$data['mapel']=$this->model_mapel->index()->result();
		$this->load->view('back/mapel/index',$data);

	}
	function post(){
		if(isset($_POST['submit'])){
		$this->form_validation->set_rules('mapel','Mapel','required');
		$this->load->model('model_mapel');
		$this->model_mapel->post();
		$this->session->set_flashdata('message', 'Data berhasil disimpan');
		redirect('admin/mapel/lihat_mapel');
	}
	else{
		$data['title']="Tambah Mapel";
		$this->load->view('back/mapel/post',$data);
	}
	}
	 function delete()
    {
    	$this->load->model('model_mapel');
        $id=  $this->uri->segment(4);
        $this->model_mapel->delete($id);
        redirect('admin/mapel/lihat_mapel');
    }
}