<?php
class flightschedule extends CI_Controller
	{
	
	public function __construct()
		{
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('form','url','html'));
		
		$this->load->database();
        $this->load->model('flightschedule_model');
				 
		}
	public function index()
		{
		if($this->session->userdata('loginadmin'))
          		{$data['title']='Flight Schedule Home';
				 $this->load->view('templates/header',$data);
				 $this->load->view('templates/footer');
				}
        else   
		        {redirect('login/index');
				}
		}
		
	public function add_flightschedule()
		{
	   if($this->session->userdata('loginadmin'))
          		{ 
				  $fcode = $this->input->post("add_flight_code");
		          $fdate = $this->input->post("add_flight_date");
				  
		//validations
		$this->form_validation->set_rules("add_flight_code","Flight Code","trim|required");
		$this->form_validation->set_rules("add_flight_date","Flight Date","trim");
		
		
		//invalid
			if ($this->form_validation->run()==FALSE)
			{
			$data['title']='Add Flight Schedule';
				  $this->load->view('templates/header',$data);
				  $this->load->view('flightschedule/add_flightschedule');
				
				 $this->load->view('templates/footer');
				 		
		
			}
			
			else 
			{
				if ($this->input->post('btn_add_flightschedule') == "Add Flight Schedule"){
				$result= $this->flightschedule_model->check_flightcode($fcode);
				if ($result==1){						//lo
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
					Flight ID doesn\'t exist!</div>');
					redirect("flightschedule/add_flightschedule");
				}
				else {
				$this->flightschedule_model->add_new_flightschedule($fcode,$fdate);
				redirect("flightschedule/index");
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