<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class News_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getNews($number) {
		$query = $this->db->select('n.*, l.name, l.power, m.username, m.email')
						->from('news as n')
						->join('members as m','m.id = n.author','LEFT')
						->join('members_level as l','m.level = l.id','LEFT')
						->limit($number)
						->order_by('n.date','ASC')
						->get();
		return $query->result_array();
	}
}