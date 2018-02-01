<?php

class Materi extends CI_Controller{

 function index()
    {
        $this->load->model('model_mapel');
        $data['mapel']=$this->model_mapel->index()->result();
        $data['title']="Tambah Materi";
        $this->load->view('back/materi/post',$data);
    }
    
    
    function do_upload()
    {
        $this->load->library('form_validation');
        $config['upload_path'] = './file/';
        $config['allowed_types'] = 'gif|jpg|mp4|3gp|flv|pdf|wmv
        |mv4|oth|png';
	    $config['max_size']	= '320000';
	   //$config['max_width']  = '1024';
	   //$config['max_height']  = '768';

        
        $this->load->library('upload', $config);
       
         $this->upload->do_upload('userfile1');
         $userfile1 = $this->upload->data();
        
         
         // script uplaod file kedua
         $this->upload->do_upload('userfile2');
         $userfile2 = $this->upload->data();
         
     
       

        $data=array(
            'nama_file'=>$userfile1['file_name'],
            'tipe_file'=>$userfile1['file_type'],
            'judul_materi'=>$this->input->post('nama_judul'),
            'deskripsi_materi'=>$this->input->post('deskripsi_materi'),
            'mapel_id'=>$this->input->post('nama_mapel'),
            'username'=>$this->session->userdata('username'),
             'role'=>$this->session->userdata('role'),
             'nama_gambar'=>$userfile2['file_name']
            );
        
     $this->db->insert('materi',$data);
        $this->session->set_flashdata('message', 'Data berhasil disimpan');
        redirect('admin/materi/lihat_materi');
               
    }
    function lihat_materi(){
         $this->load->model('model_materi');
         $data['title']="Data Materi";
         $data['materi']=$this->model_materi->get_mapel()->result();

        $this->load->view('back/materi/lihat_materi',$data);
    }

}