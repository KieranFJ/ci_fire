<?php

class Membership_model extends CI_Model {
    
    function validate() {
        
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $this->db->select('user_id');
        $query = $this->db->get('membership');
        
        if ($query->num_rows == 1) {
            return $query;
        }               
    }
}