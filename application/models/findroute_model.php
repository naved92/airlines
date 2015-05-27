<?php

class findroute_model extends CI_Model
{

	public function __construct()
	{
	parent::__construct();
	
	}
	
	function show_flight($loc1,$loc2){
		/*
		$sql="CREATE OR REPLACE FUNCTION GET_LOCATION_ID(CITY_NAME IN VARCHAR2) RETURN NUMBER IS LOC_ID NUMBER; BEGIN SELECT LOCATION_ID INTO LOC_ID FROM LOCATIONS WHERE (CITY=CITY_NAME);RETURN LOC_ID;END;/";
		$this->db->query($sql);
		
		$sql = "CREATE OR REPLACE FUNCTION GET_AIRPORT_CODE(LOC_ID IN NUMBER) \n RETURN NUMBER IS \n"
		." AIRP_ID NUMBER; \n BEGIN \n SELECT AIRPORT_CODE INTO AIRP_ID FROM AIRPORTS WHERE (AIRPORT_LOCATION_ID=LOC_ID); \n RETURN AIRP_ID; \n END;/ ";
		$this->db->query($sql);
		*/
        
        $sql="SELECT * FROM FLIGHTS WHERE SOURCE_AIRPORT_ID = GET_AIRPORT_CODE(GET_LOCATION_ID('Dhaka')) AND DESTINATION_AIRPORT_ID=GET_AIRPORT_CODE(GET_LOCATION_ID('Kolkata'));";		
		//$query=$this->db->query($sql,array($loc1,$loc2));
		$query=$this->db->query($sql);
		return $query->result_array();
		
	}
	
	
}

?>