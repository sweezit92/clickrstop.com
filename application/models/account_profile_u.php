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
	public function edit_user($user_id,$records)
	{
		//print_r($records);
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('users', $records);
		return true;
	}

	public function check_password($user_id,$records)
	{
		$condition = "user_id =" . "'" . $user_id . "' AND " . "password =" . "'" . $records . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}
	public function update_password($user_id,$pass_rcd)
	{
		$where = array('user_id' => $user_id,);
		$this->db->where($where);
		$query = $this->db->update('users', $pass_rcd);
		return true;

	}
}


?>