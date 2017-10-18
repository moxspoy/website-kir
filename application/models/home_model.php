<?php
class Home_model extends CI_Model{
 
    var $barang = 'barang';

    function post($data){
        $this->db->insert($this->barang, $data);
        return TRUE;
    }

    function get_post() {
        if(isset($_GET['search']) && $_GET['search'] != ""  && isset($_GET['kategori']) && $_GET['kategori'] != ""){
            $this->db->from($this->barang);
            $this->db->like('namabrg', $_GET['search']);
            $this->db->where('kategori', $_GET['kategori']);
            $query = $this->db->get();
            return $query->result();
        }else if(isset($_GET['search']) && $_GET['search'] != "" && isset($_GET['kategori']) && $_GET['kategori'] == ""){
            $this->db->from($this->barang);
            $this->db->like('namabrg', $_GET['search']);
            $query = $this->db->get();
            return $query->result();
        }else if(isset($_GET['search']) && $_GET['search'] == "" && isset($_GET['kategori']) && $_GET['kategori'] != ""){
            $this->db->from($this->barang);
            $this->db->where('kategori', $_GET['kategori']);
            $query = $this->db->get();
            return $query->result(); 
        }else{
            $this->db->from($this->barang);
            $query = $this->db->get();
            return $query->result();
        }
      
    }
    function get_reportedPost() {
        $query = $this->db->get_where('barang', 'counter > 5');
        return $query->result();
    }
    function get_premiumRequestPost() {
        $query = $this->db->get_where('barang', 'isPremiumRequest > 0');
        return $query->result();
    }
    function get_premiumPostOnly() {
        $this->db->order_by("waktu", "desc");
        if(isset($_GET['search']) && $_GET['search'] != ""  && isset($_GET['kategori']) && $_GET['kategori'] != ""){
            $this->db->from($this->barang);
            $this->db->like('namabrg', $_GET['search']);
            $this->db->where('kategori', $_GET['kategori']);
            $this->db->where('type', 1);
            $query = $this->db->get();
            return $query->result();
        }else if(isset($_GET['search']) && $_GET['search'] != "" && isset($_GET['kategori']) && $_GET['kategori'] == ""){
            $this->db->from($this->barang);
            $this->db->like('namabrg', $_GET['search']);
            $this->db->where('type', 1);
            $query = $this->db->get();
            return $query->result();
        }else if(isset($_GET['search']) && $_GET['search'] == "" && isset($_GET['kategori']) && $_GET['kategori'] != ""){
            $this->db->from($this->barang);
            $this->db->where('kategori', $_GET['kategori']);
            $this->db->where('type', 1);
            $query = $this->db->get();
            return $query->result(); 
        }else{
            $this->db->order_by("waktu", "desc");
            //tampilkan hanya 6 post saja
            $this->db->limit(6);
            $query = $this->db->get_where('barang', 'type = 1');
            return $query->result();
        }
    }
    function get_lastSixPost() {
        $this->db->order_by("waktu", "desc");
        
            //tampilkan hanya 3 post saja
            $this->db->limit(6);
            $query = $this->db->get_where('barang', 'type = 2');
            return $query->result();
        
    }
    function get_lastPostInSearch() {
        $this->db->order_by("waktu", "desc");
        if(isset($_GET['search']) && $_GET['search'] != ""  && isset($_GET['kategori']) && $_GET['kategori'] != ""){
            $this->db->from($this->barang);
            $this->db->like('namabrg', $_GET['search']);
            $this->db->where('kategori', $_GET['kategori']);
            $this->db->where('type', 2);
            $query = $this->db->get();
            return $query->result();
        }else if(isset($_GET['search']) && $_GET['search'] != "" && isset($_GET['kategori']) && $_GET['kategori'] == ""){
            $this->db->from($this->barang);
            $this->db->like('namabrg', $_GET['search']);
            $this->db->where('type', 2);
            $query = $this->db->get();
            return $query->result();
        }else if(isset($_GET['search']) && $_GET['search'] == "" && isset($_GET['kategori']) && $_GET['kategori'] != ""){
            $this->db->from($this->barang);
            $this->db->where('kategori', $_GET['kategori']);
            $this->db->where('type', 2);
            $query = $this->db->get();
            return $query->result(); 
        }else{
            //tampilkan hanya 3 post saja
            //$this->db->limit(3);
            $this->db->order_by("waktu", "desc");
            $query = $this->db->get_where('barang', 'type = 2');
            return $query->result();
        }
    }


    function confirm_post($id, $data){
        $this->db->set('isPremiumRequest', '0');
        $this->db->where($id);
        $this->db->update('barang', $data);
    }

    function tambah_counter($id){        
        $this->db->set('counter', 'counter+1', false);
        $this->db->where($id);
        $this->db->update('barang');
    
    }

    function delete_post($where){
        $this->db->where($where);
        $this->db->delete('barang');
    }

    function get_counter($id){
        $query = 'select counter from barang where id = '.$id;
        return $this->db->query($query)->row();
    }

    public function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');";
        echo "window.location = '".base_url()."Home';";
        echo "</script>";      
    }

    public function setItemCounterToZero($id) {
        $this->db->set('counter', 0, false);
        $this->db->where($id);
        $this->db->update('barang');
    }
    public function setItemFlagToZero($id) {
        $this->db->set('isPremiumRequest', 0, false);
        $this->db->where($id);
        $this->db->update('barang');
    }

    function makeItPremium($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    
    function get_detailpost($id) {
        $query = $this->db->get_where('barang', 'id = '.$id);
        return $query->result();
    }

    function setIsPremiumRequestedToOne($id) {
        $this->db->set('isPremiumRequest', 1, false);
        $this->db->where($id);
        $this->db->update('barang');
    }

    function jumlah_data(){
        return $this->db->get('barang')->num_rows();
    }

    function get_daftarIklan($id) {
        $this->db->order_by("waktu", "desc");
        $query = $this->db->get_where('barang', 'pengepost = '.$id);
        return $query->result();
    }

    function get_editIklan($id) {
        $this->db->order_by("waktu", "desc");
        $query = $this->db->get_where('barang', 'id = '.$id);
        return $query->result();
    }

    function save_editPost($data, $array){
        $this->db->where($array);
        $this->db->update($this->barang, $data);
        return TRUE;
    }
    function daftar_kritik() {
        $this->db->order_by("tanggal", "desc");
        $query = $this->db->get('kritik');
        return $query->result();
    }
}