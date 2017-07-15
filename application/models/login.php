<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Deep 
* 	Description: Register model class

*/

class Login_user extends CI_Model 
{
	public function check_login($records)
	{
		$condition = "user_name =" . "'" . $records['email'] . "' AND " . "user_password =" . "'" . $records['password'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}
}
?>