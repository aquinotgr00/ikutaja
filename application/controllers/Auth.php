<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  	   
	public function login() {
		$data=array('title' => 'Ikutaja - Login',
					'landing' => 'landing/pageLogin');
		$this->load->view('layout/wrapper', $data);
    }	
}

