<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Deep 
* 	Description: Register model class

*/

class Edit_user extends CI_Model 
{
	public function edit_details($get_result)
	{
		$condition = "user_id =" . "'" .$get_result. "'";
		$this->db->where('id', $_POST['id']);
		$this->db->update('tbl_user', $data);

		return $flag;
	}
}
?>