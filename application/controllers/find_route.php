<?php

class find_route extends CI_Controller{
	public function __construct()
	{
	parent::__construct();
	$this->load->library(array('session','form_validation'));
		$this->load->helper(array('form','url','html'));
		$this->load->database();
		$this->load->model('findroute_model');
	}
	
	public function index()
	{
	if($this->session->userdata('loginuser')==FALSE)
          		{redirect('login/index');
				}
        else   
		        {
				
        
		$loc1 = $this->input->post("source");
		$loc2 = $this->input->post("destination");
		
		//validations
		$this->form_validation->set_rules("source","Source City","trim|required");
		$this->form_validation->set_rules("destination","Destination City","trim|required");
		
		//invalid
		if ($this->form_validation->run()==FALSE){
		          $data['title']='Find route';
				  $this->load->view('templates/header',$data);
				  $this->load->view('routes/findroute_view');
				
				 $this->load->view('templates/footer');
				
				
		}
		else{											//valid input
			if ($this->input->post('btn_find_route') == "Find route"){
				{$data['flight_routes']=$this->findroute_model->show_flight($loc1,$loc2);
				 $data['title']='Routes';
				 
				 $this->load->view('templates/header',$data);
				 $this->load->view('routes/showroute_1_connect',$data);
				 $this->load->view('templates/footer');
				}
			}
		}
    }
	
	}

} 
?>