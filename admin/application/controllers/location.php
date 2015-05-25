<?php
class location extends CI_Controller
	{
	
	public function __construct()
		{
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('form','url','html'));
		
		$this->load->database();
        $this->load->model('location_model');
				 
		}
	public function index()
		{
		if($this->session->userdata('loginadmin'))
          		{$data['locations']=$this->location_model->show_all();
				 $data['title']='Location Home';
				 $this->load->view('templates/header',$data);
				 $this->load->view('location/viewall',$data);
				 $this->load->view('templates/footer');
				}
        else   
		        {redirect('login/index');
				}
		}
		
	public function add_location()
		{
	   if($this->session->userdata('loginadmin'))
          		{ 
				  $address = $this->input->post("add_address");
		          $city = $this->input->post("add_city");
				  $country = $this->input->post("add_country");
		          $latitude = $this->input->post("add_latitude");
		          $longitude = $this->input->post("add_longitude");
		          
		//validations
		$this->form_validation->set_rules("add_address","Address","trim|required");
		$this->form_validation->set_rules("add_city","City","trim|required");
		$this->form_validation->set_rules("add_country","Country","trim|required");
		$this->form_validation->set_rules("add_latitude","Latitude","required|trim|numeric");
		$this->form_validation->set_rules("add_longitude","Longitude","required|trim|numeric");
		
		
		//invalid
			if ($this->form_validation->run()==FALSE)
			{
			$data['title']='Add Location';
				  $this->load->view('templates/header',$data);
				  $this->load->view('location/add_location');
				
				 $this->load->view('templates/footer');
				 		
		
			}
			
			else 
			{
				if ($this->input->post('btn_add_location') == "Add location"){
				$this->location_model->add_new_location($address ,$city , $country,$latitude,$longitude);
				redirect("location/index");
				}
			}
			
			}
		
				  
		
        else   
		        {redirect('login/index');
				}
             
	
		}
	}

?>