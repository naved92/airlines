<?php

class airplane_model_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();	
	}
	
	function check_airplane_model($air_mod_name){
		$sql = "select * from AIRPLANE_MODELS WHERE AIRPLANE_MODEL_NAME= ?";
		$query = $this->db->query($sql,array($air_mod_name));
		foreach ($query->result() as $row){
			if($row->AIRPLANE_MODEL_NAME == $air_mod_name) return 1;
		}
		return 0;
	}
	
	
	function add_new_airplane_model($name){		
       $sql="INSERT INTO AIRPLANE_MODELS(AIRPLANE_MODEL_NAME ,AIRPLANE_MODEL_ID) VALUES (?,SEQ_AIR_MOD_ID.nextval)";
	   $query = $this->db->query($sql,array($name));
	}
	
	function show_all(){
		$sql = "select * from AIRPLANE_MODELS";
		$query = $this->db->query($sql);
		return $query->result();
	}
}

?>