<?php

class add_update_model extends CI_Model {
	
	function get_bag_levels() {
		$this->db->select('Level_Name');
		$query = $this->db->get('bag_level');

		return $data = $query->result(); 				
	} 

	function add_bag_level() {
		$this->db->where();
	}
}