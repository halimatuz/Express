<?php

class Video extends CI_Controller{

	function index(){
 		$this->load->model('model_mapel');
        $data['mapel']=$this->model_mapel->index()->result();
		$data['title']="Tambah Video";
		$this->load->view('back/video/post',$data);
	}
	 function do_upload()
    {
         
	    $config['upload_path'] = './file/';
		$config['allowed_types'] = 'mp4|3gp|flv';
		$config['max_size'] = '1000000';  
		$this->load->library('upload', $config);
        $this->upload->do_upload();
        $hasil=$this->upload->data();
     	
     	$data=array(
            'nama_file'=>$hasil['file_name'],
            'tipe_file'=>$hasil['file_type'],
            'judul_video'=>$this->input->post('nama_video'),
            'deskripsi_video'=>$this->input->post('deskripsi_video'),
            'mapel_id'=>$this->input->post('nama_mapel'),
            'username'=>$this->session->userdata('username'),
             'role'=>$this->session->userdata('role')
            );
        
        $this->db->insert('video',$data);
        
        redirect('admin/video/lihat_video');
              
    }
      function lihat_video(){
         $this->load->model('model_video');
         $data['title']="Data Video";
         $data['video']=$this->model_video->get_mapel()->result();

        $this->load->view('back/video/lihat_video',$data);
    }
}