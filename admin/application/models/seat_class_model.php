<?php

class seat_class_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();	
	}
	
	function check_seat_class($seat_class_name){
		$sql = "select * from SEAT_CLASSES WHERE SEAT_CLASS_NAME= ?";
		$query = $this->db->query($sql,array($seat_class_name));
		foreach ($query->result() as $row){
			if($row->SEAT_CLASS_NAME == $seat_class_name) return 1;
		}
		return 0;
	}
	
	
	function add_new_seat_class($seat_class_name){		
       $sql="INSERT INTO SEAT_CLASSES (SEAT_CLASS_ID, SEAT_CLASS_NAME) VALUES (SEQ_CLS_ID.nextval,?)";
	   $query = $this->db->query($sql,array($seat_class_name));
	}
	
	
}

?>