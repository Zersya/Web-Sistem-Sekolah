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
	function presensi(){
      $result = $this->m_admin->listData('presensi', '*');
      $data = array('presensi' => $result );

      $this->load->view('header_Murid', $this->getDataMurid());
      $this->load->view('v_tampilpresensi', $data);
    }
	function nilai(){
      $result = $this->m_admin->listData('nilai', '*');
      $data = array('nilai' => $result );

      $this->load->view('header_Murid', $this->getDataMurid());
      $this->load->view('v_tampilnilai', $data);
    }
	function guru(){
      $result = $this->m_admin->listData('guru', '*');
      $data = array('guru' => $result );

      $this->load->view('header_Murid', $this->getDataMurid());
      $this->load->view('v_tampilguru', $data);
    }
	function pelajaran(){
      $result = $this->m_admin->listData('pelajaran', '*');
      $data = array('pelajaran' => $result );

      $this->load->view('header_Murid', $this->getDataMurid());
      $this->load->view('v_tampilpelajaran', $data);
    }
  }
 ?>
