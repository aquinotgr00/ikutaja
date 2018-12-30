<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	
	public function kontak() {
		$data=array('title' => 'Ikutaja - Kontak',
					'landing' => 'landing/pageInformasi/pageKontak',
					'xscript' => 'scripts/scriptHome');
		$this->load->view('layout/wrapper', $data);
	}
	public function policy() {
		$data=array('title' => 'Ikutaja - Privasi Policy',
					'landing' => 'landing/pageInformasi/pagePolicy',
					'xscript' => 'scripts/scriptHome');
		$this->load->view('layout/wrapper', $data);
	}
	public function karir() {
		$data=array('title' => 'Ikutaja - Karir',
					'landing' => 'landing/pageInformasi/pageKarir');
		$this->load->view('layout/wrapper', $data);
    }	
	public function faq() {
		$data=array('title' => 'Ikutaja - FAQ',
					'landing' => 'landing/pageInformasi/pageFAQ');
		$this->load->view('layout/wrapper', $data);
	}		
}

