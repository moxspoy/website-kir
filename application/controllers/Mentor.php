<?php

/**
*  
*/
class Mentor extends CI_Controller
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
        $this->load->view('home_mentor', $data);
        $this->load->view('footer');
	}

    function login() {
        $data['judul'] = 'MentorRing.com | Lesatkan Ajaran Islam Lewat Mentoring';
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('login_mentor', $data);
        $this->load->view('footer');
    }

    function login_action()
    {   
        
                $this->form_validation->set_rules('nrm', 'NRM', 'trim|required|min_length[3]');
                $this->form_validation->set_rules('password', 'Password', 'required');

                if($this->form_validation->run()) {
                    $sql = "select * from mentor where nrm = ? and password = ?";
                    $query = $this->db->query($sql, array($this->input->post('nrm'), md5($this->input->post('password'))));
                    if($query->num_rows()==0) {
                        // user not found
                         $this->load->view('login_mentor', $this->home_model->alert("nrm/Password tidak ditemukan"));

                    } else {
                        $row = $query->row();
                        $this->session->set_userdata('id', $row->id);
                        $this->session->set_userdata('username', $row->username);
                        $this->session->set_userdata('nama', $row->nama);
                        $this->session->set_userdata('nrm', $row->nrm);
                        $this->session->set_userdata('no_hp', $row->no_hp);
                        $this->session->set_userdata('password', $row->password);
                        $data['judul'] = 'MentorRing.com | Lesatkan Ajaran Islam Lewat Mentoring';
                        $data['post'] = $this->home_model->get_post();
                        redirect('mentor');
                    }
                } else {
                    if($this->input->post('nrm') == "" || $this->input->post('password') == ""){
                        $this->load->view('login_mentor', $this->home_model->alert("Field nrm atau password tidak boleh kosong"));
                    }else if(strlen($this->input->post('nrm')) <3 ){
                        $this->load->view('login_mentor', $this->home_model->alert("nrm harus lebih dari 3 character"));
                    }
                }
           
        
    }

    function jadwal() {
        $data['judul'] = 'MentorRing.com | Lesatkan Ajaran Islam Lewat Mentoring';
        $data['mentoring'] = $this->home_model->getDataMentoring();
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('jadwal_mentor', $data);
        $this->load->view('footer');
    }

    function delete($id) {
        echo 'delet'.$id;
    }
}
?>