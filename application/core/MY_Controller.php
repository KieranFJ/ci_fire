<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    function __construct() 
    {
    	parent::__construct();
    	$this->is_logged_in();
    }

    function is_logged_in() 
    {
    	$is_logged_in = $this->session->userdata('is_logged_in');

    	if(!isset($is_logged_in) || $is_logged_in != true) 
        {
    		redirect('login');
    		die();
    	}
    }

    function index() 
    {
    	$this->load->view('includes/header');
        $this->load->view('includes/navigation');
        $this->load->view('main/main_page');
        $this->load->view('includes/footer');
    }
    

    function load_views()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
        $args = func_get_args();
        
        //psudo overloading due to lack of php overloading
        if (count($args) == 1) {
            $this->load->view($args[0]);
        } else {
            $this->load->view($args[0], $args[1]);
        }        
        //$this->load->view($content, $data);
        $this->load->view('includes/footer');
    }
    

    
    function create_alert($message) 
    {
        $data = $this->load->view('alert', $message, TRUE);
        $this->output->set_output($data);
    }
}