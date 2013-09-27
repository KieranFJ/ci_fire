<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class add_update_model extends CI_Model 
{
	
    function get_bag_levels() 
    {
        $this->db->select('Level_Name');
        $query = $this->db->get('bag_level');
        
        if ($query->num_rows == 0) 
        {
            return FALSE;
        } else {
            return $query->result(); 
        }        				
    } 

    function add_bag_level() 
    {
        
        $data = array(
          'Level_Name' => $this->input->post('levelName'),
          'Level_No_Items' => $this->input->post('noItems'),
          'Level_Desc' => $this->input->post('description')
        );
                
        $this->db->select('Level_Name');
        $this->db->where('Level_Name', $data['Level_Name']);
        $query = $this->db->get('bag_level');
        
        if($query->num_rows == 0) 
        {
            $this->db->insert('bag_level', $data);            
            return $message = array(
                    'message' => "Entry created",
                    'type' => 1);
        } else {
            return $message = array(
                'message' => "Duplicate Entry, check your Level Name",
                'type' => 0);
        }
    }
    
    function update_bag_level() 
    {
        $data = array(
            'Level_ID' => $this->input->post('levelID'),
            'Level_Name' => $this->input->post('levelName'),
            'Level_No_Items' => $this->input->post('noItems'),
            'Level_Desc' => $this->input->post('description')
        );
        
        $this->db->where('Level_ID', $data['Level_ID']);
        $query = $this->db->update('bag_level', $data);
        
        if($query === TRUE) 
        {
            $message = array(
                'message' => 'Entry updated',
                'type' => 1);
        } else {
            $message = array(
                'message' => 'Entry error',
                'type' => 0);
        }
        return $message;     
    }
    
    function get_bag_level_form() 
    {
        $this->db->where('Level_Name', $this->input->post('levelSelect'));
        $query = $this->db->get('bag_level');
        
        return $query->row();
    }
}