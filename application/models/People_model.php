<?php 

class People_model extends CI_Model{

	public function getpeople($start, $limit){
		return $this->db->get('peoples', $start, $limit)->result();
	}

	public function countAllPeople(){
		return $this->db->get('peoples')->num_rows();
	}

}