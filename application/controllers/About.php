<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    	
	public function tentang() {
		$data=array('title' => 'Ikutaja - Tentang',
					'landing' => 'landing/pageTentang');
		$this->load->view('layout/wrapper', $data);
	}	
	
	public function panduan() {
		$data=array('title' => 'Ikutaja - Panduan',
					'landing' => 'landing/pagePanduan');
		$this->load->view('layout/wrapper', $data);
	}	

	/* Start Halaman Team */
	public function team() {
		$data=array('title' => 'Ikutaja - Team',
					'landing' => 'landing/pageTeam');
		$this->load->view('layout/wrapper', $data);
	}
	public function teamDetail1() {
		$data=array('title' => 'Ikutaja - Team',
					'landing' => 'landing/pageTeamDetail/pageTeamDetail1');
		$this->load->view('layout/wrapper', $data);
	}
	public function teamDetail2() {
		$data=array('title' => 'Ikutaja - Team',
					'landing' => 'landing/pageTeamDetail/pageTeamDetail2');
		$this->load->view('layout/wrapper', $data);
	}
	public function teamDetail3() {
		$data=array('title' => 'Ikutaja - Team',
					'landing' => 'landing/pageTeamDetail/pageTeamDetail3');
		$this->load->view('layout/wrapper', $data);
	}
	public function teamDetail4() {
		$data=array('title' => 'Ikutaja - Team',
					'landing' => 'landing/pageTeamDetail/pageTeamDetail4');
		$this->load->view('layout/wrapper', $data);
	}
	/* End Halaman Team */		

	public function misi() {
		$data=array('title' => 'Ikutaja - Misi',
					'landing' => 'landing/pageMisi');
		$this->load->view('layout/wrapper', $data);
	}	
}

