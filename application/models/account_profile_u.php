<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Deep 
* 	Description: Register model class

*/

class Account_profile_u extends CI_Model 
{
	public function fetch_details($sudhu_user_id)
	{
		
		$condition = "user_id =" . "'" .$sudhu_user_id. "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();

	}

	

}


?>