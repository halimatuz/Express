<?php

class Model_mapel extends CI_Model{

function index(){

	return $this->db->get('mapel');

}
	function post(){

		$data=array(
			'nama_mapel'=>$this->input->post('nama_mapel')
			);
		$this->db->insert('mapel',$data);

	}
	function delete($id){
		 $this->db->where('id_mapel',$id);
        $this->db->delete('mapel');
	}
	
}