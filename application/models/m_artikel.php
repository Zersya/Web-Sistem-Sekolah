<?php
  /**
   *
   */
  class m_artikel extends CI_Model
  {
    function postArtikel($judul, $isi, $gambar, $kategori){
      $data = array(

        'judulPost' => $judul,
        'isiArtikel' => $isi,
        'linkGambar' => $gambar,
        'kategori' => $kategori
      );

      return $this->db->insert('artikel', $data);
    }

    function getArtikel(){

      $this->db->select('judulPost, isiArtikel, linkGambar, kategori');
      $this->db->from('artikel');
      $this->db->order_by('id_post', 'desc');
      return $this->db->get();
    }
  }
 ?>
