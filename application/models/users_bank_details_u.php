<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Deep 
* 	Description: Register model class

*/

class Users_bank_details_u extends CI_Model 
{
	public function insert_details($records)
	{
		$flag=$this->db->insert('account_details', $records);
		return $flag;
	}

	
}
?>