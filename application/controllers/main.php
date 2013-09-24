<?php

class Main extends MY_Controller {   

    function index() {

    	$this->load->view('includes/header');
        $this->load->view('includes/navigation');
        $this->load->view('main/main_page');
        $this->load->view('includes/footer');
    }	
}