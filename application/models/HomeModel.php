<?php
class HomeModel extends CI_Model{
	public function getData(){
	$query=$this->db->get('admin');
	return $query->result();
	}
}
?>