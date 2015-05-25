<?php
class airport extends CI_Controller
	{
	
	public function __construct()
		{
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('form','url','html'));
		
		$this->load->database();
        $this->load->model('airport_model');
				 
		}
	public function index()
		{
		if($this->session->userdata('loginadmin'))
          		{$data['title']='Airport Home';
				 $this->load->view('templates/header',$data);
				 $this->load->view('templates/footer');
				}
        else   
		        {redirect('login/index');
				}
		}
		
	public function add_airport()
		{
	   if($this->session->userdata('loginadmin'))
          		{ 
				  $name = $this->input->post("add_airport_name");
		          $loc_id = $this->input->post("add_location_id");
				  $status = $this->input->post("add_status");

		//validations
		$this->form_validation->set_rules("add_airport_name","Airport Name","trim|required");
		$this->form_validation->set_rules("add_location_id","Location ID","trim|required");
		$this->form_validation->set_rules("add_status","Status","trim|required");
		
		
		//invalid
			if ($this->form_validation->run()==FALSE)
			{
			$data['title']='Add airport';
				  $this->load->view('templates/header',$data);
				  $this->load->view('airport/add_airport');
				
				 $this->load->view('templates/footer');
				 		
		
			}
			
			else 
			{
				if ($this->input->post('btn_add_airport') == "Add airport"){
				$loc_result = $this->airport_model->check_location($loc_id);
				if ($loc_result==1){						//lo
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
					Location ID doesn\'t exist!</div>');
					redirect("airport/add_airport");
				}
				else {
				$this->airport_model->add_new_airport($name ,$loc_id , $status);
				redirect("airport/index");
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