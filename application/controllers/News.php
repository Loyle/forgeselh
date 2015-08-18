<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->model('News_model','nm');
    }
    public function index() {
    	$data['news'] = $this->nm->getNews('10');
    	$this->layout->view('news/index',$data);
    }

}