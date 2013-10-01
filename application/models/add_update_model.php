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
            'Level_Name' => $this->input->post('levelName'),
            'Level_No_Items' => $this->input->post('noItems'),
            'Level_Desc' => $this->input->post('description')
        );
        
        $this->db->where('Level_Name', $data['Level_Name']);
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
    
    function get_stations() 
    {
        $this->db->select('Station_Name');
        $query = $this->db->get('stations');
        
        if($query->num_rows == 0) 
        {
            return FALSE;
        } else {
            return $query->result();
        }
    }
    
    function get_station_form()
    {
        $this->db->where('Station_Name', $this->input->post('stationName'));
        $query = $this->db->get('stations');
        
        return $query->row();
    }
    
    function add_station() 
    {
        $data = array(
            'Station_Number' => $this->input->post('stationNumber'),
            'Station_Name' => $this->input->post('stationName'),
            'Station_Level' => $this->input->post('stationLevel'),
            'Station_Address' => $this->input->post('stationAddress'),
            'Station_Contact' => $this->input->post('stationContact'),
            'Station_Land_No' => $this->input->post('stationLandNo'),
            'Station_Mobile_No' => $this->input->post('stationMobileNo')            
        );
                
        $this->db->select('Station_Name');
        $this->db->where('Station_Name', $data['Station_Name']);
        $query = $this->db->get('stations');
        
        if($query->num_rows == 0) 
        {
            $this->db->insert('stations', $data);            
            return $message = array(
                    'message' => "Entry created",
                    'type' => 1);
        } else {
            return $message = array(
                'message' => "Duplicate Entry, check your Level Name",
                'type' => 0);
        }
    }
    
    function update_station() 
    {
        $data = array(
            'Station_Number' => $this->input->post('stationNumber'),
            'Station_Name' => $this->input->post('stationName'),
            'Station_Level' => $this->input->post('stationLevel'),
            'Station_Address' => $this->input->post('stationAddress'),
            'Station_Contact' => $this->input->post('stationContact'),
            'Station_Land_No' => $this->input->post('stationLandNo'),
            'Station_Mobile_No' => $this->input->post('stationMobileNo')            
        );
        
        $this->db->where('Station_Name', $data['Station_Name']);
        $query = $this->db->update('stations', $data);
        
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
}