<?php if(!defined('BASEPATH')) exit ('No Direct scrip access allowed, Sorry');

class register_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function check_duplicate($usr,$email){
		$sql = "select * from CUSTOMERS";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row){
			if($row->CUSTOMER_NAME == $usr) return 1;
			else if ($row->EMAIL == $email)return 2;			
		}
		return 0;
	}
	
	function add_new_user($usr,$pwd,$email){
		
       $sql="INSERT INTO CUSTOMERS (CUSTOMER_ID ,CUSTOMER_NAME ,PASS ,EMAIL) VALUES (SEQ_ADM_ID.nextval,?,?,?)";
	   $query = $this->db->query($sql,array($usr,$pwd,$email));
	}
	
}

?>