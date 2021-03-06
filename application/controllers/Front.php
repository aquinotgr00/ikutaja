<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Event_model');
    }
	
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
	public function teams() {
		$data=array('title' => 'Ikutaja - Team',
					'page' => 'pages/public/pageTeams/pageTeams');
		$this->load->view('layout/wrapper', $data);
	}
	public function aquino() {
		$data=array('title' => 'Ikutaja - Aquino',
					'page' => 'pages/public/pageTeams/pageAquino');
		$this->load->view('layout/wrapper', $data);
	}
	public function deyan() {
		$data=array('title' => 'Ikutaja - Deyan',
					'page' => 'pages/public/pageTeams/pageDeyan');
		$this->load->view('layout/wrapper', $data);
	}
	public function hilmi() {
		$data=array('title' => 'Ikutaja - Hilmi',
					'page' => 'pages/public/pageTeams/pageHilmi');
		$this->load->view('layout/wrapper', $data);
	}
	public function rizal() {
		$data=array('title' => 'Ikutaja - Rizal',
					'page' => 'pages/public/pageTeams/pageRizal');
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
						'page' => 'pages/public/pageJadiPelaksana',
						'xscript' => 'scripts/scriptJadiPelaksana');
			$this->load->view('layout/wrapper', $data);
	}	   
	public function jadiRelawan() {
			$data=array('title' => 'Ikutaja - Jadi Relawan',
						'page' => 'pages/public/pageJadiRelawan',
						'xscript' => 'scripts/scriptJadiRelawan');
			$this->load->view('layout/wrapper', $data);
	}	

	// Event
	public function events() {
			$data=array('title' => 'Ikutaja - Semua Event',
						'page' => 'pages/public/pageEvents',
						'xscript' => 'scripts/scriptPageEvents');
			$this->load->view('layout/wrapper', $data);
	}	    
	
	public function eventDetail($id) {
		$event = $this->Event_model->getSingle($id);
		$data=array('title' => 'Ikutaja - Detail Event',
					'event' => $event,
					'page' => 'pages/public/pageEventDetail');
		$this->load->view('layout/wrapper', $data);
	}
    // Event

	public function galeri() {
		$data=array('title' => 'Ikutaja - Galeri',
					'page' => 'pages/public/pageGaleri');
		$this->load->view('layout/wrapper', $data);
	}		
	
	public function manual() {
		$data=array('title' => 'Ikutaja - Manual',
					'page' => 'pages/public/pageManual');
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
