<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_Update extends MY_Controller {

    function bag_level() 
    {
        $data['bag_levels'] = array();
        
        $this->load->model('add_update_model');	
        $results = $this->add_update_model->get_bag_levels();
        
        //maybe move this to a library function?
        if($results !== FALSE) 
        {
            foreach($results as $row) 
            {
                $data['bag_levels'][] = $row->Level_Name;
            }
        } 
        
        if($data) 
        {            
            $this->load_views('add_update/bag_page', $data);
        } else {            
            $this->load_views('add_update/bag_page');	
        }
    }
    
    function add_level()
    {
        //send post to load add level model
        $this->load->model('add_update_model');
        
        $data['return'] = $this->add_update_model->add_bag_level(); 

        $this->create_alert($data['return']);
    }
    
    function update_level() 
    {
        $this->load->model('add_update_model');
        
        $data['return'] = $this->add_update_model->update_bag_level();
        
        $this->create_alert($data['return']);
        //$this->output->set_output($data);    
    }
        
    function load_form() 
    {
        $this->load->model('add_update_model');
        switch($this->input->post('origin')) 
        {
            case 'get_bag_level_form':  
                    $results['out'] = $this->add_update_model->get_bag_level_form();
                    $this->load->view('add_update/update_bag_form', $results);
                    break;
        }        
    }
    
    function station() 
    {
        $data['stations'] = array();
        $this->load->model('add_update_model');
        
        $results = $this->add_update_model->get_stations();
        
        if($results !== FALSE) 
        {
            foreach($results as $row) 
            {
                $data['stations'][] = $row->Station_Name;
            }
        } 
        
        
        if($data) 
        {            
            $this->load_views('stub', $data);
        } else {            
            $this->load_views('stub');	
        }
        
        
    }
}