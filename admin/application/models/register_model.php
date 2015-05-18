<?php if(!defined('BASEPATH')) exit ('No Direct scrip access allowed, Sorry');

class register_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function check_duplicate($usr,$email){
		$sql = "select * from ADMINS";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row){
			if($row->ADMIN_NAME == $usr) return 1;
			else if ($row->ADMIN_EMAIL_ID == $email)return 2;			
		}
		return 0;
	}
	
	function add_new_user($usr,$pwd,$email){
		
       $sql="INSERT INTO ADMINS (ADMIN_ID ,ADMIN_NAME ,ADMIN_PASS ,ADMIN_EMAIL_ID) VALUES (SEQ_ADM_ID.nextval,?,?,?)";
	   $query = $this->db->query($sql,array($usr,$pwd,$email));
	}
	
}

?>