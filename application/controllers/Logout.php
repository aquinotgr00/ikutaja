<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

    public function admin() {
		$data=array('title' => 'Ikutaja - Logout Admin',				
					'kepala' => 'Dashboard',);
		$this->load->view('admin/pageLogoutAdmin', $data);
	}

}