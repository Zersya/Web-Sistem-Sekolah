<?php
/**
 *
 */
class Artikel extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_artikel');
    $this->load->helper(array('form', 'url'));
  }


  function index(){
    $this->load->view('v_artikel');
  }

  function posting(){

    $judul = $this->input->post('judul');
    $content = $this->input->post('isiartikel');
    $kategori = $this->input->post('kategoriArt');
    if(empty($judul) || empty($content)){
      echo "<script>
      alert('Harap Isi dengan Benar');
      window.location.href='".base_url('index.php/artikel')."';
      </script>";
    }else{
      $gambar = $this->uploading();
      $insert = $this->m_artikel->postArtikel($judul, $content, $gambar, $kategori);
      echo "<script>
      alert('Tambah Postingan Berhasil');
      window.location.href='".base_url('index.php/artikel')."';
      </script>";
    }
  }

  function uploading(){
    $config['upload_path']    = './images/artikel/';
    $config['allowed_types']   = 'jpg|png';
    $config['max_size']       = '550';

    $this->load->library('upload', $config);

    if(!$this->upload->do_upload('userfile')){
      echo $this->upload->display_errors();
    }else{
      $data = array('upload_data' => $this->upload->data() );
      $link = base_url('images/artikel/'.$this->upload->data('file_name'));

      return $link;
    }
  }
}


 ?>
