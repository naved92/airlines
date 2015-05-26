<?php
class fare_type extends CI_Controller
	{
	
	public function __construct()
		{
		parent::__construct();
			$this->load->library(array('session','form_validation'));
			$this->load->helper(array('form','url','html'));
		
			$this->load->database();
			$this->load->model('fare_type_model');
				 
		}
	public function index()
		{
		if($this->session->userdata('loginadmin'))
          		{
					$data['title']='Fare Type Home';
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
	public function add_fare_type(){
		if($this->session->userdata('loginadmin')){ 
			$fare_type = $this->input->post("add_fare_type");	
			$fare_class = $this->input->post("add_fare_class");				
			//validations
			$this->form_validation->set_rules("add_fare_type","Fare Type ","trim|required|alpha_dash");
			$this->form_validation->set_rules("add_fare_class","Fare Class","trim|required|alpha_dash");		
				
			//invalid
			if ($this->form_validation->run()==FALSE){
				$data['title']='Add airport';
					$this->load->view('templates/header',$data);
					$this->load->view('fare_type/add_fare_type');				
					$this->load->view('templates/footer');		 				
			}			
			else{
				if ($this->input->post('btn_add_fare_type') == "Add Fare Type"){
					$fare_type_result = $this->fare_type_model->check_fare_type($fare_type,$fare_class);
					if ($fare_type_result==1){						//already exists
						$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
						Fare Type already exists!</div>');
						redirect("fare_type/add_fare_type");
					}
					else {
						$this->fare_type_model->add_new_fare_type($fare_type,$fare_class);
						$this->session->set_flashdata('msg','<div class="alert alert-success text-center">
						Fare Type '.$fare_type.' '.$fare_class.' added successfully</div>');
						redirect("fare_type/index");
					}
				}
			}
			
		}	 		
        else   
		    {
		    	redirect('login/index');
			}
             
	
		}
	}

?>