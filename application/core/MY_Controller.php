<?php

class MY_Controller extends CI_Controller {
    
    function __construct() {
    	parent::__construct();
    	$this->is_logged_in();
    }

    function is_logged_in() {

    	$is_logged_in = $this->session->userdata('is_logged_in');

    	if(!isset($is_logged_in) || $is_logged_in != true) {
    		redirect('login');
    		die();
    	}
    }

    function index() {

    	$this->load->view('includes/header');
        $this->load->view('includes/navigation');
        $this->load->view('main/main_page');
        $this->load->view('includes/footer');
    }	
}