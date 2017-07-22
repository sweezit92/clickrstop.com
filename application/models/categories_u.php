<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Deep 
* 	Description: Register model class

*/

class Categories_u extends CI_Model 
{
	public function get_cat()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
}
?>