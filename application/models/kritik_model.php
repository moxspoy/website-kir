<?php
class Kritik_Model extends CI_Model {
	
	function daftar_kritik() {
        $this->db->from($this->kritik);
        $query = $this->db->get();
        return $query->result();
    }
}
?>