<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_Update extends MY_Controller {

    function bag_level() 
    {
        $data['bag_levels'] = array();
        
        $this->load->model('add_update_model');	
        $results = $this->add_update_model->get_bag_levels();
        
        if($results !== FALSE) 
        {
            foreach($results as $row) 
            {
                $data['bag_levels'][] = $row->Level_Name;
            }
        } 
        
        if($data) 
        {            
            //if levels exists load page with data
            $this->load->view('includes/header');
            $this->load->view('includes/navigation');
            $this->load->view('add_update/bag_page', $data);
            $this->load->view('includes/footer');	
        } else {
            //if no levels load page blank update
            $this->load->view('includes/header');
            $this->load->view('includes/navigation');
            $this->load->view('add_update/bag_page');
            $this->load->view('includes/footer');	
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
}