<?php

class Model_room extends CI_Model{

	function index(){

  return $this->db->get('pertanyaan');

}
function get_user(){
  $this->db->select('*');
  $this->db->from('pertanyaan');
  $this->db->join('users', 'id_users = users_id');
  $query = $this->db->get();
  return $query;
}
function post(){

		

	}
	function get_kategori(){
		return $this->db->get('kategori');
	}
	function get_nama_kategori(){
		 $this->db->select('*');
 		 $this->db->from('pertanyaan');
  		$this->db->join('kategori', 'id_kategori = kategori_id');
  		$query = $this->db->get();
  		return $query;
	}
	function get_pertanyaan(){
		$this->db->select('*');    
		$this->db->from('pertanyaan');
		$this->db->join('users', 'id_users = users_id');
		$this->db->join('kategori', 'id_kategori = kategori_id');
		$query = $this->db->get();
		return $query;
	}

	function get_detail($id){
		$this->db->where('id_pertanyaan', $id);
		$this->db->select('*');    
		$this->db->from('pertanyaan');
		$this->db->join('users', 'id_users = users_id');
		$this->db->join('kategori', 'id_kategori = kategori_id');
		$query = $this->db->get();
		return $query;
	}

	function get_komentar($id){
		$this->db->where('pertanyaan_id', $id);
		$this->db->from('jawaban');
		$this->db->join('users', 'id_users = users_id');
	
		$query = $this->db->get();
		return $query;
	}

}