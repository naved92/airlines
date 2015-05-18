<?php if(!defined('BASEPATH')) exit ('No Direct scrip access allowed, Sorry');

class login_model extends CI_Model{
	function __construct(){
		parent::__construct( );
	}
		
	function get_user($usr, $pwd){
		$sql = "select * from ADMINS WHERE ADMIN_NAME = ? AND ADMIN_PASS = ?";
		$query = $this->db->query($sql,array($usr,$pwd));
		
		foreach ($query->result() as $row){
			if ($row->ADMIN_NAME == $usr && $row->ADMIN_PASS == $pwd) return 1;
		}
		
		//if($query->num_rows>0)return 1;
		return 0;
	}

}

?>