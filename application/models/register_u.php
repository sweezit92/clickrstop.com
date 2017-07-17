<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Deep 
* 	Description: Register model class

*/

class Register_u extends CI_Model 
{
	public function save_register($records)
	{
		$flag=$this->db->insert('users', $records);
		return $flag;
	}
}
?>