<?php
  /**
   *
   */
  class MuridUtama extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('m_profil');
    }

    function index(){
      $where = $this->session->nama;

      $query = $this->m_profil->scan_profil("select nis from akun_murid where username_murid = '".$where."'");

      foreach ($query->result() as $row) {
        $this->m_profil->setNis($row->nis);
      }

      $this->load->view('v_muridutama');
    }

    function logout(){
      $data = array('nama' => '' ,
      'nis' => '',
      'status' => '');
      $this->session->unset_userdata($data);
      $this->session->sess_destroy();

      redirect(base_url('index.php/login'));
    }

  }


 ?>
