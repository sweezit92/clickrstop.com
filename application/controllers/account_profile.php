<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_profile extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('module/home');
		$data["content"] = 'account_profile';
		$data["title"] = "Hire professional photographers";

		$this->load->model('account_profile_u');
		$lul = $this->session->userdata['logged_in'];
		$sudhu_user_id = $lul['user_id'];
		$data["usr_data"] = $this->account_profile_u->fetch_details($sudhu_user_id);


		$this->load->view("after_login/account_profile", $data);
		//$this->load->view('welcome_message');
	}

	/*public function edit_details()
	{
		$this->load->model('edit_user');

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$city =$this->input->post('addr');
		$about = $this->input->post('about');
		$lul = $this->session->userdata['logged_in'];
		$user_id = $lul['user_id'];
		$records=array('user_id'=>$user_id,'fname'=>$fname,'lname'=>$lname,'email'=>$email,'city'=>$city,'about'=>$about);
		$this->edit_user->edit_details($records);
		if($this->db->affected_rows() > 0)
		{
			$this->session->set_flashdata("success", "Success , Check email for login credentials.");
		}else{
			$this->session->set_flashdata("failed", "Something went wrong!");
		}
			

	}*/

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */