<?php
class Footer extends CI_Controller {
    function __Construct()
    {
        parent ::__construct();
        $this->load->model('home_model');
    }
 
    function tentang()
    {
        $data['judul'] = 'Tempatqu | Best place to find the place you need';
        $data['post_id'] = 1;
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('footer/tentang');
        $this->load->view('footer');
    }
    function karir()
    {
        $data['judul'] = 'Tempatqu | Best place to find the place you need';
        $data['post_id'] = 1;
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('footer/karir');
        $this->load->view('footer');
    }
    function kegiatan()
    {
        $data['judul'] = 'Tempatqu | Best place to find the place you need';
        $data['post_id'] = 1;
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('footer/kegiatan');
        $this->load->view('footer');
    }
    function bantuan()
    {
        $data['judul'] = 'Tempatqu | Best place to find the place you need';
        $data['post_id'] = 1;
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('footer/bantuan');
        $this->load->view('footer');
    }
    function syarat()
    {
        $data['judul'] = 'Tempatqu | Best place to find the place you need';
        $data['post_id'] = 1;
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('footer/syarat');
        $this->load->view('footer');
    }
    function kebijakan()
    {
        $data['judul'] = 'Tempatqu | Best place to find the place you need';
        $data['post_id'] = 1;
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('footer/kebijakan');
        $this->load->view('footer');
    }
    function keamanan()
    {
        $data['judul'] = 'Tempatqu | Best place to find the place you need';
        $data['post_id'] = 1;
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('footer/keamanan');
        $this->load->view('footer');
    }
    function pengguna()
    {
        $data['judul'] = 'Tempatqu | Best place to find the place you need';
        $data['post_id'] = 1;
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('footer/pengguna');
        $this->load->view('footer');
    }


}