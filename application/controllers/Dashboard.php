<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
    }

    public function admin()
    {
        if($this->admin->logged_id())
        {

            $data=array('title' => 'Ikutaja - Dashboard Admin',
					'page' => 'admin/pageDashboardAdmin',
					'kepala' => 'Dashboard',);
		    $this->load->view('admin/pageLayout/wrapper', $data);        

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login/admin");

        }
    }

    public function logout()
    {
        $this->session->sess_destroy();        
        redirect('logout/admin');
    }

}