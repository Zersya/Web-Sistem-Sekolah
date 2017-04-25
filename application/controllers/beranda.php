<?php
  /**
   *
   */
  class Beranda extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
	  $this->load->model('m_profil'); 
	  $this->load->model('m_admin'); 
    }

    function index(){
	  $this->load->view('header_murid', $this->getDataMurid()); 
      $this->load->view('v_muridutama_beranda');
    }
	function getDataMurid(){
      $where = $this->session->nis;
      $query = $this->m_admin->scan_profil("select Nis, Nama_murid, foto from murid where nis = '".$where."'");
      foreach ($query->result() as $row) {
        $dataMurid = array(
          'nis'   => $row->Nis,
          'nama_murid'  => $row->Nama_murid,
          'foto'  => $row->foto
        );
        $data = array('data' => $dataMurid);
      }
	  
      return $data;
    } 
  }
 ?>
