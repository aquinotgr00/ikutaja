<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Volunteer_model');
		$this->load->model('User_model');
	}

	public function login() {
		$data=array('title' => 'Ikutaja - Login Admin',
					'page' => 'admin/pageLoginAdmin',);
		$this->load->view('admin/pageLayout/relative', $data);
	}
	public function dashboard() {
		$data=array('title' => 'Ikutaja - Dashboard Admin',
					'page' => 'admin/pageDashboardAdmin',
					'kepala' => 'Dashboard',);
		$this->load->view('admin/pageLayout/wrapper', $data);
	}
	public function settingAdmin() {
		$data=array('title' => 'Ikutaja - Management Organizer',
					'page' => 'admin/pageSide/pageSettingAdmin',
					'kepala' => 'Setting',);
		$this->load->view('admin/pageLayout/wrapper', $data);
	}	
	
	// Volunteer
	public function accountVolunteer() {
		$volunteers = $this->Volunteer_model->all();
		$data=array('title' => 'Ikutaja - Priviledge Volunteer',
					'page' => 'admin/pageSide/pageAccountVolunteer',
					'volunteers' => $volunteers,
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
