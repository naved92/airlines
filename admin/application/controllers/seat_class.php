<?php
class seat_class extends CI_Controller
	{
	
	public function __construct()
		{
		parent::__construct();
			$this->load->library(array('session','form_validation'));
			$this->load->helper(array('form','url','html'));
		
			$this->load->database();
			$this->load->model('seat_class_model');
				 
		}
	public function index()
		{
		if($this->session->userdata('loginadmin'))
          		{
					$data['title']='Seat Class Home';
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
	public function add_seat_class(){
		if($this->session->userdata('loginadmin')){ 
			$name = $this->input->post("add_seat_class_name");					
			//validations
			$this->form_validation->set_rules("add_seat_class_name","Seat Class Name","trim|required|alpha_dash");		
				
			//invalid
			if ($this->form_validation->run()==FALSE){
				$data['title']='Add Seat Class';
					$this->load->view('templates/header',$data);
					$this->load->view('seat_class/add_seat_class');				
					$this->load->view('templates/footer');		 				
			}			
			else{
				if ($this->input->post('btn_add_seat_class') == "Add Seat Class"){
					$seat_class_result = $this->seat_class_model->check_seat_class($name);
					if ($seat_class_result==1){						//already exists
						$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
						Seat Class already exists!</div>');
						redirect("seat_class/add_seat_class");
					}
					else {
						$this->seat_class_model->add_new_seat_class($name);
						$this->session->set_flashdata('msg','<div class="alert alert-success text-center">
						Airplane model '.$name.' added successfully</div>');
						redirect("seat_class/index");
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