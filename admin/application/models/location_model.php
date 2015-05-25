<?php

class location_model extends CI_Model
{

	public function __construct()
	{
	parent::__construct();
	
	}
	
	function add_new_location($address,$city,$country,$latitude,$longitude){
		
       $sql="INSERT INTO LOCATIONS(LOCATION_ID ,ADDRESS ,CITY ,COUNTRY,LATITUDE,LONGITUDE) VALUES (SEQ_LOC_ID.nextval,?,?,?,?,?)";
	   $query = $this->db->query($sql,array($address,$city,$country,$latitude,$longitude));
	}
}

?>