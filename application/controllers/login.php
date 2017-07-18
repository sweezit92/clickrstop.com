<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
	function __construct()
	 {
	   parent::__construct();
	   $this->load->model('Login_u','',TRUE);
	  }
	public function index()
	{
		//$this->load->view('module/home');
		$data["content"] = 'login';
		$data["title"] = "Login";
		$this->load->view("before_login/login", $data);
		//$this->load->view('welcome_message');
	}
	
	public function login_check(){
		$this->load->model('Login_u');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$records=array('email'=>$email,'password'=>$password);
		$result = $this->Login_u->check_login($records);
		
		/*if ($result == true) {
			$session_data = array(
			'user_id' => $result[0]->user_id,
			);
			$this->session->set_userdata('logged_in', $session_data);
			$this->session->set_flashdata("success", "Success , Login successfully");
			redirect('index.php/login','refresh');
		}

		if ($result == false) {
			$this->session->set_flashdata("failed", "Invalid username or password");
			redirect('index.php/login','refresh');
		}*/

		if($result){
			 $sess_array = array();
			 foreach($result as $row)
			 {
			   $sess_array = array(
				 'user_id' => $row->user_id,
				 'email' => $row->email,
				 'user_type' => $row->user_type,
				 'fname' => $row->fname,
				 'lname' => $row->lname,
				 'city' => $row->city,
				 'profile_picture' => $row->profile_picture,
			   );
			   $this->session->set_userdata('logged_in', $sess_array);
			 }
			 $this->session->set_flashdata("success", "Success , Login successfully");
			 redirect('index.php/account_profile','refresh');
		}else{
			 $this->session->set_flashdata("failed", "Invalid username or password");
			 redirect('index.php/login','refresh');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('index.php/login','refresh'); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */