<?php
  /**
   *
   */
  class Ortu extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('m_login');
      $this->load->model('m_ortu');
    }

    function index(){
		$NIS=$this->session->NIS;
		$nis = $this->m_ortu->scan_profil("select NoInduk, nis from wali_murid");
		$where = array ('NIS' => $NIS);
        $nilai    = array('nilai' => $this->m_ortu->listNilai($where));

      $this->load->view('v_ortu',$nilai);
    }


	function ke_list_nilai(){
		  $nis = $this->m_ortu->scan_profil("select NoInduk, nis from wali_murid");
		  $where = array ('nis' => $nis);
          $nilai    = array('nilai' => $this->m_ortu->listNilai($where));

          $this->load->view('v_ortu', $nilai);
		
    }
	function getDataNilai(){
      $where = $this->session->nip;
      $query = $this->m_ortu->scan_profil("select no, NIS, NIP, kode_pelajaran, UAS, UTS, Quis1, Quis2, Quis3 from nilai where NIP = '".$where."'");

      foreach ($query->result() as $row) {
        $dataNilai = array(
		  'No'   => $row->No,
          'NIS'   => $row->NIS,
          'NIP'  => $row->NIP,
          'kode_pelajaran'  => $row->kode_pelajaran,
		  'UAS'  => $row->UAS,
		  'UTS'  => $row->UTS,
		  'Quis1'  => $row->Quis1,
		  'Quis2'  => $row->Quis2,
		  'Quis3'  => $row->Quis3
        );
        $data = array('data' => $dataNilai);
      }

      return $data;
    }
        
		
  }
 ?>