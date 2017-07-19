<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_service extends CI_Controller {

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
		$data["content"] = 'add_service';
		$data["title"] = "Hire professional photographers";
		
		//$this->load->view('welcome_message');

		$this->load->model('account_profile_u');
		if(isset($this->session->userdata['logged_in'])){
			$lul = $this->session->userdata['logged_in'];
			$sudhu_user_id = $lul['user_id'];
			$data["usr_data"] = $this->account_profile_u->fetch_details($sudhu_user_id);
		}else{
			redirect('index.php/login','refresh');
		}
		$this->load->view("module/add_service", $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */