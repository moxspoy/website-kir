<?php

/**
*  
*/
class Berita extends CI_Controller
{
	
	function __Construct()
    {
        parent ::__construct();
        $this->load->model('home_model');
        $this->load->library("pagination");
    }

	function index() {
		$data['judul'] = 'MentorRing.com | Lesatkan Ajaran Islam Lewat Mentoring';
        $data['artikel'] = $this->home_model->get_artikel();
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('berita', $data);
        $this->load->view('footer');
	}
}
?>