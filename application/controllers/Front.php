<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	
	public function index() {
		$data=array('title' => 'Ikutaja - Jadilah yang terbaik',
					'page' => 'pages/public/pageHome',
					'xscript' => 'scripts/scriptHome');
		$this->load->view('layout/wrapper', $data);
	}

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

	public function kontak() {
		$data=array('title' => 'Ikutaja - Kontak',
					'page' => 'pages/public/pageKontak');					
		$this->load->view('layout/wrapper', $data);
	}
	public function policy() {
		$data=array('title' => 'Ikutaja - Privasi Policy',
					'page' => 'pages/public/pagePolicy');
		$this->load->view('layout/wrapper', $data);
	}
	public function karir() {
		$data=array('title' => 'Ikutaja - Karir',
					'page' => 'pages/public/pageKarir');
		$this->load->view('layout/wrapper', $data);
    }	
	public function faq() {
		$data=array('title' => 'Ikutaja - FAQ',
					'page' => 'pages/public/pageFAQ');
		$this->load->view('layout/wrapper', $data);
	}

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

	public function panduanPelaksana() {
		$data=array('title' => 'Ikutaja - Panduan Pelaksana',
					'page' => 'pages/public/pagePanduanPelaksana');
		$this->load->view('layout/wrapper', $data);
	}	   

	public function cariPelaksana() {
		$data=array('title' => 'Ikutaja - Cari Pelaksana',
					'page' => 'pages/public/pageCariPelaksana');
		$this->load->view('layout/wrapper', $data);
	}	

	public function panduanRelawan() {
		$data=array('title' => 'Ikutaja - Panduan Relawan',
					'page' => 'pages/public/pagePanduanRelawan');
		$this->load->view('layout/wrapper', $data);
	}

	public function profilRelawan() {
		$data=array('title' => 'Ikutaja - Profil Relawan',
					'page' => 'pages/public/pageProfilRelawan');
		$this->load->view('layout/wrapper', $data);
	}

}
