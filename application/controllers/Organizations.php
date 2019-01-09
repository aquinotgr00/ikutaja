<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organizations extends CI_Controller {

	public function dashboard() {
		$data=array('title' => 'Ikutaja - Dashboard Organization',
          'page' => 'pages/pelaksana/pageDashboard',
          'authMiddleware' => true,
					'xscript' => 'scripts/scriptOrganizationsDashboard');
		$this->load->view('layout/wrapper', $data);
	}		
}
