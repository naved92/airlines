<?php

class flight_model extends CI_Model
{

	public function __construct()
	{
	parent::__construct();
	
	}
	
	function check_airports($airport_id1,$airport_id2){
		$isValid1=0;
		$isValid2=0;
		
		$sql = "select * from AIRPORTS WHERE AIRPORT_CODE= ?";
		$query = $this->db->query($sql,array($airport_id1));
		
		foreach ($query->result() as $row){
			if($row->AIRPORT_CODE == $airport_id1) {$isValid1=1;
			 break;}
					
		}
		
		$sql = "select * from AIRPORTS WHERE AIRPORT_CODE= ?";
		$query = $this->db->query($sql,array($airport_id2));
		
		foreach ($query->result() as $row){
			if($row->AIRPORT_CODE == $airport_id2) {$isValid2=1;
			 break;}
					
		}
		if($isValid1 && $isValid2 ==1)return 0;
		else if($isValid1==1)return 2;
		else return 1;
	}
	
	
	function add_new_flight($sid,$did,$depart,$arrive){
		
       $sql="INSERT INTO FLIGHTS(FLIGHT_CODE ,SOURCE_AIRPORT_ID ,DESTINATION_AIRPORT_ID,DEPART_TIME,ARRIVAL_TIME) VALUES (SEQ_FLIGHT_CODE.nextval,?,?,?,?)";
	   $query = $this->db->query($sql,array($sid,$did,$depart,$arrive));
	} 
	
	function show_all()
		{
		$query=$this->db->query('SELECT * FROM FLIGHTS ORDER BY FLIGHT_CODE ASC');
		return $query->result_array();
		}
}

?>