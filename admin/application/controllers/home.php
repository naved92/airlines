<?php if(!defined('BASEPATH')) exit ('No Direct scrip access allowed, Sorry');

class home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('form','url','html'));
		
		$this->load->database();
	}
	
	public function index()
	{   if($this->session->userdata('loginadmin'))
          		 { $data['title']='Admin || '.$this->session->userdata('adminname');
				$this->load->view('templates/header',$data);
				 $this->load->view('templates/footer');
				}
        else   
		        {redirect('login/index');
				}
        
	}
	}

?>