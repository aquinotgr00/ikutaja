<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organizations extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function dashboard() {
		// $organization = $this->User_model->get($user_id);
		$data=array('title' => 'Ikutaja - Dashboard Organizations',
			'page' => 'pages/pelaksana/pageDashboard',
			'xscript' => 'scripts/scriptOrganizationsDashboard');
		$this->load->view('layout/wrapper', $data);
	}		
}
