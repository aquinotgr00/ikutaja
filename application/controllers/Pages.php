<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function jadiPelaksana() {
			$data=array('title' => 'Ikutaja - Jadi Pelaksana',
						'page' => 'pages/public/pageJadiPelaksana');
			$this->load->view('layout/wrapper', $data);
	}	   
	public function jadiRelawan() {
			$data=array('title' => 'Ikutaja - Jadi Relawan',
						'page' => 'pages/public/pageJadiRelawan');
			$this->load->view('layout/wrapper', $data);
	}	

	// Event
	public function events1() {
			$data=array('title' => 'Ikutaja - Semua Event',
						'page' => 'pages/public/pageEvents1');
			$this->load->view('layout/wrapper', $data);
	}
	// Event
    
	// Semua Event1
	public function eventsDetail1() {
		$data=array('title' => 'Ikutaja - Detail Event',
					'page' => 'pages/public/pageEventsDetail1');
		$this->load->view('layout/wrapper', $data);
	}	
    // Semua Event1

	public function galeri() {
		$data=array('title' => 'Ikutaja - Galeri',
					'page' => 'pages/public/pageGaleri');
		$this->load->view('layout/wrapper', $data);
	}		
	public function blog() {
		$data=array('title' => 'Ikutaja - Blog',
					'page' => 'pages/public/pageBlog');
		$this->load->view('layout/wrapper', $data);
	}			
	
}

