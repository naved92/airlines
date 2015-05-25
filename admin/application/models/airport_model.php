<?php

class airport_model extends CI_Model
{

	public function __construct()
	{
	parent::__construct();
	
	}
	
	function check_location($loc_id){
		$sql = "select * from LOCATIONS WHERE LOCATION_ID= ?";
		$query = $this->db->query($sql,array($loc_id));
		foreach ($query->result() as $row){
			if($row->LOCATION_ID == $loc_id) return 0;
						
		}
		return 1;
	}
	
	
	function add_new_airport($name,$loc_id,$status){
		
       $sql="INSERT INTO AIRPORTS(AIRPORT_CODE ,AIRPORT_NAME ,AIRPORT_LOCATION_ID ,STATUS) VALUES (SEQ_AIR_ID.nextval,?,?,?)";
	   $query = $this->db->query($sql,array($name,$loc_id,$status));
	}
	
	function show_all()
		{
		$query=$this->db->query('SELECT * FROM AIRPORTS ORDER BY AIRPORT_CODE ASC');
		return $query->result_array();
		}
}

?>