<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ikutaja extends CI_Controller {

	public function index() {
		$data=array('title' => 'Ikutaja - Jadilah yang terbaik',
					'landing' => 'landing/pageHome',
					'xscript' => 'scripts/scriptHome');
		$this->load->view('layout/wrapper', $data);
	}
	public function tentang() {
		$data=array('title' => 'Ikutaja - Tentang',
					'landing' => 'landing/pageTentang');
		$this->load->view('layout/wrapper', $data);
	}	
	public function jadiRelawan() {
		$data=array('title' => 'Ikutaja - Jadi Relawan',
					'landing' => 'landing/pageJadiRelawan');
		$this->load->view('layout/wrapper', $data);
	}
	public function galeri() {
		$data=array('title' => 'Ikutaja - Galeri',
					'landing' => 'landing/pageGaleri');
		$this->load->view('layout/wrapper', $data);
	}	
	public function login() {
		$data=array('title' => 'Ikutaja - Login',
					'landing' => 'landing/pageLogin');
		$this->load->view('layout/wrapper', $data);
	}	
	public function blog() {
		$data=array('title' => 'Ikutaja - Semua Event',
					'landing' => 'landing/pageBlog');
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
					'landing' => 'landing/pageTeamDetail1');
		$this->load->view('layout/wrapper', $data);
	}
	public function teamDetail2() {
		$data=array('title' => 'Ikutaja - Team',
					'landing' => 'landing/pageTeamDetail2');
		$this->load->view('layout/wrapper', $data);
	}
	public function teamDetail3() {
		$data=array('title' => 'Ikutaja - Team',
					'landing' => 'landing/pageTeamDetail3');
		$this->load->view('layout/wrapper', $data);
	}
	public function teamDetail4() {
		$data=array('title' => 'Ikutaja - Team',
					'landing' => 'landing/pageTeamDetail4');
		$this->load->view('layout/wrapper', $data);
	}
	/* End Halaman Team */		


	/* Start Halaman Event */
	public function eventsAll() {
		$data=array('title' => 'Ikutaja - Semua Event',
					'landing' => 'landing/pageEventsAll');
		$this->load->view('layout/wrapper', $data);
	}
	public function eventsDetail1() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail1');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail2() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail2');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail3() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail3');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail4() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail4');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail5() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail5');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail6() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail6');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail7() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail7');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail8() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail8');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail9() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail9');
		$this->load->view('layout/wrapper', $data);
	}	
	/* End Halaman Events */

}

