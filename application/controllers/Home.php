<?php
class Home extends CI_Controller{


 
    function __Construct()
    {
        parent ::__construct();
        $this->load->model('home_model');
        $this->load->library("pagination");
    }
 
    function index()
    {
        $data['judul'] = 'MentorRing.com | Lesatkan Ajaran Islam Lewat Mentoring';
        $data['post'] = $this->home_model->get_post();
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('home_view', $data);
        $this->load->view('footer');
    }
 
    function register()
    {   
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]|is_unique[users.username]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.username]');
        $this->form_validation->set_rules('nama','Nama','trim|required');
        $this->form_validation->set_rules('alamat','Alamat','trim|required');

         if($this->form_validation->run() == FALSE){
            //Views
           $this->load->view('home_view', $this->home_model->alert("Username/Email sudah digunakan"));

        } else {
            $data=array(
            'username'      => $this->input->post('username'),
            'email'         => $this->input->post('email'),
            'password'      => md5($this->input->post('password')),
            'nama'          => $this->input->post('nama'),
            'alamat'        => $this->input->post('alamat'),
            'telp'          => $this->input->post('telp')
            );

        $regist = $this->db->insert('users', $data);
        $sql = "select * from users where username = ? and password = ?";
        $query = $this->db->query($sql, array($this->input->post('username'), md5($this->input->post('password'))));
        $row = $query->row();
        $this->session->set_userdata('id', $row->id);
        $this->session->set_userdata('username', $row->username);
        $this->session->set_userdata('nama', $row->nama);
        $this->session->set_userdata('alamat', $row->alamat);
        $this->session->set_userdata('telp', $row->telp);
        $this->session->set_userdata('password', $row->password);      
        $this->load->view('home_view', $this->home_model->alert("Success"));
        }
    }

    function login()
    {   
        $captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response']:'';
        $secret_key = '6LeegzQUAAAAAOVuLJ0-h1olp-kda-OjyPmVgdVU'; //masukkan secret key-nya berdasarkan secret key masig-masing saat create api key nya
        $error = 'Gagal kirim form: captcha nya';
        if ($captcha != '') {
           $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secret_key) . '&response=' . $captcha;   
           $recaptcha = file_get_contents($url);
           $recaptcha = json_decode($recaptcha, true);
           if (!$recaptcha['success']) {
               $this->load->view('home_view', $this->home_model->alert("Mohon isi captcha dengan benar!"));
           } else {
              $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
                $this->form_validation->set_rules('password', 'Password', 'required');

                if($this->form_validation->run()) {
                    $sql = "select * from mentee where username = ? and password = ?";
                    $query = $this->db->query($sql, array($this->input->post('username'), md5($this->input->post('password'))));
                    if($query->num_rows()==0) {
                        // user not found
                         $this->load->view('home_view', $this->home_model->alert("Username/Password tidak ditemukan"));

                    } else {
                        $row = $query->row();
                        $this->session->set_userdata('id', $row->id);
                        $this->session->set_userdata('username', $row->username);
                        $this->session->set_userdata('nama', $row->nama);
                        $this->session->set_userdata('password', $row->password);
                        $data['judul'] = 'MentorRing.com | Lesatkan Ajaran Islam Lewat Mentoring';
                        $data['post'] = $this->home_model->get_post();
                        $this->load->view('header');
                        $this->load->view('navbar');
                        $this->load->view('mentee_view', $data);
                        $this->load->view('footer');
                    }
                } else {
                    if($this->input->post('username') == "" || $this->input->post('password') == ""){
                        $this->load->view('home_view', $this->home_model->alert("Field username atau password tidak boleh kosong"));
                    }else if(strlen($this->input->post('username')) <3 ){
                        $this->load->view('home_view', $this->home_model->alert("Username harus lebih dari 3 character"));
                    }
                }
           }
        } else {
            $this->load->view('home_view', $this->home_model->alert("Mohon isi captcha dengan benar!"));
        }
        
    }

    function logout()
    {   
        if( $this->session->has_userdata('nrm') ){
            unset(
                $_SESSION['id'],
                $_SESSION['nrm'],
                $_SESSION['nama'],
                $_SESSION['password']
            );
            $this->session->sess_destroy();
       } else if ( $this->session->has_userdata('username') ){
            unset(
                $_SESSION['id'],
                $_SESSION['username'],
                $_SESSION['nama'],
                $_SESSION['password']
            );
            $this->session->sess_destroy();
        }
       redirect('Home');
    }

    function post(){   
        $nmfile = "post_".time(); 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['file_name'] = $nmfile;
        $this->load->library('upload', $config);

         if($_FILES['dokumen']['name']){
            if ($this->upload->do_upload('dokumen')){
                $data = array(
                    'nama'  =>  $this->input->post('nama'),
                    'nrm'      =>  $this->input->post('nrm'),
                    'prodi'   =>  $this->input->post('prodi'),
                    'fakultas'    =>  $this->input->post('fakultas'),
                    'kota_asal'     =>  $this->input->post('kota_asal'),
                    'foto'      =>  base_url("uploads/").$this->upload->file_name,
                    'password'      => md5($this->input->post('password')),
                    'no_hp' => $this->input->post('no_hp'),
                    'jenis_kelamin' =>  $this->input->post('jenis_kelamin'),
                    'email'         => $this->input->post('email'),
                );

                $this->home_model->post($data);
                $sql = "select * from mentor";
                $query = $this->db->query($sql);
                $row = $query->row();
                        $this->session->set_userdata('id', $row->id);
                        $this->session->set_userdata('nama', $row->nama);
                        $this->session->set_userdata('nrm', $row->nrm);
                        $this->session->set_userdata('no_hp', $row->no_hp);
                        $this->session->set_userdata('password', $row->password);
                        $this->home_model->alert("Anda Sukses Mendaftar, anda akan menerima email berisi username dan password jika sudah terverivikasi");
                        redirect('home');
            }else{
                 $this->home_model->alert("Post gagal dilakukan, ulangi kembali");
                 redirect('daftar_mentor');

            }
        }
    }

    function upload_materi(){   

        $nmfile = $this->input->post('judul'); 
        $config['upload_path'] = './uploads/materi/';
        $config['allowed_types'] = 'doc|ppt|pdf|docx|xlsx|txt|xls';
        $config['file_name'] = $nmfile;
        $this->load->library('upload', $config);

         if($_FILES['materi']['name']){
            if ($this->upload->do_upload('materi')){
                $data = array(
                    'judul'  =>  $this->input->post('judul'),
                    'file'      =>  base_url("uploads/materi/").$this->upload->file_name,
                    'updated'      => date("Y-n-j")
                    
                );
                $this->db->insert('materi', $data);
                redirect('home_mentor');
            }else{
                 $this->home_model->alert("Post gagal dilakukan, ulangi kembali");
                 redirect('daftar_mentor');

            }
        }
    }

    function search(){
        $this->load->view('header');
        $this->load->view('navbar');
        $data['post_id'] = 1;
        $data['search'] = $this->home_model->get_search();
        $data['mentor'] = $this->home_model->getDataMentoring();
        $this->load->view('search_view', $data);
        $this->load->view('footer');
    }

    function konfirmasi($id){
            $where = array('id' => $id);

            $data = array('isPremiumRequest' => 0);
            
            $this->home_model->confirm_post($where);
            redirect("Home/index");
    }

    function report($id){
        $where = array('id' => $id);
        $counter= $this->home_model->get_counter($id)->counter;

        if($counter >= 4){
            $this->home_model->delete_post($where);
        }else{
            $this->home_model->tambah_counter($where);
        }
        
        redirect("Home/index");
    }
    function deleteReportedItem($id) {
        $where = array('id' => $id );
        $this->home_model->delete_post($where);
                $data['judul'] = 'Tempatqu | Best place to find the place you need';
                $data['post_id'] = 1;
                $data['post'] = $this->home_model->get_post();
                redirect ('home');        
    }
    function updateReportedItem($id) {
        $where = array('id' => $id );
        $this->home_model->setItemCounterToZero($where);
                $data['judul'] = 'Tempatqu | Best place to find the place you need';
                $data['post_id'] = 1;
                $data['post'] = $this->home_model->get_post();
                redirect ('home');        
    }
    function deleteFromRequestedPremiumItem($id) {
        $where = array('id' => $id );
        $this->home_model->setItemFlagToZero($where);
                $data['judul'] = 'Tempatqu | Best place to find the place you need';
                $data['post_id'] = 1;
                $data['post'] = $this->home_model->get_post();
                redirect ('home');   
    }
    function makeItPremium($id) {
        $data = array(
            'type' => 1,
            'isPremiumRequest' => 0
        );
        $where = array(
            'id' => $id
        );
        $this->home_model->makeItPremium($where, $data, 'barang');  
        redirect ('home/index');    
    }

    function detail_content($id) {
        $data['judul'] = 'Tempatqu | Best place to find the place you need';
        $data['post_id'] = 1;
        $data['detailpost'] = $this->home_model->get_detailpost($id);
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('detail_content', $data);
        $this->load->view('footer');
    }

    function setIsPremiumRequestedToOne($id) {
        $where = array('id' => $id );
        $this->home_model->setIsPremiumRequestedToOne($where);
                $data['judul'] = 'Tempatqu | Best place to find the place you need';
                $data['post_id'] = 1;
                //$data['post'] = $this->home_model->get_post();
                $data['post'] = $this->home_model->get_lastSixPost();
                redirect ('home'); 
    }
    
    function daftarIklan($id) {
        $data['judul'] = 'Daftar Iklan di Tempatqu';
        $data['post_id'] = 1;
        $data['daftarIklan'] = $this->home_model->get_daftarIklan($id);
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('daftar_iklan', $data);
        $this->load->view('footer');
    }

    function editIklan($id) {
        $data['editPost'] = $this->home_model->get_editIklan($id);
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('edit_post', $data);
        $this->load->view('footer');
    }
    function saveEdit($id) {

        $nmfile = "post_".time(); 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['file_name'] = $nmfile;
        $this->load->library('upload', $config);
        $array = array('id' => $id);
            if($_FILES['dokumen']['name']){
                if ($this->upload->do_upload('dokumen')){
                   
                    $data = array(
                        
                        'namabrg'      =>  $this->input->post('namabrg'),
                        'lokasi'       =>  $this->input->post('lokasi'),
                        'deskripsi'     =>  $this->input->post('deskripsi'),
                        'harga'       =>  $this->input->post('harga'),
                        'foto'       =>  base_url("uploads/").$this->upload->file_name
                    );
                    $this->home_model->save_editPost($data, $array);
                    $this->load->view('edit_post', $this->home_model->alert("Update Sukses"));
                    redirect('home/editIklan/'.$id);

                }else{
                      $this->load->view('edit_post', $this->home_model->alert("Update gagal, ulangi kembali"));
                }
            }else{
                $data = array(
                        
                        'namabrg'      =>  $this->input->post('namabrg'),
                        'lokasi'       =>  $this->input->post('lokasi'),
                        'deskripsi'     =>  $this->input->post('deskripsi'),
                        'harga'       =>  $this->input->post('harga')
                    );
                    $this->home_model->save_editPost($data, $array);
                    $this->load->view('edit_post', $this->home_model->alert("Update Sukses"));
                    redirect('home/editIklan/'.$id);

            }
    }

    function materi() {
        $data['judul'] = 'MentorRing.com | Lesatkan Ajaran Islam Lewat Mentoring';
        $data['materi'] = $this->home_model->get_materi();
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('materi', $data);
        $this->load->view('footer');
    }
    function jadwal() {
        $data['judul'] = 'MentorRing.com | Lesatkan Ajaran Islam Lewat Mentoring';
                        $data['post'] = $this->home_model->get_post();
                        $this->load->view('header');
                        $this->load->view('navbar');
                        $this->load->view('mentee_view', $data);
                        $this->load->view('footer');
    }
    function mutabaah() {
        $data['judul'] = 'MentorRing.com | Lesatkan Ajaran Islam Lewat Mentoring';
        $data['materi'] = $this->home_model->get_materi();
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('mutabaah_view', $data);
        $this->load->view('footer');
    }

    function simpan_mutabaah() {
        $data=array(
            'id_mentee' => $_SESSION['id'],
            'dhuhur'      => $this->input->post('dhuhur'),
            'ashar'         => $this->input->post('ashar'),
            'maghrib'      => $this->input->post('maghrib'),
            'isya'          => $this->input->post('isya'),
            'shubuh'          => $this->input->post('shubuh'),
            'tahajud'          => $this->input->post('tahajud'),
            'sedekah'          => $this->input->post('sedekah'),
            'tilawah'          => $this->input->post('tilawah')
            );
        $this->db->insert('mutabaah', $data);
        $this->load->view('home/mutabaah', $this->home_model->alert("Mutabaah anda berhasil disampaikan :)"));
    }

    function live_mentoring() {
        $data['mentoring'] = $this->home_model->getLiveMentoring( date('Y-n-j'));
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('live_mentoring', $data);
        $this->load->view('footer');

    }

    function tambah_jadwal($id) {
        $data['mentor'] = $this->home_model->getDataMentor();
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('tambah_jadwal', $data);
        $this->load->view('footer');
    }

    function tambah_jadwal_action($id) {
        $data = array(
            'id_mentee' => $id,
            'id_mentor' => $this->input->post('mentor'),
            'waktu' => $this->input->post('waktu')
        );  
        $this->db->insert('permintaan_jadwal', $data);

        $this->home_model->alert("Post Berhasil dilakukan");
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('tambah_jadwal');
        $this->load->view('footer');
    }

}