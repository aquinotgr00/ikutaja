<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	
	public function kontak() {
		$data=array('title' => 'Ikutaja - Kontak',
					'page' => 'pages/public/pageKontak',
					'xscript' => 'scripts/scriptHome');
		$this->load->view('layout/wrapper', $data);
	}
	public function policy() {
		$data=array('title' => 'Ikutaja - Privasi Policy',
					'page' => 'pages/public/pagePolicy',
					'xscript' => 'scripts/scriptHome');
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
}

