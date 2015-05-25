<?php if(!defined('BASEPATH')) exit ('No Direct scrip access allowed, Sorry');

class login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('form','url','html'));
		$this->load->database();
		$this->load->model('login_model');
	}
	
	public function index(){
	    if($this->session->userdata('loginadmin'))
          		{redirect('home/index');
				}
        else   
		        {
				
        
		$username = $this->input->post("login_username");
		$password = $this->input->post("login_password");
		
		//validations
		$this->form_validation->set_rules("login_username","Username","trim|required|min_length[6]|max_length[48]|alpha_numeric");
		$this->form_validation->set_rules("login_password","Password","trim|required|min_length[6]|max_length[48]");
		
		//invalid
		if ($this->form_validation->run()==FALSE){
			$this->load->view('login_view');			
		}
		else{											//valid input
			if ($this->input->post('btn_login') == "Login"){
				$usr_result = $this->login_model->get_user($username, $password);
				if ($usr_result>0){						//username pass matched
					$adminsessiondata = array(
									'adminname' => $username,
									'loginadmin'=> TRUE
					);
					$this->session->set_userdata($adminsessiondata);
					redirect("home");
				}
				else{								// username pass do not match
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Username Password do not match!</div>');
					redirect("login/index");
				}
			}
		}
    }
	}

}

?>