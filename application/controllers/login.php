<?php  
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller{
	
	    public function __construct()
		
		{
	 
			parent:: __construct();
					$this->load->model('login_model'); 
			
		}
		public function sign_up()
	{
		$data=array();
		$data['maincontent']=$this->load->view('sign_up','',true);
		$data['title']="sign up";
				 $data['header']='true';
		$this->load->view('home',$data);
	}
	public function save_user(){
	
	$data=array();
	$data['first_name']=$this->input->post('first_name',true);
	$data['last_name']=$this->input->post('last_name',true);
	$data['email_address']=$this->input->post('email_address',true);
	$data['password']=$this->input->post('password',true);
	  $data['password']=  md5($data['password']);
	$data['address']=$this->input->post('address',true);
	$data['mobile_no']=$this->input->post('mobile_no',true);
	$data['city']=$this->input->post('city',true);
	$data['gender']=$this->input->post('gender',true);
	$data['country']=$this->input->post('country',true);
	$data['zip_code']=$this->input->post('zip_code',true);
	$result=$this->login_model->select_user_by_email_address($data['email_address']);
	if($result){
		$sdata=array();
		$sdata['message']="User Alrady Registered";
            $this->session->set_userdata($sdata);
            redirect("index.php/login/sign_up");
		}
	
	else{
    $result=$this->login_model->save_user_info($data);
	 
	redirect("index.php/login/save_successful");
}
	}
	public  function save_successful(){
		$data=array();
		
		$data['maincontent']="<h2> This information loaded successfully</h2>";
		$this->load->view('home',$data);
	}
	
	
	public function user_login()
	{
		$data=array();
		$data['maincontent']=$this->load->view('login','',true);
		$data['title']="login";
				 $data['header']='true';
 		$this->load->view('home',$data);
	}	
	public function check_login(){
		$email_address=$this->input->post('email_address',true);
		$password=$this->input->post('password',true);
		$result=$this->login_model->check_info($email_address,$password);
		$sdata=array();
		if($result){
		$sdata['full_name']=$result->first_name.' '.$result->last_name;
		$sdata['user_id']=$result->user_id;
		$sdata['login_status']=TRUE;
	    $this->session->set_userdata($sdata);
		redirect("blogger","refresh");
		}
		else{
				
			$sdata['exception']="Invalid User Data Password !";
			$this->session->set_userdata($sdata);
				
			redirect("login/user_login");
		}
	}
}
		

?>