<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct() {
        parent::__construct();

    }
    public function index() {

    	$this->layout->view('news/index');
    }

}