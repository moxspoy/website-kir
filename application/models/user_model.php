<?php
class User_model extends CI_Model{
 
    function simpan_user()
    {
        $simpan_data=array(
            'nama_lengkap'  => $this->input->post('nama_lengkap'),
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'email'         => $this->input->post('email'),
            'alamat'        => $this->input->post('alamat')
       );
        $simpan = $this->db->insert('user', $simpan_data);
        return $simpan;
    }
}