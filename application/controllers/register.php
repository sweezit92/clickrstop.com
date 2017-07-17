<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$data["content"] = 'register';
		$data["title"] = "Register";
		$this->load->view("before_login/register", $data);
		//$this->load->view('welcome_message');
	}

	public function save_register(){
		$this->load->model('register_u');

		$type = $this->input->post('type');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$password = "12345";
		$city = "";
		$about = "";
		$date = time();
		$status = "active";
		$image = "profile_pic/user-icon-png-pnglogocom.png";

        $this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','is_unique[users.email]');

		if($this->form_validation->run() == False){
			$this->session->set_flashdata("failed", "Email already exists");
		}else{
			$records=array('user_type'=>$type,'fname'=>$fname,'lname'=>$lname,'email'=>$email,'password'=>$password,'city'=>$city,'about'=>$about,'date'=>$date,'status'=>$status,'profile_picture'=>$image);
			$this->register_u->save_register($records);
			if($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata("success", "Success , Check email for login credentials.");
			}else{
				$this->session->set_flashdata("failed", "Something went wrong!");
			}
		}
			
		redirect('index.php/register','refresh');
	}

	

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */