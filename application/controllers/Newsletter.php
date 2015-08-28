<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('newsletter_model');
	}

	public function index(){
		$data['title'] = 'Welcome to Los Algodones "Coming soon"';
		$data['description'] = 'Here is the description';
		$data['content'] = 'pages/newsletter';

		$this->load->view('layout/base', $data);
	}

	public function send(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			
			$data['title'] = 'Error on the form, please check that your information is correct :(';
			$data['description'] = 'Error on the form, please check that your information is correct :(';
			$data['content'] = 'pages/newsletter';

			$this->load->view('layout/base', $data);

		}
		else{

			$this->newsletter_model->register();

			$name = $this->input->post('name');
			$email = $this->input->post('email');

			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);

			$mydata = array('Cname' => $name, 'Cmail' => $email);
    	$message = $this->load->view('html_newsletter_confirmation', $mydata, true);   

			$this->email->from('noreply@losalgodones.co', 'Los Algodones');
			$this->email->to($email);
			$this->email->bcc('juliocesar@sanimedicaltourism.com');

			$this->email->subject('Welcome '.$name );
			$this->email->message($message);

			if ($this->email->send()) {
				
				$data['title'] = 'Has been registered successfully ;)';
				$data['description'] = 'Has been registered successfully ;)';
				$data['content'] = 'pages/newsletter_confirmation';

				$this->load->view('layout/base', $data);

			}
			else{
				$data = array('msgAlert' => 'Email could not be sent, please try later!');
				$data['title'] = 'Error, email could not be sent :(';
				$data['description'] = 'Error, email could not be sent :(';
				$data['content'] = 'pages/newsletter';

				$this->load->view('layout/base', $data);
			}

		}

	}

}
