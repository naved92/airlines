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
	
	function check_flightplane($fplane){
		$sql = "select * from AIRPLANES WHERE AIRPLANE_ID= ?";
		$query = $this->db->query($sql,array($fplane));
		foreach ($query->result() as $row){
			if($row->AIRPLANE_ID == $fPLANE) return 0;
						
		}
		return 1;
	}
	
	
	function add_new_flightschedule($fcode,$fdate,$fplane){
		
       $sql="INSERT INTO FLIGHTS_SCHEDULE(FLIGHTS_SCHEDULE_ID ,FLIGHT ,FLIGHT_TIME,FLIGHT_PLANE) VALUES (SEQ_FLT_SEQ_ID.nextval,?,?)";
	   $query = $this->db->query($sql,array($fcode,$fdate,$fplane));
	}
	
	function show_all()
		{
		$query=$this->db->query('SELECT * FROM FLIGHTS_SCHEDULE ORDER BY FLIGHTS_SCHEDULE_ID ASC');
		return $query->result_array();
		}
}

?>