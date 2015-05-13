<?php 

class Location extends CI_Controller
	{
	public function __construct()
		{
		parent::__construct();
		$this->load->database();
		$this->load->model('locations_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		}
		
		
	
	
	public function index()
		{
		
		$data['title']="Locations";
		$data['result']=$this->locations_model->get_locations();
		$this->load->view('templates/header',$data);
		$this->load->view('locations/index',$data);
		$this->load->view('templates/footer');
		
		}
	public function new_location()
		{
		$data['title']="Create New Location";
		$this->load->library('form_validation');
		$this->load->helper('form');
		
		$this->form_validation->set_rules('location_id','required|trim');
		$this->form_validation->set_rules('street_address','required|trim');
		$this->form_validation->set_rules('postal_code','required|trim');
		$this->form_validation->set_rules('city','required|trim');
		$this->form_validation->set_rules('state_province','required|trim');
		$this->form_validation->set_rules('country','required|trim');
		
		if($this->form_validation->run()===false)
			{
			$this->load->view('templates/header',$data);
			$this->load->view('locations/add_new_location',$data);
			$this->load->view('templates/footer');
			}
			
		else 
			{
			$this->location_model->set_location();
			$this->load->helper('url');
			redirect('locations/success');
			}
		}
		
	public function create()
		{
		$data['title']="Create New Location";
		
		
			$this->locations_model->set_location();
			$this->load->helper('url');
			$this->load->view('locations/success');
			
		}
	}

