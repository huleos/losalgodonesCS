<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		$data['title'] = 'Welcome to Los Algodones "Coming soon"';
		$data['description'] = 'Here is the description';
		$data['content'] = 'pages/home';

		$this->load->view('layout/base', $data);
	}

}