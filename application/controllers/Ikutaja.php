<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ikutaja extends CI_Controller {

	public function index() {
		$data=array('title' => 'Ikutaja - Jadilah yang terbaik',
					'page' => 'pages/public/pageHome',
					'xscript' => 'scripts/scriptHome');
		$this->load->view('layout/wrapper', $data);
	}		
}

