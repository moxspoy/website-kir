<?php
class Kritik extends CI_Controller {
    function __Construct()
    {
        parent ::__construct();
        $this->load->model('home_model');
    }

    function index() {
        $data['judul'] = 'Kirim Kritik di Tempatqu.com';
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('kritik', $data);
        $this->load->view('footer');
    }
 
    function kirim_kritik()
    {
        $data=array(
            'id_mentee'      => $_SESSION['id'],
            'judul'      => $this->input->post('judul'),
            'isi_kritik'          => $this->input->post('isi'),
            );
        $this->db->insert('kritik', $data);
        redirect('home/jadwal');

    function alertKritik($msg) {
        echo "<script type='text/javascript'>alert('$msg');";
        echo "window.location = '".base_url()."footer/tentang';";
        echo "</script>";      
    }

    function daftar_kritik() {
        $data['judul'] = 'Daftar Kritik di Tempatqu.com';
        $data['post_id'] = 1;
        $data['daftar_kritik'] = $this->home_model->daftar_kritik();
        $this->home_model->alert("Berhasil dikirim");
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('kritik_view', $data);
        $this->load->view('footer');
    }
}
}