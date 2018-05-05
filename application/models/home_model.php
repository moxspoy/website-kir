<?php
class Home_model extends CI_Model{

    //var $tanggal_sekarang =  date('Y-n-j');
    var $materi = 'mentee';

    function post($data){
        $this->db->insert('mentor', $data);
        return TRUE;
    }

    function getDataMentoring() {
        $this->db->from('mentoring');
        $this->db->order_by("jadwal", "desc");
        $this->db->join('mentor', 'mentor.id = mentoring.id','inner');
        $query = $this->db->get();
        return $query->result();
    }

    function getDataMentor() {
        $this->db->from('mentor');
        $query = $this->db->get();
        return $query->result();
    }

    function getLiveMentoring($tanggal_skrg) {
        $this->db->from('mentoring');
        $this->db->order_by("jadwal", "desc");
        $this->db->join('mentor', 'mentor.id = mentoring.id','inner');
        $this->db->where('jadwal =', $tanggal_skrg);
        $query = $this->db->get();
        return $query->result();
    }

    function get_post() {
        if(isset($_GET['search']) && $_GET['search'] != ""  && isset($_GET['kategori']) && $_GET['kategori'] != ""){
            $this->db->from($this->materi);
            $this->db->like('judul', $_GET['search']);
            $query = $this->db->get();
            return $query->result();
        }else{
            $this->db->from($this->materi);
            $query = $this->db->get();
            return $query->result();
        }
    }
    function get_search() {
        $this->db->from('mentor');
        $this->db->like('nama', $_GET['search']);
        $query = $this->db->get();
        return $query->result();
        
    }
    function get_artikel() {
        $this->db->from('artikel');
        $query = $this->db->get();
        return $query->result();
        
    }

    function get_materi() {
        $this->db->from('materi');
        $query = $this->db->get();
        return $query->result();        
    }
    
    public function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');";
        echo "window.location = '".base_url()."Home';";
        echo "</script>";      
    }
}