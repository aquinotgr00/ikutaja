<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {	

	public function settingAdmin() {
		$data=array('title' => 'Ikutaja - Management Organizer',
					'page' => 'admin/pageSide/pageSettingAdmin',
					'kepala' => 'Setting',);
		$this->load->view('admin/pageLayout/wrapper', $data);
	}	
	
	// Volunteer
	public function accountVolunteer() {
		$data=array('title' => 'Ikutaja - Priviledge Volunteer',
					'page' => 'admin/pageSide/pageAccountVolunteer',
					'kepala' => 'Account',);
		$this->load->view('admin/pageLayout/wrapper', $data);
	}
	public function eventVolunteer() {
		$data=array('title' => 'Ikutaja - Management Volunteer',
					'page' => 'admin/pageSide/pageEventVolunteer',
					'kepala' => 'Events',);
		$this->load->view('admin/pageLayout/wrapper', $data);
	}
	// Volunteer

	// Organizer	
	public function accountOrganizer() {
		$data=array('title' => 'Ikutaja - Priviledge Organizer',
					'page' => 'admin/pageSide/pageAccountOrganizer',
					'kepala' => 'Account',);
		$this->load->view('admin/pageLayout/wrapper', $data);
	}
	public function eventOrganizer() {
		$data=array('title' => 'Ikutaja - Management Organizer',
					'page' => 'admin/pageSide/pageEventOrganizer',
					'kepala' => 'Events',);
		$this->load->view('admin/pageLayout/wrapper', $data);
	}	
	// Organizer	
}
