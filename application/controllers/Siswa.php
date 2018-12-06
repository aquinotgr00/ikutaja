<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
    $this->load->view('_layout/header');
    $this->load->view('siswa');
    $this->load->view('_layout/footer');
  }
  
  public function single($id) {
    $data['id'] = $id;
    $this->load->view('_layout/header');
    $this->load->view('single_siswa', $data);
    $this->load->view('_layout/footer');
  }
}
