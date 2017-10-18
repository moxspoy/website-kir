<?php
class Kritik extends CI_Controller {
    function __Construct()
    {
        parent ::__construct();
        $this->load->model('home_model');
    }
 
    function kirim_kritik()
    {
        $data=array(
            'nama'      => $this->input->post('nama'),
            'email'         => $this->input->post('email'),
            'judul'      => $this->input->post('judul'),
            'isi'          => $this->input->post('isi'),
            );
        $this->db->insert('kritik', $data);
        $this->load->view('footer/tentang', $this->alertKritik("Kritik anda berhasil disampaikan :)"));
    }

    function alertKritik($msg) {
        echo "<script type='text/javascript'>alert('$msg');";
        echo "window.location = '".base_url()."footer/tentang';";
        echo "</script>";      
    }

    function daftar_kritik() {
        $data['judul'] = 'Daftar Kritik di Tempatqu.com';
        $data['post_id'] = 1;
        $data['daftar_kritik'] = $this->home_model->daftar_kritik();
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('kritik_view', $data);
        $this->load->view('footer');
    }
}