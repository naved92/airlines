<?php 

class Location extends CI_Controller
	{
	public function __construct()
		{
		parent::__construct();
		$this->load->database();
		$this->load->model('locations_model');
		}
		
		
	
	
	public function index()
		{
		
		$data['title']="Locations";
		$data['result']=$this->locations_model->get_locations();
		$this->load->view('templates/header',$data);
		$this->load->view('locations/index',$data);
		$this->load->view('templates/footer');
		
		}
	}

