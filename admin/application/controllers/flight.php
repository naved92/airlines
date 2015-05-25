<?php
class flight extends CI_Controller
	{
	
	public function __construct()
		{
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('form','url','html'));
		
		$this->load->database();
        $this->load->model('flight_model');
				 
		}
	public function index()
		{
		if($this->session->userdata('loginadmin'))
          		{$data['flights']=$this->flight_model->show_all();
				 $data['title']='Flight Home';
				 
				 $this->load->view('templates/header',$data);
				 $this->load->view('flight/viewall',$data);
				 $this->load->view('templates/footer');
				
				}
        else   
		        {redirect('login/index');
				}
		}
		
	public function add_flight()
		{
	   if($this->session->userdata('loginadmin'))
          		{ 
				  $sid = $this->input->post("add_source_airport");
		          $did = $this->input->post("add_destination_airport");
				  $depart = $this->input->post("add_depart_time");
				  $arrive=$this->input->post("add_arrival_time");

		//validations
		$this->form_validation->set_rules("add_source_airport","Source Airport ID","trim|required");
		$this->form_validation->set_rules("add_destination_airport","Destination Airport ID","trim|required");
		$this->form_validation->set_rules("add_depart_time","Departure Time","trim");
		$this->form_validation->set_rules("add_arrival_time","Arrival Time","trim");
		
		
		//invalid
			if ($this->form_validation->run()==FALSE)
			{
			$data['title']='Add flight';
				  $this->load->view('templates/header',$data);
				  $this->load->view('flight/add_flight');
				
				 $this->load->view('templates/footer');
				 		
		
			}
			
			else 
			{
				if ($this->input->post('btn_add_flight') == "Add flight"){
				$result = $this->flight_model->check_airports($sid,$did);
				if ($result==1){						//lo
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
					Source Airport ID doesn\'t exist!</div>');
					redirect("flight/add_flight");
				}
				else if ($result==2){						//lo
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
					Destination Airport ID doesn\'t exist!</div>');
					redirect("flight/add_flight");
				}
				else {
				$this->flight_model->add_new_flight($sid ,$did , $depart,$arrive);
				redirect("flight/index");
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