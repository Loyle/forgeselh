<?php

class Members_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function getAllMembers(){
		$query = $this->db->select('m.*')
		->from('members as m')
		->get();
		return $query->result_array();
	}
}

?>