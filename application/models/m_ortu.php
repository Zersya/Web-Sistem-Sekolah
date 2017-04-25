<?php
class m_Ortu extends CI_Model
{
	function listNilai($where){
        $this->db->select('*');
        $this->db->from('nilai');
		$this->db->where($where);

        return $this->db->get()->result();
    }
	function listPresensi($where){
        $this->db->select('*');
        $this->db->from('presensi');
		$this->db->where($where);

        return $this->db->get()->result();
    }
	function scan_profil($query){
        return $this->db->query($query);
    }
}
?>