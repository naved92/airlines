<?php

class flightschedule_model extends CI_Model
{

	public function __construct()
	{
	parent::__construct();
	
	}
	
	function check_flightcode($fcode){
		$sql = "select * from FLIGHTS WHERE FLIGHT_CODE= ?";
		$query = $this->db->query($sql,array($fcode));
		foreach ($query->result() as $row){
			if($row->FLIGHT_CODE == $fcode) return 0;
						
		}
		return 1;
	}
	
	
	function add_new_flightschedule($fcode,$fdate){
		
       $sql="INSERT INTO FLIGHTS_SCHEDULE(FLIGHTS_SCHEDULE_ID ,FLIGHT ,FLIGHT_TIME) VALUES (SEQ_FLT_SEQ_ID.nextval,?,?)";
	   $query = $this->db->query($sql,array($fcode,$fdate));
	}
}

?>