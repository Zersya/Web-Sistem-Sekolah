<?php
  /**
   *
   */
  class m_pendaftaran extends CI_Model
  {
    function tambahPendaftar($arrayData){
      return $this->db->insert('pendaftaran', $arrayData);
    }
  }


 ?>
