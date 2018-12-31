<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    	
	public function tentang() {
		$data=array('title' => 'Ikutaja - Tentang',
					'page' => 'pages/public/pageTentang');
		$this->load->view('layout/wrapper', $data);
	}	
	
	public function panduan() {
		$data=array('title' => 'Ikutaja - Panduan',
					'page' => 'pages/public/pagePanduan');
		$this->load->view('layout/wrapper', $data);
	}	

	/* Start Halaman Team */
	public function team() {
		$data=array('title' => 'Ikutaja - Team',
					'page' => 'pages/public/pageTeam');
		$this->load->view('layout/wrapper', $data);
	}
	public function teamDetail1() {
		$data=array('title' => 'Ikutaja - Team',
					'page' => 'pages/public/pageTeamDetail/public/pageTeamDetail1');
		$this->load->view('layout/wrapper', $data);
	}
	/* End Halaman Team */		

	public function misi() {
		$data=array('title' => 'Ikutaja - Misi',
					'page' => 'pages/public/pageMisi');
		$this->load->view('layout/wrapper', $data);
	}	
}

