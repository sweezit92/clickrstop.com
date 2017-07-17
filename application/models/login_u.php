<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Deep 
* 	Description: Register model class

*/

class Login_u extends CI_Model 
{
	public function check_login($records)
	{
		$condition = "email =" . "'" . $records['email'] . "' AND " . "password =" . "'" . $records['password'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}
	}
}
?>