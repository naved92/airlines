<?php

class logout extends CI_Controller
	{
	
	 public  function __construct()
	{
     
     parent::__construct();
	 $this->load->library(array('session'));
	 $this->load->helper(array('url'));
		
		
     
	}
	
	public function index()
	{
	$this->session->unset_userdata($this->session->userdata('loginuser'));
	 session_destroy();
     redirect('login','refresh');
     
	}

	}

?>