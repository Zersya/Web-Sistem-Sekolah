<?php
  /**
   *
   */
  class M_murid extends CI_Model
  {
    function listMurid(){
      $this->db->select('*');
      $this->db->from('murid');

      return $this->db->get()->result();
    }

    function whereMurid($where){
      $this->db->where($where);
      $this->db->from('murid');

      return $this->db->get()->result();
    }

    function updateMurid($nis, $value){
      $this->db->where('nis', $nis);
      return $this->db->update('murid', $value);
    }
  }

 ?>
