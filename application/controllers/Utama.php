<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {
  	   
	public function panduanPelaksana() {
		$data=array('title' => 'Ikutaja - Panduan Pelaksana',
					'landing' => 'landing/pageUtama/pagePanduanPelaksana');
		$this->load->view('layout/wrapper', $data);
	}	   

	public function cariPelaksana() {
		$data=array('title' => 'Ikutaja - Cari Pelaksana',
					'landing' => 'landing/pageUtama/pageCariPelaksana');
		$this->load->view('layout/wrapper', $data);
	}	

	public function panduanRelawan() {
		$data=array('title' => 'Ikutaja - Panduan Relawan',
					'landing' => 'landing/pageUtama/pagePanduanRelawan');
		$this->load->view('layout/wrapper', $data);
	}

	public function profilRelawan() {
		$data=array('title' => 'Ikutaja - Profil Relawan',
					'landing' => 'landing/pageUtama/pageProfilRelawan');
		$this->load->view('layout/wrapper', $data);
	}	 	
}

