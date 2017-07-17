<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Deep 
* 	Description: Register model class

*/

class Account_fetch extends CI_Model 
{
	public function fetch_details($records)
	{
		
		$this->db->where('user_id', $records['user_id']);
		$this->db->update('users', $data);

		$query = $this->db->get();
		return $query->result();

	}
}
?>