<?php

class fare_type_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();	
	}
	
	function check_fare_type($fare_type, $fare_class){
		$sql = "select * from FARE_TYPES where FARE_TYPE = ? and FARE_CLASS = ?";
		$query = $this->db->query($sql,array($fare_type,$fare_class));
		foreach ($query->result() as $row){
			if($row->FARE_CLASS == $fare_class) return 1;
		}
		return 0;
	}
	
	
	function add_new_fare_type($fare_type,$fare_class){		
       $sql="INSERT INTO FARE_TYPES (FARE_TYPE_ID, FARE_TYPE, FARE_CLASS) VALUES (SEQ_FT_ID.nextval,?,?)";
	   $query = $this->db->query($sql,array($fare_type,$fare_class));
	}
	
	
}

?>