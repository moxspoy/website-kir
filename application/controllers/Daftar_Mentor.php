<?php

/**
*  
*/
class Daftar_Mentor extends CI_Controller
{
	
	function __Construct()
    {
        parent ::__construct();
        $this->load->model('home_model');
        $this->load->library("pagination");
    }

	function index() {
		$data['judul'] = 'MentorRing.com | Lesatkan Ajaran Islam Lewat Mentoring';
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('daftar_mentor', $data);
        $this->load->view('footer');
	}
}
?>