<?php

Class CI_Layout {



	public function __construct(){

		$this->CI =& get_instance();
		$this->CI->config->load('config');
		$this->CI->load->helper('url');
		$this->CI->template = "";
		
		log_message('DEBUG', 'Layout Library initialized');
		}
	

	public function view($page, $data = NULL){

		$this->CI->load->view($this->CI->template.'/header', $data);
		
		$this->CI->load->view($this->CI->template.'/views/'.$page, TRUE);
		
		$this->CI->load->view($this->CI->template.'/footer');

	}
}