<?php
class airplane extends CI_Controller
	{
	
	public function __construct()
		{
		parent::__construct();
			$this->load->library(array('session','form_validation'));
			$this->load->helper(array('form','url','html'));
		
			$this->load->database();
			$this->load->model('airplane_model');
				 
		}
	public function index()
		{
		if($this->session->userdata('loginadmin'))
          		{
					$data['title']='Airplane Home';
					
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
	public function add_airplane(){
		if($this->session->userdata('loginadmin')){ 
			$air_tail_number = $this->input->post("add_airplane_tail_number");					
			$air_model_name = $this->input->post("add_airplane_model_name");
			//validations
			$this->form_validation->set_rules("add_airplane_tail_number","Airplane Tail Number","trim|required|alpha_dash");		
			$this->form_validation->set_rules("add_airplane_model_name","Airplane Model Name","trim|required");
				
			//invalid
			if ($this->form_validation->run()==FALSE){
				$data['title']='Add Airplane';
				$this->load->view('templates/header',$data);
				$this->load->view('airplane/add_airplane');				
				$this->load->view('templates/footer');		 				
			}			
			else{
				if ($this->input->post('btn_add_airplane') == "Add Airplane"){
					$airplane_result = $this->airplane_model->check_airplane($air_tail_number);
					if ($airplane_result==1){						//already exists
						$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
						Airplane already exists!</div>');
						redirect("airplane/add_airplane");
					}					
					else {
						$air_model_id = $this->get_airplane_model_id($air_model_name);
						if($air_model_id==0){
							$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
							Airplane Model do not exist!</div>');
							redirect("airplane/add_airplane");
						}
						else{
							$this->airplane_model->add_new_airplane($air_tail_number,$air_model_id);
							$this->session->set_flashdata('msg','<div class="alert alert-success text-center">
							Airplane model '.$name.' added successfully</div>');
							redirect("airplane_model/index");
						}
					}
				}
			}
			
		}	 		
        else   
		        {redirect('login/index');
				}
             
	
		}
		
		public function get_airplane_model_id($air_model_name){
			$sql = "select * from AIRPLANE_MODELS where AIRPLANE_MODEL_NAME = ?";
			$query = $this->db->query($sql,$air_model_name);
			foreach ($query->result() as $row){
				if($row->AIRPLANE_MODEL_NAME == $air_model_name) return $row->AIRPLANE_MODEL_ID;
		}
		return 0;
	}
	 
	}

?>