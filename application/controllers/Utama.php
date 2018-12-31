<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {
  	   
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

