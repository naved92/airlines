<?php 

class Locations_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_locations()
	{
	
		
		$query=$this->db->get('LOCATIONS');
		return $query->result_array();
	}

}