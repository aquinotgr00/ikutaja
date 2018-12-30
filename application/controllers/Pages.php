<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function jadiPelaksana() {
			$data=array('title' => 'Ikutaja - Jadi Pelaksana',
						'landing' => 'landing/pageJadiPelaksana');
			$this->load->view('layout/wrapper', $data);
	}	   
	public function jadiRelawan() {
			$data=array('title' => 'Ikutaja - Jadi Relawan',
						'landing' => 'landing/pageJadiRelawan');
			$this->load->view('layout/wrapper', $data);
	}	

	// Event
	public function events1() {
			$data=array('title' => 'Ikutaja - Semua Event',
						'landing' => 'landing/pageEvents/pageEvents1');
			$this->load->view('layout/wrapper', $data);
	}	
	public function events2() {
			$data=array('title' => 'Ikutaja - Semua Event',
						'landing' => 'landing/pageEvents/pageEvents2');
			$this->load->view('layout/wrapper', $data);
	}
	public function events3() {
			$data=array('title' => 'Ikutaja - Semua Event',
						'landing' => 'landing/pageEvents/pageEvents3');
			$this->load->view('layout/wrapper', $data);
	}
	public function events4() {
			$data=array('title' => 'Ikutaja - Semua Event',
						'landing' => 'landing/pageEvents/pageEvents4');
			$this->load->view('layout/wrapper', $data);
	}
	public function events5() {
			$data=array('title' => 'Ikutaja - Semua Event',
						'landing' => 'landing/pageEvents/pageEvents5');
			$this->load->view('layout/wrapper', $data);
	}
	// Event
    
    // Semua Event1
    public function eventsDetail1() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail1/pageEventsDetail1');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail2() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail1/pageEventsDetail2');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail3() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail1/pageEventsDetail3');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail4() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail1/pageEventsDetail4');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail5() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail1/pageEventsDetail5');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail6() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail1/pageEventsDetail6');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail7() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail1/pageEventsDetail7');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail8() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail1/pageEventsDetail8');
		$this->load->view('layout/wrapper', $data);
	}	
	public function eventsDetail9() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'landing' => 'landing/pageEventsDetail1/pageEventsDetail9');
		$this->load->view('layout/wrapper', $data);
	}		
    // Semua Event1

	public function galeri() {
		$data=array('title' => 'Ikutaja - Galeri',
					'landing' => 'landing/pageGaleri');
		$this->load->view('layout/wrapper', $data);
	}		
	public function blog() {
		$data=array('title' => 'Ikutaja - Blog',
					'landing' => 'landing/pageBlog');
		$this->load->view('layout/wrapper', $data);
	}			
	
}

