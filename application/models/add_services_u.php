<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Deep 
* 	Description: Register model class

*/

class Add_services_u extends CI_Model 
{
	public function insert_service($records)
	{
		$flag=$this->db->insert('users', $records);
		return $flag;
	}

}
?>