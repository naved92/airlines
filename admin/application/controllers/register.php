<?php if(!defined('BASEPATH')) exit ('No Direct scrip access allowed, Sorry');

class register extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('form','url','html'));
		$this->load->database();
		$this->load->model('register_model');
	}
	
	public function index(){
	    if($this->session->userdata('loginadmin'))
          		{redirect('home/index');
				}
        else   
		        {
		
		$username = $this->input->post("register_username");
		$password = $this->input->post("register_password");
		$email = $this->input->post("register_email");
		$password_conf = $this->input->post("register_password_conf");
		
		//validations
		$this->form_validation->set_rules("register_username","Username","trim|required|min_length[6]|max_length[48]|alpha_numeric");
		$this->form_validation->set_rules("register_password","Password","trim|required|min_length[6]|max_length[48]");
		$this->form_validation->set_rules("register_password_conf","Password Confirmation","trim|required|min_length[6]|max_length[48]|matches[register_password]");
		$this->form_validation->set_rules("register_email","Email","required|valid_email");
		
		//invalid
		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('register_view');			
		
		}
		
		else
		
		{											//valid input
			if ($this->input->post('btn_register') == "Register"){
				$usr_result = $this->register_model->check_duplicate($username, $email);
				if ($usr_result==1){						//user exists
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
					Username already exists!</div>');
					redirect("register/index");
				}
				else if ($usr_result==2){					//email exists
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
					Email already exists!</div>');
					redirect("register/index");
				}
				else{										// add new user
					$adminsessiondata = array(
									'username' => $username,
									'loginadmin'=> TRUE
					);
					$this->session->set_userdata($adminsessiondata);
					$this->register_model->add_new_user($username, $password,$email);
					redirect("login/index");
				}
			}
		}
     }
	}
    
	
}

?>