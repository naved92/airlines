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
	
	public function set_location()
	{
	
	$data=array ( 'LOCATION_ID'=>$this->input->post('location_id'),
	              'STREET_ADDRESS'=>$this->input->post('street_address'),
				  'POSTAL_CODE'=>$this->input->post('postal_code'),
				   'CITY'=>$this->input->post('city'),
				   'STATE_PROVINCE'=>$this->input->post('state_province'),
				   'COUNTRY_ID'=>$this->input->post('country')
				 );
				 
			 
	return $this->db->insert('LOCATIONS',$data);			 
	}
}