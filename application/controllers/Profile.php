<?php
class Profile extends CI_Controller{
 
    function __Construct()
    {
        parent ::__construct();
        $this->load->model('profile_model');
    }
 
    function index()
    {
        $data['profile'] = $this->profile_model->get_profile();
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('profile_view', $data);
        $this->load->view('footer');
    }


    function save(){
        $nmfile = "profile_".time(); 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['file_name'] = $nmfile;
        $this->load->library('upload', $config);

        if( md5($this->input->post('pass')) == $this->session->userdata('password')){
            if($_FILES['dokumen']['name']){
                if ($this->upload->do_upload('dokumen')){
                   
                    $data = array(
                        'email'      =>  $this->input->post('email'),
                        'nama'       =>  $this->input->post('nama'),
                        'alamat'     =>  $this->input->post('alamat'),
                        'telp'       =>  $this->input->post('telp'),
                        'foto'       =>  base_url("uploads/").$this->upload->file_name
                    );
                    $this->profile_model->save_profile($data);
                    $this->load->view('profile_view', $this->profile_model->alert("Update Sukses"));

                }else{
                      $this->load->view('profile_view', $this->profile_model->alert("Update gagal, ulangi kembali"));
                }
            }else{
                $data = array(
                        'email'      =>  $this->input->post('email'),
                        'nama'       =>  $this->input->post('nama'),
                        'alamat'     =>  $this->input->post('alamat'),
                        'telp'       =>  $this->input->post('telp')
                    );
                    $this->profile_model->save_profile($data);
                    $this->load->view('profile_view', $this->profile_model->alert("Update Sukses"));

            }
        }else{
            $this->load->view('profile_view', $this->profile_model->alert("Passwoord salah, silahkan masukan password yang benar.."));
        }
    }
}