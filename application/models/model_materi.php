<?php

class Model_materi extends CI_Model{

function index(){
  
  return $this->db->get('materi');

}
function get_mapel(){
  $this->db->select('*');
  $this->db->from('materi');
  $this->db->join('mapel', 'id_mapel = mapel_id');
  $query = $this->db->get();
  return $query;
}
function total_rows() {
    return $this->db->get('materi')->num_rows();
  }
    function get_one($id)
    {
        $param  =   array('id_materi'=>$id);
        return $this->db->get_where('materi',$param);
    }
}