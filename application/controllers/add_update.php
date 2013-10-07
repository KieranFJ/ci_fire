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
        
        if($data['bag_levels']) 
        {            
            $this->load_views('add_update/bag_page', $data);
        } else {            
            $this->load_views('add_update/bag_page');	
        }
    }
    
    function add_level()
    {
        $this->load->model('add_update_model');
        
        $data['return'] = $this->add_update_model->add_bag_level(); 

        $this->create_alert($data['return']);
    }
    
    function update_level() 
    {
        $this->load->model('add_update_model');
        
        $data['return'] = $this->add_update_model->update_bag_level();
        
        $this->create_alert($data['return']);
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
            case 'get_station_details_form':
                    $results['out'] = $this->add_update_model->get_station_form();
                    $this->load->view('add_update/update_station_form', $results);
                    break;
            case 'get_category_details_form':
                    $results['out'] = $this->add_update_model->get_category_form();
                    $this->load->view('add_update/update_category_form', $results);
                    break;
        }        
    }
    
    function station() 
    {
        $data['station_names'] = array();
        $this->load->model('add_update_model');
        
        $results = $this->add_update_model->get_stations();
        
        if($results !== FALSE) 
        {
            foreach($results as $row) 
            {
                $data['station_names'][] = $row->Station_Name;
            }
        } 
        
        if($data['station_names']) 
        {            
            $this->load_views('add_update/station_page', $data);
        } else {            
            $this->load_views('add_update/station_page');	
        }        
    }
    
    function add_station() 
    {
        $this->load->model('add_update_model');
        
        $data['return'] = $this->add_update_model->add_station(); 

        $this->create_alert($data['return']);
    }
    
    function update_station() 
    {
        $this->load->model('add_update_model');
        
        $data['return'] = $this->add_update_model->update_station();
        
        $this->create_alert($data['return']);
    }
    
    function category()
    {
        $data['category_names'] = array();
        $this->load->model('add_update_model');
        
        $results = $this->add_update_model->get_categories();
        
        if($results !== FALSE) 
        {
            foreach($results as $row) 
            {
                $data['category_names'][] = $row->Category_Name;
            }
        } 
        
        if($data['category_names']) 
        {            
            $this->load_views('add_update/category_page', $data);
        } else {            
            $this->load_views('add_update/category_page');	
        }
    }
    
    function add_category()
    {
        $this->load->model('add_update_model');
        
        $data['return'] = $this->add_update_model->add_category(); 

        $this->create_alert($data['return']);
    }
    
    function update_category()
    {
        $this->load->model('add_update_model');
        
        $data['return'] = $this->add_update_model->update_category();
        
        $this->create_alert($data['return']);
    }    
}