<?php

class seat_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();	
	}
	
	function check_seat($seat_name, $airplane_model_id){
		$sql = "select * from SEATS WHERE SEAT_NAME = ? AND SEAT_MODEL_ID = ?";
		$query = $this->db->query($sql,array($seat_name,$airplane_model_id));
		foreach ($query->result() as $row){
			if($row->SEAT_NAME == $seat_name) return 1; 		//already exists
		}
		return 0;
	}
	
	
	function add_new_seat($seat_name, $seat_class_id, $airplane_model_id){
		$sql="INSERT INTO SEATS(SEAT_ID,SEAT_MODEL_ID,SEAT_CLASS_ID,SEAT_NAME) VALUES (SEQ_SEAT_ID.nextval,?,?,?)";
		$query = $this->db->query($sql,array($air_model_id,$seat_class_id,$seat_name));
	}
	

}

?>