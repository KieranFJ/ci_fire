<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function index() {
	$this->load->library('form_validation');

	$this->form_validation->set_rules('username');
        $this->load->view('includes/header');
        $this->load->view('includes/navigation');
        $this->load->view('login/login_form');
        $this->load->view('includes/footer');
    }

    function logout() {        
        $this->session->sess_destroy();
        redirect('login');
    }
    
    function validate_credentials() {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();
        
        if($query) {
            foreach ($query->result() as $row) {
                $user_id = $row->user_id;                
            }
            
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true,
                'user_id' => $user_id);
            
            $this->session->set_userdata($data);
            redirect('main');
        }
        else {
            redirect('login/index', 'refresh');        
        }
    }
    
    function signup() {
        $data['load_page'] = 'signup_form';
        $data['output'] = '';
        $this->load->view('includes/template', $data);
    }
    
    function create_member() 
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->signup();
        }
        else 
        {
            $this->load->model('membership_model');
            if ($query = $this->membership_model->create_member()) 
            {                
                $data['load_page'] = 'signup_successful';
                $data['output'] = '';
                $this->load->view('includes/template', $data);
            }
            else
            {
                $this->load->view('signup_form');
            }
        }
    }    
    
}


