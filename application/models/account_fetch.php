<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Deep 
* 	Description: Register model class

*/

class Account_fetch extends CI_Model 
{
	public function fetch_details($get_result)
	{
		$condition = "user_id =" . "'" .$get_result. "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();

	}
}
?>