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

		$data["get_categories"] = $this->get_categories();
		$this->load->view("module/add_service", $data);
	}

	public function get_categories(){
		$this->load->model('categories_u');
		$cat = $this->categories_u->get_cat();
		return $cat;
	}

	public function insert_service(){
		$this->load->model('add_services_u');

		$category = $this->input->post('category');
		$item_title = $this->input->post('item_title');
		$item_description = $this->input->post('item_description');
		$item_price = $this->input->post('item_price');
		$status = "pending";
		$data = time();
		$lul = $this->session->userdata['logged_in'];
		$user_id = $lul['user_id'];
		
		$count_pic = count($_FILES['picture']['name']);

		if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'profile_pic/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
					$records=array('fname'=>$fname,'lname'=>$lname,'email'=>$email,'city'=>$city,'about'=>$about,'profile_picture'=> 'profile_pic/'.$picture.'');
                }else{
                    $picture = '';
					$records=array('fname'=>$fname,'lname'=>$lname,'email'=>$email,'city'=>$city,'about'=>$about);
                }
		}else{
			$records=array('fname'=>$fname,'lname'=>$lname,'email'=>$email,'city'=>$city,'about'=>$about);
		}
			
		redirect('index.php/register','refresh');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */