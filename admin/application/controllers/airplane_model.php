<?php
class airplane_model extends CI_Controller
	{
	
	public function __construct()
		{
		parent::__construct();
			$this->load->library(array('session','form_validation'));
			$this->load->helper(array('form','url','html'));
		
			$this->load->database();
			$this->load->model('airplane_model_model');
				 
		}
	public function index()
		{
		if($this->session->userdata('loginadmin'))
          		{
					$data['title']='Airplane Model Home';
					//$data['result'] = $this->show_all();
					$this->load->view('templates/header',$data);					
					$this->load->view('templates/footer');
				}
        else   
		        {
					redirect('login/index');
				}
		}
			
	public function show_all(){
			;

	}	
	public function add_airplane_model(){
		if($this->session->userdata('loginadmin')){ 
			$name = $this->input->post("add_airplane_model_name");					
			//validations
			$this->form_validation->set_rules("add_airplane_model_name","Airplane Model Name","trim|required");		
				
			//invalid
			if ($this->form_validation->run()==FALSE){
				$data['title']='Add airport';
					$this->load->view('templates/header',$data);
					$this->load->view('airplane_model/add_airplane_model');				
					$this->load->view('templates/footer');		 				
			}			
			else{
				if ($this->input->post('btn_add_airplane_model') == "Add Airplane Model"){
					$airplane_model_result = $this->airplane_model_model->check_airplane_model($name);
					if ($airplane_model_result==1){						//already exists
						$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
						Airplane model already exists!</div>');
						redirect("airplane_model/add_airplane_model");
					}
					else {
						$this->airplane_model_model->add_new_airplane_model($name);
						$this->session->set_flashdata('msg','<div class="alert alert-success text-center">
						Airplane model '.$name.' added successfully</div>');
						redirect("airplane_model/index");
					}
				}
			}
			
		}	 		
        else   
		        {redirect('login/index');
				}
             
	
		}
	}

?>