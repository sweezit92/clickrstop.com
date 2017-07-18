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
		if(isset($this->session->userdata['logged_in'])){
			$lul = $this->session->userdata['logged_in'];
			$sudhu_user_id = $lul['user_id'];
			$data["usr_data"] = $this->account_profile_u->fetch_details($sudhu_user_id);
			$this->load->view("after_login/account_profile", $data);
		}else{
			redirect('index.php/login','refresh');
		}
	}

	public function edit_details()
	{
		$this->load->model('account_profile_u');

		$fname = $this->input->post('first_name');
		$lname = $this->input->post('last_name');
		$email = $this->input->post('new_email');
		$city = $this->input->post('addr');
		$about = $this->input->post('about_z');
		
		if(!empty($_FILES['picture']['name'])){
				echo "sss";
                $config['upload_path'] = 'profile_pic/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
		}else{
			$picture = '';
		}
		
		//print_r($uploadData);

		if(isset($this->session->userdata['logged_in'])){
			
			$lul = $this->session->userdata['logged_in'];
			$user_id = $lul['user_id'];
			$records=array('fname'=>$fname,'lname'=>$lname,'email'=>$email,'city'=>$city,'about'=>$about,'profile_picture'=> 'profile_pic/'.$picture.'');
			$update_user_data = $this->account_profile_u->edit_user($user_id,$records);
			if($update_user_data)
			{
				$this->session->set_flashdata("success", "Success , Your data updated successfully.");
				$this->session->set_flashdata("user");
			}else{
				$this->session->set_flashdata("failed", "Something went wrong!");
			}
		}else{
			redirect('index.php/login','refresh');	
		}
		redirect('index.php/account_profile','refresh');	

	}

	public function change_password()
	{
		$this->load->model('account_profile_u');
		$lul = $this->session->userdata['logged_in'];
		$user_id = $lul['user_id'];
		$old_pass = $this->input->post('old_password');
		$records = array('password'=>$old_pass);
		//print_r($records);
		$get_old_password = $this->account_profile_u->check_password($user_id,$records['password']);
		if(!empty($get_old_password)){
			$lul = $this->session->userdata['logged_in'];
			$user_id = $lul['user_id'];
			$nw_password = $this->input->post('new_password');
			$pass_rcd=array('password'=>$nw_password);
			print_r($records);
			$update_user_password = $this->account_profile_u->update_password($user_id,$pass_rcd);
			if($update_user_password)
			{
				$this->session->set_flashdata("success", "Success , Your password updated successfully.");
				$this->session->set_flashdata("password");
			}else{
				$this->session->set_flashdata("failed", "Something went wrong!");
			}
		}else{
			
			$this->session->set_flashdata("failed", "Please check your password!");
		} 
			redirect('index.php/account_profile','refresh');	
			
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */