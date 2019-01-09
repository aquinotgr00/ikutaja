<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer extends CI_Controller {

	public function dashboard() {
		$data=array('title' => 'Ikutaja - Dashboard Volunteer',
			'page' => 'pages/relawan/pageDashboard',
			'xscript' => 'scripts/scriptVolunteerDashboard');
		$this->load->view('layout/wrapper', $data);
	}		
}
