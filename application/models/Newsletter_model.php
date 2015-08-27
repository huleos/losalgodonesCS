<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function register(){
		$data=array(
			'nameUser'=>$this->input->post('name'),
			'emailUser'=>$this->input->post('email')
		);
		$this->db->insert('newsUsers',$data);
		return true;
	}

}