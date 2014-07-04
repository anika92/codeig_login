<?php  
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller{
	
	    public function __construct()
		{  
			parent:: __construct();
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
	$data['first_name']=$this->input->post('email_address',true);
	$data['first_name']=$this->input->post('password',true);
	$data['first_name']=$this->input->post('address',true);
	$data['first_name']=$this->input->post('mobile_no',true);
	$data['first_name']=$this->input->post('city',true);
	$data['first_name']=$this->input->post('gender',true);
	$data['first_name']=$this->input->post('country',true);
	$data['first_name']=$this->input->post('zip_code',true);
	$this->load->model('login_model');
        $this->login_model->save_user_info($data);
	
}
}
		

?>