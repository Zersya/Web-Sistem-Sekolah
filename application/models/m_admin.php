<?php
  /**
   *
   */
  class m_admin extends CI_Model
  {
      function scan_profil($query){
        return $this->db->query($query);
      }
      function insertData($table, $data){
        return $this->db->insert($table, $data);
      }

      function deleteData($table, $value){
        return $this->db->delete($table, $value);
      }
      function whereData($table, $where){
        $this->db->select('*');
        $this->db->where($where);
        $this->db->from($table);

        return $this->db->get()->result();
      }
      function cekData($table, $where){
        $this->db->select('*');
        return $this->db->get_where($table, $where);
      }
      function arrData($table,$select){
        $this->db->select($select);
        $this->db->from($table);

        return $this->db->get()->result_array();
      }

      function listData($table, $select){
        $this->db->select($select);
        $this->db->from($table);

        return $this->db->get()->result();
      }

      function updateData($set, $value, $table){
        $this->db->where($set);
        return $this->db->update($table, $value);
      }

      //listPendaftar
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


      //murid
      function listMurid(){
        $this->db->select('*');
        $this->db->from('murid');

        return $this->db->get()->result();
      }

      function updateMurid($nis, $value){
        $this->db->where('nis', $nis);
        return $this->db->update('murid', $value);
      }
      //artikel

      function getArtikel(){

        $this->db->select('judulPost, isiArtikel, linkGambar, kategori');
        $this->db->from('artikel');
        $this->db->order_by('id_post', 'desc');
        return $this->db->get();
      }

      //guru
      function listGuru(){
        $this->db->select('*');
        $this->db->from('guru');

        return $this->db->get()->result();
      }


  }


 ?>
