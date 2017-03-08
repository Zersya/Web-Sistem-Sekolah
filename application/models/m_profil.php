<?php
  /**
   *
   */
  class m_profil extends CI_Model
  {
    function scan_profil($query){
      return $this->db->query($query);
    }
    function setNis($nis){
      $this->session->set_flashdata('nis', $nis);
    }
    function getNis(){
      return $this->session->nis;
    }
  }


 ?>
