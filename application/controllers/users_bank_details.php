<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_bank_details extends CI_Controller {

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

		$data["content"] = 'users_bank_details';
		$data["title"] = "Hire professional photographers";

		$this->load->model('account_profile_u');
		if(isset($this->session->userdata['logged_in'])){
			$lul = $this->session->userdata['logged_in'];
			$sudhu_user_id = $lul['user_id'];
			$data["usr_data"] = $this->account_profile_u->fetch_details($sudhu_user_id);
		}else{
			redirect('index.php/login','refresh');
		}
		$this->load->view("after_login/users_bank_details", $data);
		//$this->load->view('welcome_message');
	}

	public function insert_details()
	{
		$this->load->model('users_bank_details_u');

		$holder_name = $this->input->post('holder_name');
		$bank_name = $this->input->post('bank_name');
		$account_number = $this->input->post('account_number');
		$ifsc_code = $this->input->post('ifsc_code');
		$lul = $this->session->userdata['logged_in'];
		$sudhu_user_id = $lul['user_id'];

		$records = array('accounts_holder_name'=>$holder_name,'bank_name'=>$bank_name,'bank_account_number'=>$account_number,'ifsc_code'=>$ifsc_code,'user_id'=>$sudhu_user_id );
		$gte = $this->users_bank_details_u->insert_details($records);
		print_r($gte);
		
		if($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata("success", "Success , You Have Successfully Insert Bank Details.");
			}else{
				$this->session->set_flashdata("failed", "Something went wrong!");
			}
			redirect('index.php/users_bank_details','refresh');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */