<?php
  /**
   *
   */
  class m_profil extends CI_Model
  {
    function scan_profil($query){
      return $this->db->query($query);
    }
    function setNi($ni){
      $this->session->set_flashdata('ni', $ni);
    }
    function getNi(){
      return $this->session->ni;
    }
    function setNama($nama){
      $this->session->set_flashdata('nama', $nama);
    }
    function getNama(){
      return $this->session->nama;
    }
    function setFoto($foto){
      $this->session->set_flashdata('foto', $foto);
    }
    function getFoto(){
      return $this->session->foto;
    }
  }


 ?>
