<?php
  /**
   *
   */
  class m_pendaftaran extends CI_Model
  {
    function tambahPendaftar($arrayData){
      return $this->db->insert('pendaftaran', $arrayData);
    }

    function getPendaftar(){
      return $this->db->get('pendaftaran');
    }

    function setVertifikasi($value){
      //seleksi sesuai noDaftar
      $this->db->where($value);
      $this->db->from('pendaftaran');

      return $this->db->get()->result();
    }

    function vertifikasi($arrData){
      return $this->db->insert('murid', $arrData);
    }

    function insertAkun($arrData){
      return $this->db->insert('akun_murid', $arrData);
    }

    function PendaftarDelete($value){
      return $this->db->delete('pendaftaran', $value);
    }
  }


 ?>
