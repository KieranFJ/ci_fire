<?php

class add_update_model extends CI_Model {
	
    function get_bag_levels() {
        $this->db->select('Level_Name');
        $query = $this->db->get('bag_level');

        return $query->result(); 				
    } 

    function add_bag_level() {
        
        $data = array(
          'Level_Name' => $this->input->post('levelName'),
          'Level_No_Items' => $this->input->post('noItems'),
          'Level_Desc' => $this->input->post('description')
        );
        
        //check if entries already exists
        //true return error
        //false insert data
        
        $this->db->select('Level_Name');
        $this->db->where('Level_Name', $data['Level_Name']);
        $query = $this->db->get('bag_level');
        
        if($query->num_rows == 0)
        {
            $this->db->insert('bag_level', $data);
            
            return TRUE;
        } else {
            return FALSE;
        }
    }
}