<?php if(!defined('BASEPATH')) exit ('No Direct scrip access allowed, Sorry');

class login_model extends CI_Model{
	function __construct(){
		parent::__construct( );
	}
		
	function get_user($usr, $pwd){
		$sql = "select * from CUSTOMERS WHERE CUSTOMER_NAME = ? AND PASS = ?";
		$query = $this->db->query($sql,array($usr,$pwd));
		
		foreach ($query->result() as $row){
			if ($row->CUSTOMER_NAME == $usr && $row->PASS == $pwd) return 1;
		}
		
		//if($query->num_rows>0)return 1;
		return 0;
	}

}

?>