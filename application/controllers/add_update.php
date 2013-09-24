<?php


class Add_Update extends MY_Controller {


	function bag_level() 
	{

		$this->load->model('add_update_model');	
        $data = $this->add_update_model->get_bag_levels();

        if($data) {
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
}