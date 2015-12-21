<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {
	public function index(){	
		$this->load->view('test');
	}
	public function coment(){
		$arg = $this->input->get('arg');
		$this->load->model('model');
		echo (json_encode($this->model->keyup($arg)));
		echo $arg;
	}
}
