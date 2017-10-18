<?php

class Profile_model extends CI_Model{
	var $users = "users";

	function save_profile($data){
		$this->db->where('id', $this->session->userdata('id'));
		$this->db->update($this->users, $data);
        return TRUE;
    }

    function get_profile() {
        $this->db->from($this->users);
        $this->db->where('id', $this->session->userdata('id'));
        $query = $this->db->get();
        return $query->result();
      
    }

	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');";
		echo "window.location = '".base_url()."Profile';";
		echo "</script>";
	}
}