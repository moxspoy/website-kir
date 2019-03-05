<?php

/**
*  
*/
class Admin extends CI_Controller
{
	
	function __Construct()
    {
        parent ::__construct();
        $this->load->model('home_model');
        $this->load->library("pagination");
    }

	function index() {
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('login_admin');
        $this->load->view('footer');
    }
    
    function dashboard() {
        $data['pelatih'] = $this->home_model->get_pelatih();
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('dashboard_admin', $data);
        $this->load->view('footer');
    }

    function tambah() {
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('tambah_admin');
        $this->load->view('footer');
    }

    function insert() {
        
        $data=array(
            'username'      => $this->input->post('username'),
            'nama'          => $this->input->post('nama'),
            'alamat'        => $this->input->post('alamat'),
            'foto'          => $this->input->post('foto'),
            'biasa'          => $this->input->post('biasa')
            );
        $this->db->insert('pelatih', $data);
        redirect('admin/dashboard');
    }
}
?>