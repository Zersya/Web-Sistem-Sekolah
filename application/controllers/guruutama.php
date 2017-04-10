<?php
  /**
   *
   */
  class GuruUtama extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('m_profil');
      $this->load->model('m_artikel');
    }

    function index(){

      $where = $this->session->nip;
      $query = $this->m_profil->scan_profil("select nip, namaGuru, foto from guru where nip = '".$where."'");

      foreach ($query->result() as $row) {
        $this->m_profil->setNi($row->nip);
        $this->m_profil->setNama($row->namaGuru);
        $this->m_profil->setFoto($row->foto);
      }

      $this->load->view('v_guruutama_beranda');
    }

    function logout(){
      $data = array('nama' => '' ,
      'nis' => '',
      'foto' => '',
      'status' => '');
      $this->session->unset_userdata($data);
      $this->session->sess_destroy();

      redirect(base_url('index.php/loginGuru'));
    }
  }


 ?>
