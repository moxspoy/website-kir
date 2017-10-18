<?php
class Home extends CI_Controller{


 
    function __Construct()
    {
        parent ::__construct();
        $this->load->model('home_model');
    }
 
    function index()
    {
        $data['judul'] = 'Tempatqu | Best place to find the place you need';
        $data['post_id'] = 1;
        $data['post'] = $this->home_model->get_post();
        $this->load->view('header');
        $this->load->view('navbar');
        if(isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
            $data['reportedPost'] = $this->home_model->get_reportedPost();
            $data['premiumRequestPost'] = $this->home_model->get_premiumRequestPost();
            $this->load->view('home_view_admin', $data);
        } else {
            if(isset($_GET['search'])) {
                $data['postPremiumOnly'] = $this->home_model->get_premiumPostOnly();
                $data['post'] = $this->home_model->get_post();
            } else {
                $data['postPremiumOnly'] = $this->home_model->get_premiumPostOnly();
                $data['lastSixPost'] = $this->home_model->get_lastSixPost();
                $this->load->view('home_view', $data);
            }
        }
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
                    $sql = "select * from users where username = ? and password = ?";
                    $query = $this->db->query($sql, array($this->input->post('username'), md5($this->input->post('password'))));
                    if($query->num_rows()==0) {
                        // user not found
                         $this->load->view('home_view', $this->home_model->alert("Username/Password tidak ditemukan"));

                    } else if ($this->input->post('username') == "admin"){
                        $this->session->set_userdata('username', $this->input->post('username'));
                        $this->session->set_userdata('id', $row->id);
                        redirect ('home');

                    } else {
                        $row = $query->row();
                        $this->session->set_userdata('id', $row->id);
                        $this->session->set_userdata('username', $row->username);
                        $this->session->set_userdata('nama', $row->nama);
                        $this->session->set_userdata('alamat', $row->alamat);
                        $this->session->set_userdata('telp', $row->telp);
                        $this->session->set_userdata('password', $row->password);
                        redirect('Home');
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
        if( $this->session->has_userdata('username')){
            unset(
                $_SESSION['id'],
                $_SESSION['username'],
                $_SESSION['nama'],
                $_SESSION['alamat'],
                $_SESSION['telp'],
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
                    'kategori'  =>  $this->input->post('kategori'),
                    'type'      =>  2,
                    'namabrg'   =>  $this->input->post('namabarang'),
                    'lokasi'    =>  $this->input->post('lokasi'),
                    'waktu'     =>  $this->input->post('waktu'),
                    'deskripsi' =>  $this->input->post('deskripsi'),
                    'harga' =>  $this->input->post('harga'),
                    'foto'      =>  base_url("uploads/").$this->upload->file_name,
                    'pengepost' =>  $this->session->userdata('id'),
					'status' 	=> 	2
                );
 
                $this->home_model->post($data);
                redirect('Home');
            }else{
                 $this->home_model->alert("Post gagal dilakukan, ulangi kembali");
                 redirect('Home');
            }
        }
    }

    function search(){
        // $data['post_id'] = 1;
        // $data['post'] = $this->home_model->get_post();
        // $this->load->view('header');
        // $this->load->view('navbar');
        // $this->load->view('home_view', $data);
        // $this->load->view('footer');
        
        // $jumlah_data = $this->home_model->jumlah_data();
        // $config['base_url'] = base_url().'home/search/';
        // $config['total_rows'] = $jumlah_data;
        // $config['per_page'] = 3;

        $data['judul'] = 'Tempatqu | Best place to find the place you need';
        $data['post_id'] = 1;
        $data['post'] = $this->home_model->get_post();
        $this->load->view('header');
        $this->load->view('navbar');
        if(isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
            $data['reportedPost'] = $this->home_model->get_reportedPost();
            $data['premiumRequestPost'] = $this->home_model->get_premiumRequestPost();
            $this->load->view('home_view_admin', $data);
        } else {
            if(isset($_GET['search'])) {
                $data['postPremiumOnly'] = $this->home_model->get_premiumPostOnly();
                $data['lastPostInSearch'] = $this->home_model->get_lastPostInSearch();
                //$this->pagination->initialize($config); 
                $this->load->view('home_view', $data);
            } else {
                $data['postPremiumOnly'] = $this->home_model->get_premiumPostOnly();
                $data['lastSixPost'] = $this->home_model->get_lastSixPost();
                $this->load->view('home_view', $data);
            }
        }
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

}