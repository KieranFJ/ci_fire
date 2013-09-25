<?php


class Add_Update extends MY_Controller {

    function bag_level() 
    {

        $this->load->model('add_update_model');	
        $data['bag_levels'] = $this->add_update_model->get_bag_levels();

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
        
        if($data['return'] === TRUE)
        {
            redirect('add_update/bag_level');
        } else {
            redirect('main');
        }
    }
}