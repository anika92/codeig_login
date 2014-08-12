<?php

/**
 * 
 */
class blogger extends CI_Controller {
	
	public function __construct($argument) {
	parent::__construct();
	
	}
	public function index(){
		$data=array();
		$data['maincontent']=$this->load->view('welcome','',true);
		$data['title']=$this->session->userdata('full_name');	
		  $data['header']='true';
	$data['archive']='true';
		$this->load->view('home',$data);
		
	}
}


?>