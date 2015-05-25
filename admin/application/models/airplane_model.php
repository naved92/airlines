<?php

class airplane_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();	
	}
	
	function check_airplane($air_number){
		$sql = "select * from AIRPLANES WHERE AIRPLANE_TAIL_NUMBER= ?";
		$query = $this->db->query($sql,array($air_number));
		foreach ($query->result() as $row){
			if($row->AIRPLANE_TAIL_NUMBER == $air_number) return 1; //already exists
		}
		return 0;
	}
	
	
	function add_new_airplane($air_tail_number, $air_model_id){
		//$air_model_id = $this->get_airplane_model_id($air_model_name);
		$sql="INSERT INTO AIRPLANES(AIRPLANE_ID,AIRPLANE_MODEL_ID, AIRPLANE_TAIL_NUMBER) VALUES (SEQ_AIRP_ID.nextval,?,?)";
		$query = $this->db->query($sql,array($air_model_id,$air_tail_number));
	}
	
	function show_all(){
		$sql = "select * from AIRPLANE";
		$query = $this->db->query($sql);
		return $query->result();
	}
}

?>