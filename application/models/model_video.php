<?php

class Model_video extends CI_Model{


function get_mapel(){
  $this->db->select('*');
  $this->db->from('video');
  $this->db->join('mapel', 'id_mapel = mapel_id');
  $query = $this->db->get();
  return $query;
}
function total_rows() {
    return $this->db->get('video')->num_rows();
  }

  function index(){

	return $this->db->get('video');

}

}