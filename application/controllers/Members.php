<?php 
class Members extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Members_model','mm');
	}
	
	public function login(){
		$data['members'] = $this->mm->getAllMembers();
		$this->layout->view('members/login',$data);
	}
	
	public function registration()
	{
		$this->layout->view('members/registration');
	}
	
}
