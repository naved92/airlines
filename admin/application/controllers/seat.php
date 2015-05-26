<?php
class seat extends CI_Controller
	{
	
	public function __construct()
		{
		parent::__construct();
			$this->load->library(array('session','form_validation'));
			$this->load->helper(array('form','url','html'));
		
			$this->load->database();
			$this->load->model('seat_model');
				 
		}
	public function index()
		{
		if($this->session->userdata('loginadmin'))
          		{
					$data['title']='Seat Home';
					
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


	public function add_seat(){
		if($this->session->userdata('loginadmin')){ 

			//inputs
			$seat_name = $this->input->post("add_seat_name");

			$air_model_name = $this->input->post("add_air_model_name");

			$seat_class_name = $this->input->post("add_seat_class_name");

			$seat_name = $this->input->post("add_seat_name");

			//validations
			$this->form_validation->set_rules("add_seat_name","Seat Name","trim|required|alpha_dash");		
			$this->form_validation->set_rules("add_air_model_name","Airplane Model Name","trim|required|alpha_dash");
			$this->form_validation->set_rules("add_seat_class_name","Seat Class","trim|required|alpha_dash");

				
			//invalid
			if ($this->form_validation->run()==FALSE){
				$data['title']='Add Seat';
				$this->load->view('templates/header',$data);
				$this->load->view('seat/add_seat');				
				$this->load->view('templates/footer');		 				
			}			
			else{		//valid entry
				if ($this->input->post('btn_add_seat') == "Add Seat"){
					$seat_model_id = $this->get_airplane_model_id($air_model_name);
					$seat_class_id = $this->get_seat_class_id($seat_class_name);

					$seat_result = $this->seat_model->check_seat($seat_name,$air_model_id);
					if ($seat_result==1){						//already exists
						$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
						Seat already exists!</div>');
						redirect("seat/add_seat");
					}					
					else {

						if($air_model_id==0){
							$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
							Airplane Model do not exist!</div>');
							redirect("seat/add_seat");
						}
						else if ($seat_class_id == 0){
							$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">
							Seat Class do not exist!</div>');
							redirect("seat/add_seat");

						}
						else {
							$this->seat_model->add_new_seat($seat_name,$seat_class_id,$air_model_id);
							$this->session->set_flashdata('msg','<div class="alert alert-success text-center">
							seat model '.$name.' added successfully</div>');
							redirect("seat_model/index");
						}
					}
				}
			}
			
		}	 		
        else{
	        redirect('login/index');
		}
             
	
	}
		
	public function get_airplane_model_id($air_model_name){
			$sql = "select * from AIRPLANE_MODELS where AIRPLANE_MODEL_NAME = ?";
			$query = $this->db->query($sql,array($air_model_name));
			foreach ($query->result() as $row){
				if($row->AIRPLANE_MODEL_NAME == $air_model_name) return $row->AIRPLANE_MODEL_ID;
		}
		return 0;
	}

	public function get_seat_class_id($seat_class_name){
			$sql = "select * from SEAT_CLASS where SEAT_CLASS_NAME = ?";
			$query = $this->db->query($sql,array($seat_class_name));
			foreach ($query->result() as $row) {
				if($row->SEAT_CLASS_NAME == $seat_class_name) return $row->SEAT_CLASS_ID;
			}
		return 0;
	}
}
	 
	

?>