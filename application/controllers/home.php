<?php if(!defined('BASEPATH')) exit ('No Direct scrip access allowed, Sorry');

class home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->database();
	}
	
	public function index()
	{   if($this->session->userdata('loginadmin'))
          		{$this->load->view('home_view');
				}
        else   
		        {redirect('login/index');
				}
        
	}

?>